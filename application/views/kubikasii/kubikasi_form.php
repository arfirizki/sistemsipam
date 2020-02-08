<?php
function tglIndonesiaa($str){
    $tr   = trim($str);
    $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
    return $str;
  }

$tgl = date('Y-m-d');
$prevN = mktime(0, 0, 0, date("m") - 1, date("d"), date("Y"));
$bulan = tglIndonesiaa(date('F', $prevN));

?>
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
				<a href="<?=site_url('kubikasii')?>" class="btn btn-waring btn-flat">
					<i class="fa fa-undo"></i> Back
				</a>	
			</div>
		</div>
	<div class="box-body ">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">	
					<form action="<?=site_url('kubikasii/process')?>" method="POST">
						<input type="hidden" name="id" value="<?=$row->pelanggan_id?>">    
						<input type="hidden" name="tarif" value="<?php
						
                       	if ($row->kategori=='1'){
                       		// $tarif = select tabel tarif dimana id tarif = kategori 
                       		// echo tarif 'tarif'
                       		echo "$tarif->tarif";		
                       	}elseif($row->kategori=='2'){
                       		echo "$tarif2->tarif";
                       	}else{
                       		echo "$tarif3->tarif";
                       	}
                       ?>">
                       <input type="hidden" name="beban" value="<?php
						
                       	if ($row->kategori=='1'){
                       		// $tarif = select tabel tarif dimana id tarif = kategori 
                       		// echo tarif 'tarif'
                       		echo "$tarif->beban";		
                       	}elseif($row->kategori=='2'){
                       		echo "$tarif2->beban";
                       	}else{
                       		echo "$tarif3->beban";
                       	}
                       ?>">
						<!-- <input type="hidden" name="beban" value="<?=$tarif->beban?>"> -->
						<div class="form-group">
							<label>ID</label>
							<input readonly="" type="text" name="pelanggan_id" class="form-control" value="<?=$row->pelanggan_id?>" required>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input readonly="" type="text" name="kubikasi_name" class="form-control" value="<?=$row->name?>" required>
						</div>
						<div class="form-group">
							<label>Kubikasi bulan lalu</label>
							<input readonly="" type="number" name="kubikasi_awal" class="form-control" value="<?=$row->kub_b?>" required>
						</div>
						<div class="form-group">
							<label>Input Kubikasi</label>
							<input type="number" name="kubikasi" class="form-control"  required>
						</div>
						<div class="form-group">
							<label>Bulan</label>
							<input type="text" readonly="" name="bulan" value="<?php echo $bulan ?>" class="form-control"  required>

						</div>					
						<div class="form-group">
							<button type ="submit" name="<?=$page?>" class="btn btn-success btn-flat">
							<i class="fa fa-paper-plane"></i>	Save</button>
							<button type ="reset"class="btn btn-flat">Reset</button>
						</div>	
					</form>
				</div>
			</div>			
	</div>
</section> 