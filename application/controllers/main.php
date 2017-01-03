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
		$this->load->view('login');
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
}
