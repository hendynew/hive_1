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

	public function blog(){
		$this->load->model("post");
		$data['post'] = $this->post->all_post();
		$data['page'] = "Blog";
		$this->load->view("dashboard-blog",$data);
	}

	public function new_blog(){
		$data['page'] = "New Blog";
		$this->load->view("dashboard-new-blog",$data);
	}

	public function update_home(){
		for ($i=1; $i <= sizeof($_FILES); $i++) { 
			if ( 0 < $_FILES['file']['error'] ) {
	        	echo 'Error: ' . $_FILES['file']['error'] . '<br>';
	    	}
	    	else {
		        move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $_FILES['file']['name']);
				$arr = array(
					$_POST['img']=>$_FILES['file']['name']
				);
				$this->load->model("home");
				$this->home->update($arr);
	    	}
		}
		$data = [];
		if(isset($_POST['title'])) $data['title'] = $_POST['title'];
		if(isset($_POST['title2'])) $data['title2'] = $_POST['title2'];
		if(isset($_POST['content'])) $data['content'] = $_POST['content'];

		if(isset($_POST['title3'])) $data['title3'] = $_POST['title3'];

		if(isset($_POST['title5'])) $data['title5'] = $_POST['title5'];

		if(isset($_POST['title6'])) $data['title6'] = $_POST['title6'];
		if(isset($_POST['content6'])) $data['content6'] = $_POST['content6'];
		$this->load->model("home");
		if(sizeof($data) > 0) {
			if($this->home->update($data)) echo "1";
		}
	}

	public function update_partner(){
		$arr = [];
		for($i=1; $i<=count($_FILES); $i++){
			if($_FILES["file" . $i]['error'] == 0){
				if(move_uploaded_file($_FILES["file" . $i]['tmp_name'], 'uploads/' . $_FILES["file" . $i]['name'])) {
			    	$arr['url_image'][$i] = $_FILES["file" . $i]['name'];
				} else{
				    echo "There was an error uploading the file, please try again! <br />";
				}
			} else $arr['url_image'][$i] = "0";
		}
		for ($i=1; $i <= 5; $i++) { 
			$arr['since'][$i]= $_POST['since' . $i];
		}
		$arr['title'] = $_POST['title'];
		$this->load->model("home");
		$this->home->update_c2($arr);
	}

	public function update_fitur(){
		$arr = [];
		for($i=1; $i<=count($_FILES); $i++){
			if($_FILES["fiturfile" . $i]['error'] == 0){
				if(move_uploaded_file($_FILES["fiturfile" . $i]['tmp_name'], 'uploads/' . $_FILES["fiturfile" . $i]['name'])) {
			    	$arr['url_image'][$i] = $_FILES["fiturfile" . $i]['name'];
				} else{
				    echo "There was an error uploading the file, please try again! <br />";
				}
			} else $arr['url_image'][$i] = "0";
		}
		for ($i=1; $i <= 4; $i++) { 
			$arr['content'][$i]= $_POST['fiturcontent' . $i];
			$arr['titlecontent'][$i]= $_POST['fiturtitle' . $i];
		}
		$arr['title'] = $_POST['title'];
		$this->load->model("home");
		$this->home->update_fitur($arr);
	}

	public function update_hero_blog(){
		$arr = [];
		if($_FILES["herofile"]['error'] == 0){
				if(move_uploaded_file($_FILES["herofile"]['tmp_name'], 'uploads/' . $_FILES["herofile"]['name'])) {
			    	$arr['url_image_bg_hero_blog'] = $_FILES["herofile"]['name'];
				} else{
				    echo "There was an error uploading the file, please try again! <br />";
				}
			} else $arr['url_image_bg_hero_blog'] = "0";
		$this->load->model("home");
		if($arr['url_image_bg_hero_blog'] != "0") $this->home->update($arr);
	}

	public function submitnewblog(){
		$arr = [];
		if($_FILES["file"]['error'] == 0){
				if(move_uploaded_file($_FILES["file"]['tmp_name'], 'uploads/' . $_FILES["file"]['name'])) {
			    	$arr['file'] = $_FILES["file"]['name'];
				} else{
				    $arr['file'] = "0";
				}
			} else $arr['file'] = "0";
		$arr['title'] = $_POST["title"];
		$arr['caption'] = $_POST["caption"];
		$arr['content'] = $_POST["content"];
		$this->load->model("post");
		echo $this->post->new_post($arr);
	}
}
