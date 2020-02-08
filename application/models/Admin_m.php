<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_m extends CI_Model {

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('admin_id', $post['adminid']);
		$query = $this->db->get();
		return $query;
	}

	public function get($id=null)
	{
		$this->db->from('admin');
		if($id !=null){
			$this->db->where('admin_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['name'] = $post['fullname'];
		$params['admin_id'] = $post['id'];
		$params['phone'] = $post['phone'];
		$params['address'] = $post['address'] != ""? $post['address']: null;
		$this->db->insert('admin',$params);
	}

	public function edit($post)
	{
		$params['admin_id'] = $post['id'];
		$params['name'] = $post['fullname'];
		$params['phone'] = $post['phone'];
		$params['address'] = $post['address'] != ""? $post['address']: null;
		$this->db->where('admin_id',$post['id']);
		$this->db->update('admin',$params);
	}

	public function del($id)
	{
		$this->db->where('admin_id',$id);
		$this->db->delete('admin');
	}

	public function buat_kode()   
	{    
	  $this->db->select('RIGHT(admin.admin_id,2) as kode', FALSE);
	  $this->db->order_by('admin_id','DESC');    
	  $this->db->limit(1);     
	  $query = $this->db->get('admin');      //cek dulu apakah ada sudah ada kode di tabel.    
	  if($query->num_rows() <> 0){       
	   //jika kode ternyata sudah ada.      
	   $data = $query->row();      
	   $kode = intval($data->kode) + 1;     
	  }
	  else{       
	   //jika kode belum ada      
	   $kode = 1;     
	  }
	  $kodemax = str_pad($kode, 2, "0", STR_PAD_LEFT);    
	  $kodejadi = "A".$kodemax;     
	  return $kodejadi;  
	  }
}