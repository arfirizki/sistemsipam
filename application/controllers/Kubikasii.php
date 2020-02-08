<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kubikasii extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_login();
		check_admin();
		$this->load->model('kubikasii_m');
		$this->load->model('tagihan_m');
		$this->load->model('tarif_m');
	}
	
	public function index()
	{
		$data['row'] = $this->kubikasii_m->get();
		$this->template->load('template','kubikasii/kubikasi_data',$data);
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['input'])){
			$this->kubikasii_m->input($post);
			$this->tagihan_m->input($post);
		}

		if($this->db->affected_rows() > 0) {
		echo "<script>
			window.location='".site_url('kubikasii')."';
		</script>";
			}
	}

	public function input($id)
	{
		$query = $this->kubikasii_m->get($id);
		if($query->num_rows()>0) {
			$kubikasi = $query->row();
			$data = array(
				'page' => 'input',
				'row' => $kubikasi,
				'tarif'	 => $this->tarif_m->gettarif('tarif'),
				'tarif2'	 => $this->tarif_m->gettarif2('tarif'),
				'tarif3'	 => $this->tarif_m->gettarif3('tarif'),
			);
			$this->template->load('template','kubikasii/kubikasi_form',$data);
		}
	}

	// public function del($id)
	// {
	// 	$this->kubikasi_m->del($id);
	// 	if($this->db->affected_rows() > 0) {
	// 	echo "<script>
	// 		window.location='".site_url('kubikasi')."';
	// 	</script>";
	// 		}
	// }

}
