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
			<h3 class="box-title">Data Users</h3>
			<div class="pull-right">
				
			</div>
		</div>
		<div class="box-body table-responsive">
			<table class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>#</th>
						<th>ID</th>
						<th>Name</th>
						<th>Level</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1;
					foreach ($row->result() as $key => $data) { ?>
					<tr>
						<td><?=$no++?>.</td>
						<td><?=$data->id?><?=$data->id_p?></td>
						<td><?=$data->username?></td>
						<td><?=$data->level == 1 ? "Admin": "Pelanggan" ?></td>
						<td class="text-center" width="160px">
							<a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-primary btn-xs">
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

</section> 