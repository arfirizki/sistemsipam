<section class="content-header">
  <h1>
    User
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
			<h3 class="box-title">Edit Users</h3>
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
					<input type="hidden" name="user_id" value="<?=$row->user_id?>">		
						<div class="form-group <?=form_error('username')? 'has-error' : null?>">
							<label>Username *</label>
							<input type="text" name="username" class="form-control" value="<?=$this->input->post('username')?? $row->username?>">
							<?=form_error('username')?>
						</div>
						<div class="form-group <?=form_error('password')? 'has-error' : null?>">
							<label>Password *</label><small>(Biarkan kosong jika tidak diganti)</small>
							<input type="password" name="password" class="form-control">
							<?=form_error('password')?>
						</div>
						<div class="form-group <?=form_error('pasconf')? 'has-error' : null?>">
							<label>Password Confirmation *</label>
							<input type="text" name="pasconf" class="form-control">
							<?=form_error('pasconf')?>
						</div>						
						<div class="form-group <?=form_error('Level')? 'has-error' : null?>">
							<label>Level*</label>
							<select name="Level" class="form-control" disabled="">
							<?php $level = $this->input->post('level') ? $this->input->post('level') : $row->level ?>
							<option readonly value="1" >Admin</option>					
							<option readonly value="2" <?=$level == 2 ? 'selected' : null ?>>Pelanggan</option>
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