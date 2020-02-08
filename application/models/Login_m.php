<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_m extends CI_Model {
	public function get($id=null)
	{
		$this->db->from('user');
		if($id != null){
			$this->db->where('user_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'username' => strtolower($post['username']),
			'id' => $post['id'],
			'level'	=> '1',
			'password' => sha1(strtolower($post['password']))

		];
		$this->db->insert('user',$params);
	}

	public function add2($post)
	{
		$params = [
			'username' => strtolower($post['username']),
			'id_p' => $post['id'],
			'level'	=> '2',
			'password' => sha1(strtolower($post['password']))

		];
		$this->db->insert('user',$params);
	}

}