<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', strtolower($post['username']));
		$this->db->where('password', sha1(strtolower($post['password'])));
		$query = $this->db->get();
		return $query;
	}

	public function get($id=null)
	{
		$this->db->from('user')->order_by('level','ASC');
		if($id !=null){
			$this->db->where('user_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function edit($post)
	{
		$params['username'] = strtolower($post['username']);
		if(!empty($post['password'])){
			$params['password'] = sha1(strtolower($post['password']));
		}
		$params['password'] =sha1(strtolower($post['password']));
		$this->db->where('user_id',$post['user_id']);
		$this->db->update('user',$params);
	}

	// public function del($id)
	// {
	// 	$this->db->where('user_id',$id);
	// 	$this->db->delete('user');
	// }
	
}