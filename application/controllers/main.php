<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("session");
	}

	public function index(){
		$this->load->view('index');
	}

	public function login(){
		if($this->input->post("btnLogin")){
			$this->load->model("user");
			$username = $this->input->post("username");
			$pass = $this->input->post("pass");
			$user = $this->user->login($username,$pass);
			if(!$user){
				redirect("main/index");
			}else{
				$this->session->set_userdata("active",$user);
				redirect("main/home");
			}
		}
	}

	public function home(){
		$this->load->model("post");

		$data =[];
		if(!$this->session->userdata("active")){
			redirect("main/index");
		}

		$data['post'] = $this->post->all_post();
		$data['active'] = $this->session->userdata('active');
		$this->load->view("home",$data);
	}

	public function new_post(){
		if($this->input->post("btnPost")){
			$this->load->model("post");
			$title = $this->input->post("title");
			$post = $this->input->post("post");
			$this->post->new_post($title,$post);
			redirect("main/home");
		}
	}

	public function blog($activeMonth = '1',$activeYear='2017'){
		$this->load->model("post");
		$data['activeMonth'] = $activeMonth;
		$data['activeMonth'] = $activeYear;
		$data['posts'] = $this->post->all_post();
		$this->load->view("blog",$data);
	}

	public function view_blog($id_blog){
		$this->load->model("post");
		$data["post"] = $this->post->view_post($id_blog);
		$this->load->view("blog-content-1",$data);
	}

	public function about(){
		$this->load->view("about");
	}

	public function contact(){
		$this->load->view("contact");
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
