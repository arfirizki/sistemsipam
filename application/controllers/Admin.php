<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_login();
		check_admin();
		$this->load->model('admin_m');
		$this->load->library('form_validation');
	}
	public function index()
	{
		
		$data['row']= $this->admin_m->get();
		$this->template->load('template','admin/admin_data',$data);
	}
	public function add()
	{
		$this->form_validation->set_rules('fullname', 'nama', 'required');
		$this->form_validation->set_rules('id', 'id admin', 'required|is_unique[admin.admin_id]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[user.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('pasconf', 'Konfirmasi password', 'required|matches[password]',
			array('matches' => '%s tidak sesuai dengan password')
		);
		$this->form_validation->set_message('required', '%s masih kosong.. silahkan diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silahkan ganti yang lain');
		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		if ($this->form_validation->run() == FALSE) {
			$data['kodeunik'] = $this->admin_m->buat_kode();
			$this->template->load('template','admin/admin_form',$data);
		} else {
			$post = $this->input->post(null, TRUE);
			$this->admin_m->add($post);
			$this->login_m->add($post);		
			if($this->db->affected_rows() > 0) {
				echo "<script>
					alert('Data berhasil disimpan');
				</script>";
			}
			echo "<script>
					window.location='".site_url('admin')."';
				</script>";
		}		
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('fullname', 'nama', 'required');	
		$this->form_validation->set_message('required', '%s masih kosong.. silahkan diisi');
		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		if ($this->form_validation->run() == FALSE) {
			$query= $this->admin_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template','admin/admin_edit',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan');";
				echo "<script>window.location='".site_url('admin').";</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->admin_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>
					alert('Data berhasil disimpan');
				</script>";
			}
			echo "<script>
					window.location='".site_url('admin')."';
				</script>";
			
		}		
	}
	/*function adminname_check(){
			$post = $this->input->post(null, TRUE);
			$query = $this->db->query("SELECT * FROM admin WHERE adminname = '$post[adminname]' AND admin_id != '$post[admin_id]'");
			if($query->num_rows()>0){
				$this->form_validation->set_message('adminname_check', '{field} ini sudah dipakai, silakan ganti');
				return FALSE;
			}else{
				return TRUE;
			}
	}*/

	public function del($id)
	{
		$this->admin_m->del($id);
		if($this->db->affected_rows() > 0) {
			echo "<script>
			window.location='".site_url('admin')."';
			</script>";
		}
		
	}

	


}
