<section class="content-header">
  <h1>
    Dashboard Admin
    <small>SiPam</small>
  </h1>  
</section>

<!-- Main content -->
<section class="content">

  <!-- Default box -->
  <div class="row">
    <!-- /.col -->
    <a href="<?=site_url('admin')?>">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-blue"><i class="fa fa-user"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Admin</span>
          <span class="info-box-number"><?=$jmladmin?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    </a>
    <!-- /.col -->
    <a href="<?=site_url('pelanggan')?>">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Pelanggan</span>
          <span class="info-box-number"><?=$jmlpelanggan?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>
    <!-- /.col -->
    <a href="<?=site_url('report/nunggak')?>">
    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-red"><i class="fa fa-usd"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tagihan Nunggak</span>
          <span class="info-box-number"><?=$jmltagihannunggak?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
  </a>
    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
      <div class="info-box">
        <span class="info-box-icon bg-green"><i class="fa fa-usd"></i></span>

        <div class="info-box-content">
          <span class="info-box-text">Tagihan Terbayar</span>
          <span class="info-box-number"><?=$jmltagihan?></span>
        </div>
        <!-- /.info-box-content -->
      </div>
      <!-- /.info-box -->
    </div>
    <!-- /.col -->
    
  </div>
  <!-- /.box -->

</section> 