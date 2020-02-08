<!-- <div class="row">
        <div class="col-xs-12">
          <div class="box box-default">
            <div class="box-header with-border">
              <h3 class="box-title">Kubikasi</h3>
            </div>
            <div class="box-body">
              <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                Launch Default Modal
              </button>
            </div>
          </div>
        </div>
      </div>
<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          <!-- </div>
          /.modal-dialog
        </div> -->
        <!-- /.modal -->
<section class="content-header">
  <h1>
    Kubikasi
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
      <h3 class="box-title">Data kubikasi pelanggan</h3>
    </div>
    <div class="box-body table-responsive">
      <table id="table1" class="table table-bordered table-striped">
        <thead>
          <tr>
            <th>#</th>
            <th>Id</th>
            <th>Name</th>
            <th>Kubikasi</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php $no = 1;
          foreach ($datakubikasi as $row) { ?>
          <tr>
            <td><?=$no++?>.</td>
            <td><?=$row->pelanggan_id?></td>
            <td><?=$row->name?></td>
            <td><?=$row->kubikasi?> <sup>3</sup></td>
            <td class="text-center" width="160px">
              <form>
              <a href="<?=site_url('kubikasi/update/'.$row->pelanggan_id)?>" class="btn btn-primary btn-xs">
              <i class="fa fa-pencil"></i> Input1
              </a>
              <a href="<?=site_url('kubikasi/input/'.$row->pelanggan_id)?>" class="btn btn-primary btn-xs"  data-toggle="modal" data-target="#modal-default">
              <i class="fa fa-pencil"></i> Input2
              </a>
              <button onclick="return confirm('Apakah anda yakin?')" class="btn btn-danger btn-xs">
                <i class="fa fa-trash"></i>
                Detail
              </button>

            </td>
          </tr>
          <?php
          } ?>
        </tbody>
      </table>

    </div>
  </div>
<div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Input Kubikasi</h4>
              </div>
              <div class="modal-body">
                <p>ID <?=$row->pelanggan_id?> &hellip;</p>
                <p>Nama <?=$row->name?> &hellip;</p>
                <label>Kubikasi Akhir</label> <input type="number" name="kubikasi" value="<?=$row->kubikasi?>">
                <label>Input Kubikasi</label> <input type="number" name="kubikasi_b">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
              </div>
            </div>
            <!-- /.modal-content -->
          <!-- </div>
          /.modal-dialog
        </div> -->
        <!-- /.modal -->
</section> 

