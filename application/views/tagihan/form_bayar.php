<section class="content-header">
  <h1>
    Pembayaran
    <small>Tagihan</small>
  </h1>
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?=ucfirst($page) ?> Tagihan</h3>
			<div class="pull-right">
				<a href="<?=site_url('tagihan/tagihan_pelanggan/'.$row->pelanggan_id)?>" class="btn btn-waring btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>	
			</div>
		</div>
	<div class="box-body ">
			<div class="row">
			 <form action="<?=site_url('tagihan/bayar')?>" method="POST">
				<div class="col-md-6">
					<div class="form-group">
						<label>ID Tagihan</label>
							<input readonly="" type="text" name="tagihan_id" class="form-control" value="<?=$row->tagihan_id?>">
					</div>
					<div class="form-group">
						<label>No. Pelangggan</label>
							<input readonly="" type="text" name="pelanggan_id" class="form-control" value="<?=$row->pelanggan_id?>">
					</div>
					<div class="form-group">
						<label>Nama Pelangggan</label>
							<input readonly="" type="text" name="name" class="form-control" value="<?=$row->name?>">
					</div>
					<div class="form-group">
						<label>Kubikasi bulan <i><?=$row->bulan?></i></label>
							<input readonly="" type="text" name="kubikasi" class="form-control" value="<?=meter($row->kubikasi)?>">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label>Tarif</label>
							<input readonly="" type="text" name="tarif" class="form-control" value="<?=rupiah($row->tarif)?>">
					</div>
					<div class="form-group">
						<label>Beban</label>
							<input readonly="" type="text" name="beban" class="form-control" value="<?=rupiah($row->beban)?>">
					</div>
					<div class="form-group">
						<label>Total bayar</label>
							<input readonly="" type="text" name="total" class="form-control" value="<?=rupiah($row->total)?>">
					</div>
				</div>
				<div class="col-md-6">
					
				</div>
				<div class="col-md-6">
					<div class="form-group pull-right">
						<?php  if($row->keterangan =='BELUM'){?>
                        <input type="hidden" name="tagihan_id" value="<?=$row->tagihan_id?>"> 

						<button type ="submit" name="<?=$page?>" class="btn btn-success btn-flat">
							<i class="fa fa-usd"></i>	Bayar</button>
                        <?php }else{?>
                        	<input type="hidden" name="id" value="$row->pelanggan_id">
							<a href="<?php echo base_url('tagihan/print/'.$row->tagihan_id)?>" target="_blank" class="btn btn-primary btn-flat"><i class="fa fa-print"></i> Print</a>	 
                      <?php } ?>       
						
						
					</div>
				</div>	
			</div>			
			</form>
			</div>
	</div>
<?php
function rupiah($angka){
  
  $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
  return $hasil_rupiah;
}
function meter($angka){
  
  $meter = number_format($angka) . " m3" ;
  return $meter;
}
?>
</section> 