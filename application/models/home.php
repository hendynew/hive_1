<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Model {

	function __construct(){
		$this->load->database();
	}

	public function load()
	{
		return $this->db->get("page_home")->row();
	}

	public function load_content_2(){
		return $this->db->get("home_content_2")->result();
	}

	public function load_content_5(){
		return $this->db->get("partner")->result();
	}

	public function update($data){
		$this->db->where('id_change','1');
		return $this->db->update("page_home",$data);
	}

	public function update_c2($data){
		$this->db->where("id_change",'1')->update("page_home",array("title5"=>$data["title"]));
		for ($i = 1; $i <= 5; $i++) {
			$this->db->where('id_content',$i)->update("partner",array('since'=>$data['since'][$i]));
			if($data['url_image'][$i] != "0") {
				$this->db->where('id_content',$i)->update("partner",array('url_image'=>$data['url_image'][$i]));
			}
		}
	}

	public function update_fitur($data){
		$this->db->where("id_change",'1')->update("page_home",array("title3"=>$data["title"]));
		for ($i = 1; $i <= 4; $i++) {
			$arr = array('content'=>$data['content'][$i],'title'=>$data['titlecontent'][$i]);
			$this->db->where('id_content',$i)->update("home_content_2",$arr);
			if($data['url_image'][$i] != "0") {
				$this->db->where('id_content',$i)->update("home_content_2",array('url_image'=>$data['url_image'][$i]));
			}
		}
	}


}
