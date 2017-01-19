<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controlpanel extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->library("session");
	}

	public function index(){
		$data =[];
		if($this->session->userdata("active")){
			$data["active"] = $this->session->userdata('active');
		}else{
			redirect("controlpanel/login");
		}
		redirect("home");
	}

	public function login(){
		if($this->input->post("btnLogin")){
			$this->load->model("user");
			$username = $this->input->post("u");
			$pass = $this->input->post("p");
			$user = $this->user->login($username,$pass);
			if($user){
				$this->session->set_userdata("active",$user);
				redirect("cp");
			}
		}
		$this->load->view("login");
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect("login");
	}

	public function home(){
		$this->load->model("home");

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_width'] = '4000';
		$config['max_height'] = '4000';
		$this->load->library('upload', $config);

		$data['page'] = "Homepage";
		$data['home'] = $this->home->load();
		$data['content2'] = $this->home->load_content_2();
		$data['content3'] = $this->home->load_content_5();
		$this->load->view("dashboard",$data);
	}

	public function update_home(){
		$data['title'] = $this->input->post('title');
		$data['title2'] = $this->input->post('title2');
		$data['content'] = $this->input->post('content');
		$data['title3'] = $this->input->post('title3');

		$data2['c2-title1'] = $this->input->post('c2-title1');
		$data2['c2-title2'] = $this->input->post('c2-title2');
		$data2['c2-title3'] = $this->input->post('c2-title3');
		$data2['c2-title4'] = $this->input->post('c2-title4');
		$data2['c2-content1'] = $this->input->post('c2-content1');
		$data2['c2_content2'] = $this->input->post('c2-content2');
		$data2['c2-content3'] = $this->input->post('c2-content3');
		$data2['c2-content4'] = $this->input->post('c2-content4');

		$data['title5'] = $this->input->post('title5');
		$data['title6'] = $this->input->post('title6');
		$data['content6'] = $this->input->post('content6');
		$this->load->model("home");
		echo $this->home->update($data);
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
