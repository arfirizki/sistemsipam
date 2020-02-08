<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pelanggan_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('pelanggan_id', $post['pelangganid']);
		$query = $this->db->get();
		return $query;
	}

	public function get($id=null)
	{	
		$this->db->from('pelanggan');
		if($id !=null){
			$this->db->where('pelanggan_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['name'] = strtoupper($post['fullname']);
		$params['pelanggan_id'] = $post['id'];
		$params['phone'] = $post['phone'];
		$params['kategori'] = $post['kategori'];
		$params['address'] = ucfirst($post['address'] != ""? $post['address']: null);
		$this->db->insert('pelanggan',$params);
	}

	public function edit($post)
	{
		$params['name'] = strtoupper($post['fullname']!= ""? $post['fullname']: null);
		$params['pelanggan_id'] = $post['id']!= ""? $post['id']: null;
		$params['phone'] = $post['phone']!= ""? $post['phone']: null;
		$params['address'] = ucfirst($post['address'] != ""? $post['address']: null);
		$this->db->where('pelanggan_id',$post['id']);
		$this->db->update('pelanggan',$params);
	}

	public function edit2($post)
	{
		$params['phone'] = $post['phone'];
		$this->db->where('pelanggan_id',$post['id']);
		$this->db->update('pelanggan',$params);
	}

	public function del($id)
	{
		$this->db->where('pelanggan_id',$id);
		$this->db->delete('pelanggan');
	}

	public function getpelanggan($table_name,$id)
	{
		$this->db->where('pelanggan_id',$id);
		$get_tagihan = $this->db->get($table_name);
		return $get_tagihan->row();
	}

	public function buat_kode()   
	{    
	  $this->db->select('RIGHT(pelanggan.pelanggan_id,2) as kode', FALSE);
	  $this->db->order_by('pelanggan_id','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('pelanggan');      //cek dulu apakah ada sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){       
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;     
	  }
	  else{       
	   //jika kode belum ada      
	   $kode = 1;     
	  }
	  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);    
	  $kodejadi = "PAD.".$kodemax;     
	  return $kodejadi;  
	  }

}