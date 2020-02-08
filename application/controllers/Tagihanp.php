<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Tagihanp extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		$this->load->model('tagihan_m');

	}

	public function index($id)
	{
		$data['get_tagihan']	 = $this->tagihan_m->gettagihanpelanggan($id);	
		$this->template->load('templatepelanggan','tagihan/tagihan_pelanggan',$data);
	}

	public function form_bayar($id)
	{
		$data['page'] = "input";
		$data['row']	 = $this->tagihan_m->gettagihanbayar('tagihan',$id);	
		$this->template->load('templatepelanggan','tagihan/form_bayarp',$data);
		
	}
	
}