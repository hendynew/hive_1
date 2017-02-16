<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("session");
		$this->load->model("user");
	}

	public function index(){
		$this->load->model("home");
		$data['user'] = $this->user->get();
		$data["home"] = $this->home->load();
		$data["home_content_2"] = $this->home->load_content_2();
		$data["home_content_5"] = $this->home->load_content_5();
		$this->load->view('index',$data);
	}

	public function subscribe(){
		$this->load->model("subscriber");
		$this->subscriber->add($this->input->post("Email"));
		$this->session->set_flashdata("notice","success");
		echo "ok";
	}

	public function videos(){
		$this->load->model("user");
		$this->load->model("video");
		$data['user'] = $this->user->get();
		$data['page'] = $this->video->get_page();
		$data['videos'] = $this->video->get();
		$this->load->view("videos",$data);
	}

	public function blog(){
		$this->load->model("post");
		$data['user'] = $this->user->get();
		$data['month'] = ($this->uri->segment(2) ? $this->uri->segment(2) : date("m"));
		$data['year'] = ($this->input->post("year") ? $this->input->post("year") : date("y"));
		$data['posts'] = $this->post->view_post_month($data['month'],$data['year']);
		$this->load->view("blog",$data);
	}

	public function view_blog($id_blog){
		$this->load->model("post");
		$this->load->library("pagination");
		$data['user'] = $this->user->get();
		$config['base_url'] = base_url() . "view_blog";
		$config["total_rows"] = $this->post->count_post();
		$config['per_page'] = 1;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 2;
		$config["uri_segment"] = 2;
		$config['first_tag_close'] = '</h3></a>';
		$config['prev_link'] = '';
		$config['first_link'] = '1';
		$config['last_link'] = $this->post->count_post();
		$this->pagination->initialize($config);
		$data['link'] = $this->pagination->create_links3();
		$data["post"] = ($id_blog == "latest") ? $this->post->view_post($config["total_rows"]) : $this->post->view_post($id_blog);
		$this->load->view("blog-content-1",$data);
	}

	public function about(){
		$this->load->model("about");
		$this->load->model('home');
		$data['home'] = $this->home->load();
		$data["partner"] = $this->home->load_content_5();
		$data['user'] = $this->user->get();
		$data['about'] = $this->about->load();
		$this->load->view("about",$data);
	}

	public function contact(){
		$data['user'] = $this->user->get();
		$this->load->view("contact",$data);
	}

	public function sendmail(){
		$this->load->model("user");
		$admin = $this->user->email();
		$name = $this->input->post("Name");
		$email = $this->input->post("Email");
		$message = $this->input->post("Message");
		$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_user' => 'email.edwinprasetyo@gmail.com',
	    'smtp_pass' => 'edwinprasetyo',
	    'mailtype'  => 'html',
	    'charset'   => 'iso-8859-1'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->initialize($config);

		$this->email->from('email.edwinprasetyo@gmail.com', 'Admin Email');
		$this->email->to($admin->email);

		$this->email->subject($name . ' wants to talk to you.');
		$this->email->message('Email : ' . $email . '<br> Name : ' . $name .' <hr>Message : ' . $message);

		if($this->email->send()){
			$this->load->model("message");
			$this->message->add($name,$email,$message);
			$this->session->set_flashdata('status','success');
		}else{
			$this->session->set_flashdata('status','failed');
		}

		echo "ok";
	}
}
