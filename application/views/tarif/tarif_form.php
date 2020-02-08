<section class="content-header">
  <h1>
    Tarif
    <small>Kubikasi</small>
  </h1>
</section>
<section class="content">
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Update Tarif</h3>
			<div class="pull-right">
				<a href="<?=site_url('tarif')?>" class="btn btn-waring btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>	
			</div>
		</div>
	<div class="box-body ">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">	
					<form action="<?=site_url('tarif/proses')?>" method="POST">
						<div class="form-group">
							<label>Kategori</label>
							<input  type="text" name="kategori" class="form-control" value="<?=$row->kategori?>" required readonly>
						</div>
						<div class="form-group">
							<label>Tarif</label>
							<input type="number" name="tarif" class="form-control" value="<?=$row->tarif?>" required>
						</div>
						<div class="form-group">
							<label>Beban</label>
							<input type="number" value="<?=$row->beban?>" name="beban" class="form-control"  required>
						</div>				
						<div class="form-group">
							<input type="hidden" name="id" value="<?=$row->id?>">
							<button type ="submit" name="<?=$page?>" class="btn btn-success btn-flat">
							<i class="fa fa-paper-plane"></i>	Save</button>
							<button type ="reset"class="btn btn-flat">Reset</button>
						</div>	
					</form>
				</div>
			</div>			
	</div>
</section> 