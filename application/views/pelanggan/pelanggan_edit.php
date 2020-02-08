<section class="content-header">
  <h1>
    Pelanggan
    <small>Pengguna</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Edit Pelanggan</h3>
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
							<label>ID *</label>							
							<input readonly="" type="text" name="id" class="form-control" value="<?=$this->input->post('id')?? $row->pelanggan_id?>">
						</div>
						<div class="form-group <?=form_error('fullname')? 'has-error' : null?>">
							<label>Name *</label>
							<input autocomplete="off" type="text" name="fullname" class="form-control" value="<?=$this->input->post('fullname')?? $row->name?>">
							<?=form_error('fullname')?>
						</div>
						<div class="form-group <?=form_error('phone')? 'has-error' : null?>">
							<label>Phone *</label>
							<input autocomplete="off" type="text" name="phone" class="form-control" value="<?=$this->input->post('phone')?? $row->phone?>" required>
							<?=form_error('phone')?>
						</div>
						<div class="form-group">
							<label>Address </label>
							<textarea name="address" class="form-control"><?=$this->input->post('address')?? $row->address?>
							</textarea>
						</div>						
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