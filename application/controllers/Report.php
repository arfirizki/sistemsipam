<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {
	function __construct()
	{
		parent ::__construct();
		check_not_login();
		check_login();
		check_admin();
		$this->load->model('tagihan_m');

	}
	function index()
	{
		$data['jmltagihannunggak'] = $this->tagihan_m->hitungtagihannunggak()->num_rows();
		$this->template->load('template','report/report',$data);
	}

	function tampilkan()
	{
		$tgl1 = $this->input->post('tgl1');
        $tgl2 = $this->input->post('tgl2');
       
        if ($tgl1 > $tgl2) {
        echo "<script>
					alert('Periode Tanggal salah..');
				</script>";
				$this->template->load('template','report/report');                
        } else {
        $data['data'] = $this->tagihan_m->getreport();   

       	$this->template->load('template','report/laporan_pembayaran',$data);   
    	}
                          
        
    }          

    function nunggak()
	{
		
        $data['data'] = $this->tagihan_m->hitungtagihannunggak();
        $data['data'] = $this->tagihan_m->getreportnunggak();
       	$this->template->load('template','report/laporan_pembayaran_nunggak',$data);   
    }              
		
	
}	