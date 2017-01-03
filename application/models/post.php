<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function all_post(){
		return $this->db->get("post")->result();
	}

	public function count_post(){
		return $this->db->count_all("post") + 1;
	}

	public function new_post($title,$post){
		$arr = [
			"post_id"=>$this->count_post(),
			"title"=>$title,
			"post"=>$post,
			"status"=>1
		];
		$this->db->insert("post",$arr);
	}

}
