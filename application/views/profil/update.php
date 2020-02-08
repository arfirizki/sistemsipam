<?php if($this->fungsi->profil()){
                    $id        = $this->fungsi->profil()->pelanggan_id;
                    $nama      = $this->fungsi->profil()->name;
                    $alamat         = $this->fungsi->profil()->address;
                    $no_hp          = $this->fungsi->profil()->phone;
                    $kategori          = $this->fungsi->profil()->kategori;
                  }else{
                    $id="";
                    $nama="";
                    $alamat="";
                    $no_hp="";
                  }
            ?>  
<section class="content-header">
  <h1>
   Profil
    <small>Pengguna</small>
  </h1>
  
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Update Password</h3>
			<div class="pull-right">
				<a href="<?=site_url('profil')?>" class="btn btn-waring btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>	
			</div>
		</div>				      
		<div class="box-body ">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form action="<?=site_url('profil/proses_update')?>" method="POST">
						<div>
							<label>pelanggan id *</label>
							<input type="text" readonly="" class="form-control" value="<?=$id?>">
						</div>
						<div>
							<label>Nama *</label>
							<input type="text" name="fullname" class="form-control" value="<?=$nama?>" readonly="">
						</div>
						<div>
							<label>Alamat *</label>
							<input type="text" name="address" class="form-control" value="<?=$alamat?>" readonly="">
						</div>
						<div>
							<label>Telp *</label>
							<input type="number" name="phone" class="form-control" value="<?=$no_hp?>" readonly>
						</div>
						<div class="form-group <?=form_error('password')? 'has-error' : null?>">
							<label>Password * <i>Biarkan Kosong Jika Tidak Digunakan</i></label>
							<input type="password" id="myInput" name="password" class="form-control" required="">
							<?=form_error('password')?>
							<br>
							<input type="checkbox" onclick="myFunction()">Show Password
						</div>
						<br>
						<input type="hidden" name="id" value="<?=$id?>">
						<div class="form-group">
							<button class="btn btn-success btn-flat"><i class="fa fa-paper-plane"></i>	Save</a></button>
							<button type ="reset"class="btn btn-flat">Reset</button>
						</div>	
					</form>
				</div>
				
			</div>
		</div>
	</div>

</section> 

<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>