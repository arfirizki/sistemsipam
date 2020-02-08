<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tarif extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_login();
		check_admin();
		$this->load->model('tarif_m');
	}
	
	public function index()
	{
		
		$data['row']= $this->tarif_m->get();
		$this->template->load('template','tarif/tarif_data',$data);
	}
	
	public function update($id)
	{
		$query = $this->tarif_m->get2($id);
		if($query->num_rows()>0) {
			$tarif = $query->row();
			$data = array(
				'page' => 'input',
				'row' => $tarif,
			);
			$this->template->load('template','tarif/tarif_form',$data);
		}
	}

	public function proses()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['input'])){
			$this->tarif_m->input($post);
		}
		if($this->db->affected_rows() > 0) {
		echo "<script>
			window.location='".site_url('tarif')."';
		</script>";
			}
	}
	
}
