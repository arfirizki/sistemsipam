<section class="content-header">
  <h1>
    Tarif
    <small>Kubikasi dan Beban</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Data tarif</h3>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Kategori</th>
						<th>Tarif</th>
						<th>Beban</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
						<?php $no = 1;
					foreach ($row->result() as $key => $data) { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->kategori?></td>
						<td><?=rupiah("$data->tarif")?>,-/m<sup>3</sup></td>
						<td><?=rupiah("$data->beban")?>,-</td>						
						<td class="text-center" width="160px">	
						<input type="hidden" name="id" value="$data->id">	
						<a href="<?=site_url('tarif/Update/'.$data->id)?>" class="btn btn-success btn-xs">
							<i class="fa fa-pencil"></i> Update
							</a>		
						</td>
					</tr>
					<?php
					} ?>
				</tbody>
			</table>

		</div>
	</div>
<?php
function rupiah($angka){
  
  $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
  return $hasil_rupiah;
}
?>
</section> 