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
		redirect("");
	}

	public function blog(){
		$this->load->library("pagination");
		$this->load->model("post");
		$this->load->model("home");
		$data["home"] = $this->home->load();
		$data['user'] = $this->user->get();
		$month = ($this->uri->segment(2) ? $this->uri->segment(2) : date("m"));
		$config['base_url'] = base_url() . "blog";
		$config["total_rows"] = 12;
		$config['per_page'] = 1;
		$config['use_page_numbers'] = TRUE;
		$config['num_links'] = 2;
		$config["uri_segment"] = 2;
		$config["year"] = ($this->input->post("year") ? $this->input->post("year") : "2017");
		$config['first_link'] = "JAN " . $config["year"];
		$config['last_link'] = "DEC " . $config["year"];
		$config['first_tag_close'] = '</h3></a>';
		$config['prev_link'] = '';
		$this->pagination->initialize($config);
		$data['link'] = $this->pagination->create_links2();
		$data['posts'] = $this->post->view_post_month($month,$config["year"]);
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
		$this->email->message('
			Email : ' . $email . '<br>
			Name : ' . $name .' <hr>
			Message : ' . $message .'
		');

		if($this->email->send()){
			$this->load->model("message");
			$this->message->add($name,$email,$message);
			$this->session->set_flashdata('status','success');
		}else{
			$this->session->set_flashdata('status','failed');
		}

		redirect("contact");
	}
}
