<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Profil extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_login();
		$this->load->model('profil_m');
		$this->load->library('form_validation');
	}

	function index()
	{
		$this->template->load('templatepelanggan','profil/profil');
	}

	public function update()
	{
		$this->template->load('templatepelanggan','profil/update');
	}

	public function proses_update()
	{	
		$post = $this->input->post(null,true);
		$this->profil_m->edit($post);
		if ($this->db->affected_rows()>0) {
			echo "<script>alert('Password Berhasil Dirubah Silahkan Login kembali')</script>";
		}
		echo "<script>window.location='".site_url('auth/logout')."'</script>";
		

	}

	

}	