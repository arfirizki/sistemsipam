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
			<h3 class="box-title">Data pelanggan</h3>
			<div class="pull-right">
				<a href="<?=site_url('pelanggan/add')?>" class="btn btn-primary btn-flat">
					<i class="fa fa-user-plus"></i> Create
				</a>	
			</div>
		</div>
		<div class="box-body table-responsive">
			<table id="table1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>Id</th>
						<th>Name</th>
						<th>Address</th>
						<th>Phone</th>
						<th>Kategori</th>
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
						<td><?=$data->address?></td>
						<td><?=$data->phone?></td>
						<td><?=$data->kategori  == 1 ? "Rumah Tangga": ($data->kategori==2 ? 'Fasilitas Umum': 'Perusahaan')?></td>
						<td class="text-center" width="160px">
							<form>
							<a href="<?=site_url('pelanggan/edit/'.$data->pelanggan_id)?>" class="btn btn-primary btn-xs">
							<i class="fa fa-pencil"></i> Update
							</a>
							<a href="<?=site_url('pelanggan/del/'.$data->pelanggan_id)?>" onclick="return confirm('APAKAH ANDA YAKIN???')" class="btn btn-danger btn-xs">
							<i class="fa fa-trash"></i> Delete
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