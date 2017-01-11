<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function all_post(){
		$hasil = $this->db->where("status","1")->get("post")->result_array();
		for ($i=0; $i < sizeof($hasil); $i++) {
			$hasil[$i]["date"] = $this->change_format_date($hasil[$i]["date"]);
		}
		return $hasil;
	}

	public function view_post($id){
		$hasil = $this->db->where("post_id",$id)->get("post")->row();
		$hasil->date = $this->change_format_date($hasil->date);
		return $hasil;
	}

	public function change_format_date($date){
		return date("l, d.m.y",strtotime($date));
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
