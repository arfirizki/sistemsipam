<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan Pembayaran</title>
	<style type="text/css">
		body{
			font-family: Arial;
		}
		@media print {
			.no-print{
				display: none;
			}
		}
		table {
			border-collapse: collapse;
		}
	</style>
</head>
<body>
	<br>
<div class="box-tools pull-right">	
<a href="#"  class="no-print btn btn-primary fa fa-print " onclick="window.print();"> Cetak/Print</a></i>	
<a href="<?=site_url('report')?>" class="no-print btn btn-waring btn-flat">
          <i class="fa fa-undo"></i> Back
</a>  
</div>
<br>			
<br>			
<br>			
<center><img src="<?=base_url()?>assets/dist/img/pamsimas.jpg" style="float: center;" height="80px">
<h3 style="font-size: 12px">REKAPITULASI DATA PELANGGAN NUNGGGAK AIR BERSIH PAMDES BOJONG 
<center><p></p></center></h3>
</center>
	
<HR/>

<table style="font-size: 12px" class="table table-responsive table-bordered table-striped" border="2">
	<thead>
	<tr>
		<th rowspan="2"><center>No.</center></th>
		<th rowspan="2"><center>No. ID</center></th>
		<th rowspan="2"><center>Nama Pelanggan</center></th>
		<th rowspan="2"><center>Bulan</center></th>
		<th rowspan="2"><center>Kategori</center></th>
		<th colspan="3"><center>Kubikasi</center></th>
		<th rowspan="2"><center>Tarif</center></th>
		<th rowspan="2"><center>Beban</center></th>
		<th rowspan="2"><center>Jumlah</center></th>
		<th rowspan="2"><center>Keterangan</center></th>
	</tr>
	<tr>
		<th width="80px"><center>Awal</center></th>
		<th><center>Akhir</center></th>
		<th><center>Pakai</center></th>
	</tr>
	</thead>
	<tbody>
		<tbody>
			<?php $no = 1;
			$total = 0;
			$totaltarif = 0;
			$totalbeban = 0;
			foreach ($data as $row) {
			$tarif = $row->tarif*$row->kubikasi;
			$totaltarif +=$tarif;
			$totalbeban +=$row->beban;
			$total +=$row->total;
			?>

			<tr>
				
				<td><?=$no++?>.</td>
				<td><?=$row->pelanggan_id?></td>
				<td><?=$row->name?></td>
				<td><?=$row->bulan?></td>
				<td><?=$row->kategori  == 1 ? "Rumah Tangga": ($row->kategori==2 ? 'Fasilitas Umum': 'Perusahaan')?></td>
				<td><?=$row->kub_a?> m<sup>3</sup></td>
				<td><?=$row->kub_b?> m<sup>3</sup></td>
				<td><?=$row->kubikasi?> m<sup>3</sup></td>
				<td><?=rupiah("$tarif")?></td>
				<td><?=rupiah("$row->beban")?></td>
				<td><?=rupiah("$row->total")?></td>
				<td><?=$row->keterangan?></td>
				
			</tr>
			<?php
			} ?>
	</tbody>	
	<tr>
		<td colspan="8" align='center'><strong>JUMLAH</strong></td>
		<td><strong><?=rupiah("$totaltarif")?></strong></td>
		<td><strong><?=rupiah("$totalbeban")?></strong></td>
		<td><strong><?=rupiah("$total")?></strong></td>
	</tr>	
</table>
<br>
<table width="100%">
	<tr>
		<td></td>
		<td width="200px">
			<p>Bojong, <?php echo date('d-m-Y'); ?><br>
			Pengelola Air Bersih	
			<br/>Karang Taruna
			<br/>
			Ketua
			<br/>
			<br/>
			<br/>
			<p>___________________</p>	
		</td>
	</tr>		
</table>
<?php
function rupiah($angka){
  
  $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
  return $hasil_rupiah;
}
?>
</body>
</html>