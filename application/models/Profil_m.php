<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_m extends CI_Model {

public function get($id=null)
	{
		$this->db->from('user');
		if($id !=null){
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

public function edit($post)
	{
		if(!empty($post['password'])){
			$params['password'] = sha1(strtolower($post['password']));
		}
		$params['password'] =sha1(strtolower($post['password']));
		$this->db->where('username',$post['id']);
		$this->db->update('user',$params);
	}

}	