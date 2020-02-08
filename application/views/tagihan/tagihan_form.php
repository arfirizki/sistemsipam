<section class="content-header">
  <h1>
    Kubikasi
    <small>Pelanggan</small>
  </h1>
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title"><?=ucfirst($page) ?> kubikasi</h3>
			<div class="pull-right">
				<a href="<?=site_url('tagihan/tagihan_pelanggan/'.$row->pelanggan_id)?>" class="btn btn-waring btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>	
			</div>
		</div>
	<div class="box-body ">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">	
					<form action="<?=site_url('tagihan/input')?>" method="POST">
						<input type="hidden" name="id" value="<?=$row->pelanggan_id?>"> 
						<input type="hidden" name="tarif" value="<?=$row->tarif?>"> 
						<input type="hidden" name="beban" value="<?=$row->beban?>"> 

						<div class="form-group">
							<label>ID</label>
							<input readonly="" type="text" name="pelanggan_id" class="form-control" value="<?=$row->pelanggan_id?>" required>
						</div>
						<div class="form-group">
							<label>No Tagihan</label>
							<input readonly="" type="text" name="tagihan_id" class="form-control" value="<?=$row->tagihan_id?>" required>
						</div>
						<div class="form-group">
							<label>Kubikasi bulan lalu</label>
							<input type="number" name="kubikasi_awal" class="form-control" value="<?=$row->kub_a?>" required>
						</div>
						<div class="form-group">
							<label>Kubikasi saat ini</label>
							<input type="number" name="kubikasi"  class="form-control" value="<?=$row->kub_b?>" required>
						</div>
						<div class="form-group">
							<label>Bulan</label>
							<input type="text" readonly="" name="bulan" value="<?=$row->bulan?>" class="form-control"  required>
						</div>					
						<div class="form-group">
							<button type ="submit" name="<?=$page?>" class="btn btn-success btn-flat">
							<i class="fa fa-paper-plane"></i>	Save</button>
						</div>	
					</form>
				</div>
			</div>			
	</div>
</section> 