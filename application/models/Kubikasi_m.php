<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kubikasi_m extends CI_Model {
	public function get($id=null)
	{
		// $this->db->from('kubikasi');
		// if($id != null){
		// 	$this->db->where('kubikasi_id',$id);
		// }
		// $query = $this->db->get();
		// return $query;
		$this->db->select('pelanggan.*,kubikasi.pelanggan_id AS pelanggan_id, kubikasi.kubikasi, kubikasi.kubikasi_id,kubikasi.bulan,kubikasi.total ');
		$this->db->join('kubikasi', 'pelanggan.pelanggan_id = kubikasi.pelanggan_id');
		$this->db->from('pelanggan');
		$this->db->from('kubikasi');
		$query = $this->db->get();
		return $query->result();
	}
	
	public function ambilkubikasi($id){
		$this->db->from('kubikasi');
		if($id != null){
			$this->db->where('kubikasi_id',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params = [
			'name' => $post['kubikasi_name'],
			'gender' => $post['gender'],
			'phone' => $post['phone'],
			'address' => $post['addr']			
		];
		$this->db->insert('kubikasi',$params);
	}
	public function add3($post)
	{
		$params = [
			'pelanggan_id' => $post['id'],	
			'kubikasi' => '0',	
		];
		$this->db->insert('kubikasi',$params);
	}

	public function edit($post)
	{
		$params = [
			'name' => $post['kubikasi_name'],
			'gender' => $post['gender'],
			'phone' => $post['phone'],
			'address' => $post['addr'],
			'updated' => date('Y-m-d H:i:s')	
		];
		$this->db->where('kubikasi_id',$post['id']);
		$this->db->update('kubikasi',$params);
	}

	public function del($id)
	{
		$this->db->where('kubikasi_id',$id);
		$this->db->delete('kubikasi');
	}
}