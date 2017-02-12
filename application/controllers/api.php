<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	public function select_post(){
		$this->load->model("post");
		$return = '';
		if($_POST['search']){
			$return = $this->post->search($_POST['isi']);
		}else{
			$return = $this->post->view_post_month($_POST['month'], $_POST['year']);
		}
		
		echo json_encode($return);
	}
}
