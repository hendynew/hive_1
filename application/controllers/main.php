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
		
		$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_timeout' => '7',
	    'smtp_user' => 'email.edwinprasetyo@gmail.com',
	    'smtp_pass' => 'edwinprasetyo',
	    'mailtype'  => 'html',
	    'charset'   => 'utf-8'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->initialize($config);

		$this->email->from('email.edwinprasetyo@gmail.com', 'Admin Email');
		$this->email->to($this->input->post("Email"));

		$this->email->subject('Thank you for subscribing!');
		$this->email->message('We are looking forward to work with you! Thanks ! By: edwinprasetyo');

		if($this->email->send()){
			$this->load->model("message");
			$this->subscriber->add($this->input->post("Email"));
			echo "OK";
		}else{
			echo "No";
		}
		$this->session->set_flashdata("notice","success");
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
		$data['user'] = $this->user->get();
		$data["post"] = ($id_blog == "latest") ? $this->post->view_post($this->post->count_post()) : $this->post->view_post($id_blog);
		$this->load->view("blog-content-".$data['post']->blog_content,$data);
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
		$data = $_POST['data'];
		
		$config = array(
	    'protocol' => 'smtp',
	    'smtp_host' => 'ssl://smtp.googlemail.com',
	    'smtp_port' => 465,
	    'smtp_timeout' => '7',
	    'smtp_user' => 'email.edwinprasetyo@gmail.com',
	    'smtp_pass' => 'edwinprasetyo',
	    'mailtype'  => 'html',
	    'charset'   => 'utf-8'
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		$this->email->initialize($config);

		$this->email->from('email.edwinprasetyo@gmail.com', 'Admin Email');
		$this->email->to($admin->email);

		$this->email->subject($data[0]['value'] . ' wants to talk to you.');
		$this->email->message('Email : ' . $data[1]['value'] . '<br> Name : ' . $data[0]['value'] .' <hr>Message : ' . $data[2]['value']);

		if($this->email->send()){
			$this->load->model("message");
			$this->message->add($data[0]['value'],$data[1]['value'],$data[2]['value']);
			echo "OK";
		}else{
			echo "No";
		}
		
	}
}
