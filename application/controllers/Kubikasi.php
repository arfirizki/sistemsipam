<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kubikasi extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_login();
		check_admin();
		$this->load->model(array('kubikasi_m'));
		$this->load->model(array('kubikasi_m'));
		$this->load->library('form_validation');
	}
	public function index()
	{
		
		$data['datakubikasi']= $this->kubikasi_m->get();
		$this->template->load('template','kubikasi/kubikasi_data',$data);
	}
	public function input($id)
	{		
		$this->form_validation->set_rules('kubikasi');	
		$this->form_validation->set_message('required', '%s masih kosong.. silahkan diisi');
		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		$query = $this->kubikasi_m->get($id);
		if($query->num_rows()>0) {
			$kubikasi = $query->row();
			$data = array(
				'page' => 'edit',
				'row' => $kubikasi
			);
			$this->template->load('template','kubikasi/kubikasi_form',$data);
		}
	}

	public function update($id)
	{
			if ($this->form_validation->run() == FALSE) {
			$query= $this->kubikasi_m->ambilkubikasi($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template','kubikasi/kubikasi_form',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan');";
				echo "<script>window.location='".site_url('kubikasi').";</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->kubikasi_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>
					alert('Data berhasil disimpan');
				</script>";
			}
			echo "<script>
					window.location='".site_url('kubikasi')."';
				</script>";
			
		}		
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('fullname', 'nama', 'required');	
		$this->form_validation->set_message('required', '%s masih kosong.. silahkan diisi');
		$this->form_validation->set_error_delimiters('<span class="help-block">','</span>');
		if ($this->form_validation->run() == FALSE) {
			$query= $this->kubikasi_m->get($id);
			if($query->num_rows() > 0){
				$data['row'] = $query->row();
				$this->template->load('template','kubikasi/kubikasi_edit',$data);
			}else{
				echo "<script>alert('Data Tidak ditemukan');";
				echo "<script>window.location='".site_url('kubikasi').";</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->kubikasi_m->edit($post);
			if($this->db->affected_rows() > 0) {
				echo "<script>
					alert('Data berhasil disimpan');
				</script>";
			}
			echo "<script>
					window.location='".site_url('kubikasi')."';
				</script>";
			
		}		
	}


}
