<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		check_not_login();
		check_login();
		$this->load->model('tagihan_m');
	}

	public function index()
	{
		if($this->fungsi->user_login()->level==1){
			$isi['jmlpelanggan'] = $this->db->get('pelanggan')->num_rows();	
			$isi['jmladmin'] = $this->db->get('admin')->num_rows();
			$isi['jmltagihan'] = $this->tagihan_m->hitungtagihan()->num_rows();
			$isi['jmltagihannunggak'] = $this->tagihan_m->hitungtagihannunggak()->num_rows();
		$this->template->load('template','dashboard',$isi);
		}else{
			$this->template->load('templatepelanggan','dashboard');
		}
	}
}	