<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_login();
		check_admin();
		$this->load->model('pelanggan_m');
		$this->load->model('kubikasii_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		
		$data['row']= $this->pelanggan_m->get();
		$this->template->load('template','pelanggan/pelanggan_data',$data);
	}
	public function add()
	{
		$this->form_validation->set_rules('fullname', 'nama', 'required');
		$this->form_validation->set_rules('kategori', 'kategori', 'required');
		$this->form_validation->set_message('required', '%s masih kosong.. silahkan diisi');
		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');		
		if ($this->form_validation->run() == FALSE) {
			$data['kodeunik'] = $this->pelanggan_m->buat_kode();
			$this->template->load('template','pelanggan/pelanggan_form',$data);
		}else {
			$post = $this->input->post(null, TRUE);
			$this->pelanggan_m->add($post);
			$this->login_m->add2($post);		
			$this->kubikasii_m->add3($post);		
			if($this->db->affected_rows() > 0) {
				echo "<script>
					alert('Data berhasil disimpan');
				</script>";
			}
			echo "<script>
					window.location='".site_url('pelanggan')."';
				</script>";				
		}		
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('fullname', 'nama', 'required');	
		$this->form_validation->set_message('required', '%s masih kosong.. silahkan diisi');
		$this->form_validation->set_error_delimiters('<span  class="help-block">','</span>');
		if ($this->form_validation->run() == FALSE) {
			$query= $this->pelanggan_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template','pelanggan/pelanggan_edit',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan');";
				echo "<script>window.location='".site_url('pelanggan').";</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->pelanggan_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>
					alert('Data berhasil disimpan');
				</script>";
			}
			echo "<script>
					window.location='".site_url('pelanggan')."';
				</script>";
			
		}		
	}
	/*function pelangganname_check(){
			$post = $this->input->post(null, TRUE);
			$query = $this->db->query("SELECT * FROM pelanggan WHERE pelangganname = '$post[pelangganname]' AND pelanggan_id != '$post[pelanggan_id]'");
			if($query->num_rows()>0){
				$this->form_validation->set_message('pelangganname_check', '{field} ini sudah dipakai, silakan ganti');
				return FALSE;
			}else{
				return TRUE;
			}
	}*/

	public function del($id)
	{
		$this->pelanggan_m->del($id);
		if($this->db->affected_rows() > 0)
		{
			echo "<script>
			window.location='".site_url('pelanggan')."';
			</script>";
		}
	}


}
