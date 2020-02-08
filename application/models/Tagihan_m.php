<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tagihan_m extends CI_Model {

	public function get($id=null)
	{	 
		$this->db->from('tagihan');
		if($id !=null){
			$this->db->where('pelanggan_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function get2($id=null)
	{	
		$this->db->from('tagihan');
		if($id !=null){
			$this->db->where('tagihan_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function hitungtagihan($ket='DIBAYAR')
	{
		$this->db->from('tagihan');
		$this->db->where('keterangan', $ket);
		$query = $this->db->get();
		return $query;
	}

	public function hitungtagihannunggak($ket='BELUM')
	{
		$this->db->from('tagihan');
		$this->db->where('keterangan', $ket);
		$query = $this->db->get();
		return $query;
	}

	public function input($post)
	{
		$total = $post['kubikasi']-$post['kubikasi_awal'];
		$jml	= $total*$post['tarif']+$post['beban'];
		$kode = $this->buat_kode();
		$params = [
			'tagihan_id' => $kode,
			'pelanggan_id' => $post['pelanggan_id'],
			'kub_a' => $post['kubikasi_awal'],
			'kub_b' => $post['kubikasi'],
			'bulan' => $post['bulan'],
			'tarif'	=> $post['tarif'],
			'beban'	=> $post['beban'],
			'total'	=> $jml,
			'tgl_bayar' => "",
			'keterangan' => "BELUM",
			'kubikasi' => $total,		
		];
		$this->db->insert('tagihan',$params);

	}

	public function bayar($post)
	{
		$tgl = date('Y-m-d');
		$params = [
			'tgl_bayar' => $tgl,	
			'keterangan' => "DIBAYAR"
		];
		$this->db->where('tagihan_id',$post['tagihan_id']);
		$this->db->update('tagihan',$params);

	}

	public function update($post)
	{
		$total = $post['kubikasi']-$post['kubikasi_awal'];
		$jml	= $total*$post['tarif']+$post['beban'];
		$params = [
			'kub_a' => $post['kubikasi_awal'],
			'kub_b'	=> $post['kubikasi'],
			'kubikasi' => $total,
			'total'	=> $jml,
			'tagihan_id' => $post['tagihan_id'],	
		];
		$this->db->where('tagihan_id',$post['tagihan_id']);
		$this->db->update('tagihan',$params);

	}

	public function buat_kode()   
	{   
		$q= $this->db->query("SELECT MAX(RIGHT(tagihan_id,3)) AS kd_max FROM tagihan WHERE DATE(tanggal)=CURDATE()");
		$kd = "";
		if($q->num_rows()>0){
			foreach ($q->result() as $k) {
				$tmp = ((int)$k->kd_max)+1;
				$kd = sprintf("%03s", $tmp);
			}
		}else{
			$kd = "001";
		}
		date_default_timezone_set('Asia/Jakarta');
		return date('dmy').$kd;
	}

	public function gettagihanpelanggan($id)
	{
		$this->db->where('pelanggan_id',$id)->order_by('bulan','DESC');
		$get_tagihanpelanggan = $this->db->get('tagihan');
		return $get_tagihanpelanggan->result_array();
	}

	public function gettagihanbayar($table_name,$id)
	{
		$this->db->where('tagihan_id',$id);
		$gettagihanbayar = $this->db->get($table_name);
		return $gettagihanbayar->row();
	}
	public function get3($id=null)
	{
		$this->db->from('pelanggan');
		$this->db->select('tagihan.*,pelanggan.pelanggan_id,pelanggan.name,pelanggan.kategori');
		$this->db->join('tagihan', 'pelanggan.pelanggan_id = tagihan.pelanggan_id');
		if($id != null){
			$this->db->where('tagihan_id',$id);
		}
		$query = $this->db->get();
		return $query;	
	}

	public function getreport()
	{
		$this->db->from('pelanggan');
		$this->db->select('tagihan.*,pelanggan.pelanggan_id,pelanggan.name,pelanggan.kategori,pelanggan.address');
		$this->db->join('tagihan', 'pelanggan.pelanggan_id = tagihan.pelanggan_id');
		$this->db->where('tgl_bayar >=',$this->input->post('tgl1'));
		$this->db->where('tgl_bayar <=',$this->input->post('tgl2'));
		$query= $this->db->get();
		return $query->result();
	}

	public function getreportnunggak($ket='BELUM')
	{
		$this->db->from('pelanggan');
		$this->db->select('tagihan.*,pelanggan.pelanggan_id,pelanggan.name,pelanggan.kategori,pelanggan.address');
		$this->db->join('tagihan', 'pelanggan.pelanggan_id = tagihan.pelanggan_id');
		$this->db->order_by('tagihan.pelanggan_id', 'ASC');
		$this->db->where('tagihan.keterangan', $ket);
		$query= $this->db->get();
		return $query->result();
	}
	

	
}	