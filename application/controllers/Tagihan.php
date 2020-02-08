<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		check_not_login();
		check_login();
		check_admin();
		$this->load->model('tagihan_m');
		$this->load->model('pelanggan_m');
		$this->load->model('tarif_m');
		$this->load->model('kubikasii_m');

	}

	public function index()
	{
		
		$data['row']= $this->pelanggan_m->get();
		$this->template->load('template','tagihan/tagihan_data',$data);
	}

	public function update($id)
	{
		$query = $this->tagihan_m->get2($id);
		if($query->num_rows()>0) {
			$tagihan = $query->row();
			$data = array(
				'page' => 'Pembayaran',
				'row' => $tagihan,
				'tarif'	 => $this->tarif_m->gettarif('tarif'),
				'tarif2'	 => $this->tarif_m->gettarif2('tarif'),
				'tarif3'	 => $this->tarif_m->gettarif3('tarif'),
			);
			$this->template->load('template','tagihan/tagihan_form',$data);
		}
	}

	public function input()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['input'])){
			$this->kubikasii_m->update($post);
			$this->tagihan_m->update($post);
		}

		if($this->db->affected_rows() > 0) {
		echo "<script>
			window.location='".site_url('kubikasii')."';
		</script>";
			}
	}

	public function tagihan_pelanggan($id)
	{
		$data['get_pelanggan']	 = $this->pelanggan_m->getpelanggan('pelanggan',$id);
		$data['get_tagihan']	 = $this->tagihan_m->gettagihanpelanggan($id);	
		$this->template->load('template','tagihan/tagihan_proses',$data);
		
	}

	// public function form_bayar($id)
	// {
	// 	$data['page'] = "input";
	// 	$data['row']	 = $this->tagihan_m->gettagihanbayar('tagihan',$id);	
	// 	$this->template->load('template','tagihan/form_bayar',$data);
		
	// }
	public function form_bayar($id)
	{
		$query = $this->tagihan_m->get3($id);
		if($query->num_rows()>0) {
			$tagihan = $query->row();
			$data = array(
				'page' => 'Pembayaran',
				'row' => $tagihan,
			);
			$this->template->load('template','tagihan/form_bayar',$data);
		}
	}

	public function bayar()
	{
		$post = $this->input->post(null, TRUE);
		if(isset($_POST['Pembayaran'])){
			$this->tagihan_m->bayar($post);
		}
		if($this->db->affected_rows() > 0) {
		echo "<script>
					alert('Pembayaran berhasil...');
				</script>";
			}
			$no = $post['tagihan_id'];
			echo "<script>
					window.location='".site_url("tagihan/form_bayar/$no")."';
				</script>";
	}

	public function print($id)
	{
		$query = $this->tagihan_m->get3($id);
		if($query->num_rows()>0) {
			$tagihan = $query->row();
			$data = array(
				'page' => 'Pembayaran',
				'row' => $tagihan,
			);
			
		$this->load->view('tagihan/cetak',$data);	
		}	
	}


}