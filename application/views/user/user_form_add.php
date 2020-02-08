<section class="content-header">
  <h1>
    User
    <small>Pengguna</small>
  </h1>
  
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Add Users</h3>
			<div class="pull-right">
				<a href="<?=site_url('user')?>" class="btn btn-waring btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>	
			</div>
		</div>
		<div class="box-body ">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<!-- <?php echo validation_errors(); ?> -->
					<form action="" method="POST">
						<div class="form-group <?=form_error('fullname')? 'has-error' : null?>">
							<label>Name *</label>
							<input type="text" name="fullname" class="form-control" value="<?=set_value('fullname')?>">
							<?=form_error('fullname')?>
						</div>
						<div class="form-group <?=form_error('username')? 'has-error' : null?>">
							<label>Username *</label>
							<input type="text" name="username" class="form-control" value="<?=set_value('username')?>">
							<?=form_error('username')?>
						</div>
						<div class="form-group <?=form_error('password')? 'has-error' : null?>">
							<label>Password *</label>
							<input type="password" name="password" class="form-control">
							<?=form_error('password')?>
						</div>
						<div class="form-group <?=form_error('pasconf')? 'has-error' : null?>">
							<label>Password Confirmation *</label>
							<input type="text" name="pasconf" class="form-control" value="<?=set_value('pasconf')?>">
							<?=form_error('pasconf')?>
						</div>
						<div class="form-group">
							<label>Address </label>
							<textarea name="address" class="form-control"<?=set_value('address')?>>
							</textarea>
						</div>
						<div class="form-group <?=form_error('Level')? 'has-error' : null?>">
							<label>Level*</label>
							<select name="Level" class="form-control">
							<option value="">--Pilih--</option>
							<option value="1" <?=set_value('Level') == 1 ? "selected": null ?>>Admin</option>
							<option value="2" <?=set_value('Level') == 2 ? "selected": null ?>>Kasir</option>
							</select>	
							<?=form_error('Level')?>
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