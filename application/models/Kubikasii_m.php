<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kubikasii_m extends CI_Model {

	public function get($id=null)
	{
		$this->db->from('pelanggan');
		$this->db->select('kubikasi.*,pelanggan.pelanggan_id,pelanggan.name,pelanggan.kategori');
		$this->db->join('kubikasi', 'pelanggan.pelanggan_id = kubikasi.pelanggan_id');
		$this->db->join('tarif', 'pelanggan.kategori = tarif.id');
		if($id != null){
			$this->db->where('id_kubikasi',$id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function input($post)
	{
		$total = $post['kubikasi']-$post['kubikasi_awal'];
		$params = [
			'kub_a' => $post['kubikasi_awal'],
			'kub_b'	=> $post['kubikasi'],
			'total' => $total,	
			'pelanggan_id' => $post['pelanggan_id'],	
		];
		$this->db->where('pelanggan_id',$post['pelanggan_id']);
		$this->db->update('kubikasi',$params);

	}

	public function update($post)
	{
		$total = $post['kubikasi']-$post['kubikasi_awal'];
		$params = [
			'kub_a' => $post['kubikasi_awal'],
			'kub_b'	=> $post['kubikasi'],
			'total' => $total,	
			'pelanggan_id' => $post['pelanggan_id'],	
		];
		$this->db->where('pelanggan_id',$post['pelanggan_id']);
		$this->db->update('kubikasi',$params);

	}


	public function add3($post)
	{
		$params = [
			'pelanggan_id' => $post['id'],	
			'kub_a' => '0',
			'kub_b' => '0',
			'total' => '0',	
		];
		$this->db->insert('kubikasi',$params);
	}

	public function del($id)
	{
		$this->db->where('pelanggan_id',$id);
		$this->db->delete('kubikasi');
	}
}