<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif_m extends CI_Model {

	public function get($id=null)
	{
		$this->db->from('tarif');
		if($id !=null){
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function gettarif($table_name)
	{
		$get_harga= $this->db->get($table_name);
		return $get_harga->row();

	}
	public function gettarif2($table_name)
	{
		$get_harga= $this->db->get($table_name);
		return $get_harga->row(1);

	}
	public function gettarif3($table_name)
	{
		$get_harga= $this->db->get($table_name);
		return $get_harga->row(2);

	}

	public function get2($id=null)
	{	
		$this->db->from('tarif');
		if($id !=null){
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function input($post)
	{ 
		$params = [
			'tarif' => $post['tarif'],
			'beban'	=> $post['beban'],	
			'id'	=> $post['id'],	
		];
		$this->db->where('id',$post['id']);
		$this->db->update('tarif',$params);
	}

}