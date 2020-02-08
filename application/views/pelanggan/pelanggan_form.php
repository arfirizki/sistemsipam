<section class="content-header">
  <h1>
    Pelanggan
    <small>Pengguna</small>
  </h1>
  
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Add pelanggan</h3>
			<div class="pull-right">
				<a href="<?=site_url('pelanggan')?>" class="btn btn-waring btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>	
			</div>
		</div>				      
		<div class="box-body ">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<!-- <?php echo validation_errors(); ?> -->
					<form action="" method="POST">
						<div class="form-group <?=form_error('id')? 'has-error' : null?>">
							<label>pelanggan id *</label>
							<input type="text" name="id" readonly="" class="form-control" value="<?=$kodeunik?>">
							<?=form_error('id')?>
						</div>
						<div class="form-group <?=form_error('fullname')? 'has-error' : null?>">
							<label>Name *</label>
							<input type="text" name="fullname" class="form-control" value="<?=set_value('fullname')?>" required>
							<?=form_error('fullname')?>
						</div>
						<div >
							<label>username *<i>otomatis id pelanggan</i></label>
							<input readonly="" autocomplete="off" type="text" name="username" class="form-control" value="<?=$kodeunik?>" required>
							<?=form_error('username')?>
						</div>
						<div>
							<label>Password *<i></i></label>
							<input type="password" name="password" value="" class="form-control" required>
						</div>
						<div class="form-group <?=form_error('phone')? 'has-error' : null?>">
							<label>Phone</label>
							<input type="number" autocomplete="off" name="phone" class="form-control" value="<?=set_value('phone')?>" required>
							<?=form_error('phone')?>
						</div>
						<div>
							<label>Kategori*</label>
							<select name="kategori" class="form-control" required>
							<option value="">--Pilih--</option>
							<option value="1" <?=set_value('Level') == 1 ? "selected": null ?>>Rumah Tangga</option>
							<option value="2" <?=set_value('Level') == 2 ? "selected": null ?>>Fasilitas Umum</option>
							<option value="3" <?=set_value('Level') == 3 ? "selected": null ?>>Perusahaan</option>
							</select>	
							<?=form_error('kategori')?>
						</div>
						<div class="form-group">
							<label>Address </label>
							<textarea name="address" class="form-control"<?=set_value('address')?>>
							</textarea>
						</div>
						<input type="text" class="hidden" name="level" value="pelanggan">
						<div class="form-group">
							<button type ="submit"class="btn btn-success btn-flat">
							<i class="fa fa-paper-plane"></i>	Save</button>
							<button type ="reset"class="btn btn-flat">Reset</button>
						</div>	
					</form>
				</div>
				
			</div>
		</div>
	</div>

</section> 