<section class="content-header">
  <h1>
    Kubikasi dan Tagihan
    <small>Pelanggan</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">KUBIKASI DAN TAGIHAN</h3>
		</div>
		<div class="box-body table-responsive">
			<table id="table1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>ID Pelanggan</th>
						<th>Nama</th>
						<th>Kategori</th>
						<th>Kubikasi Total</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
						<?php $no = 1;
					foreach ($row->result() as $key => $data) { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->pelanggan_id?></td>
						<td><?=$data->name?></td>
						<td><?=$data->kategori  == 1 ? "Rumah Tangga": ($data->kategori==2 ? 'Fasilitas Umum': 'Perusahaan')?></td>
						<td><?=$data->total?>m<sup>3</sup></td>						
						<td class="text-center" width="160px">	
						<input type="hidden" name="id" value="$data->id_kubikasi">		
						<a href="<?=site_url('kubikasii/input/'.$data->id_kubikasi)?>" class="btn btn-success btn-xs">
							<i class="fa fa-plus"></i> Input
							</a>
						<a href="<?=site_url('tagihan/tagihan_pelanggan/'.$data->pelanggan_id)?>" class="btn btn-primary btn-xs">
							<i class="fa fa-usd"></i> Tagihan 
							</a>			
						</td>
					</tr>
					<?php
					} ?>
				</tbody>
			</table>

		</div>
	</div>

</section> 