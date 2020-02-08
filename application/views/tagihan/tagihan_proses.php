<?php if($get_pelanggan){
                    $id        = $get_pelanggan->pelanggan_id;
                    $nama      = $get_pelanggan->name;
                    $alamat         = $get_pelanggan->address;
                    $no_hp          = $get_pelanggan->phone;
                    $kategori          = $get_pelanggan->kategori;
                  }else{
                    $id="";
                    $nama="";
                    $alamat="";
                    $no_hp="";
                  }
            ?>  
<?php

  function rupiah($angka){
  
  $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
  return $hasil_rupiah;

}  
?>                
            <div class="box-header">
      <h3 class="box-title"></h3>
      <div class="pull-right">
        <a href="<?=site_url('kubikasii')?>" class="btn btn-waring btn-flat">
          <i class="fa fa-undo"></i> Back
        </a>  
      </div>
    </div>
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user"></i> Profil</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <div class="">
          <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user">
                      <div class="widget-user-header bg-aqua-active">
                        <h3 class="widget-user-username"><?=$nama?></h3>
                        <h5 class="widget-user-desc">ID <?=ucfirst($id)?></h5>
                        <h6 class="widget-user-desc">Kategori</h6>
                        <h6><?=$kategori  == 1 ? "Rumah Tangga": ($kategori==2 ? 'Fasilitas Umum': 'Perusahaan')?></h6>
                      </div>
                      <div class="widget-user-image">
                        <img class="img-circle" src="<?=base_url()?>assets/dist/img/pelanggan.png" alt="User Avatar">
                      </div>
                      <div class="box-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa fa-phone-square"></i> Phone</h5>
                              <span class="description-text"><?=$no_hp?></span>
                            </div>
                          </div>
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header"></h5>
                            <span class="description-text"></span>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="description-block">
                            <h5 class="description-header"><i class="fa fa-map-marker"></i> Address</h5>
                            <span class="description-text"><?=$alamat?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>                  
              </div>  
            </div>
          </div>
        </div>
      </div>
     
<!-- TAGIHAN       -->
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-money"></i> TAGIHAN</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
              <div class="row">
                  <div class="box-body table-responsive" >
                  <table id="table1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                      <td align="center" width="10px">No</td>
                      <td>No. Tagihan</td>                      
                      <td>Bulan</td>
                      <td><center>Kubikasi</center></td>
                      <td align="center" width="50px">Tanggal&nbspBayar</td>
                      <td>Jumlah&nbspBayar</td>
                      <td >Keterangan</td>
                      <td align="center">Action &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>
                      </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                      foreach ($get_tagihan as $data) { ?>
                      <tr>
                        <td><?=$no++?>.</td>
                        <td><?=$data['tagihan_id']?></td>
                        <td><?=$data['bulan']?></td>          
                        <td><?=$data['kubikasi']?>m<sup>3</sup></td>                  
                        <td align="center"><?=$data['tgl_bayar']?></td>                  
                        <td><?=rupiah($data['total'])?></td>            
                        <td><?=$data['keterangan']?></td> 
                        <td align="center">
                        <?php  if($data['keterangan']=='BELUM'){?>
                         <a href="<?php echo base_url('tagihan/form_bayar/'.$data['tagihan_id'])?>" class="btn btn-success btn-xs"><i class="fa fa-usd"></i> Bayar</a>
                         <label>| </label>
                         <a href="<?php echo base_url('tagihan/update/'.$data['tagihan_id'])?>" class="btn btn-primary btn-xs">
                        <i class="fa fa-pencil"></i> Edit
                        </a>  
                        <?php }else{?>
                         <center><a href="<?php echo base_url('tagihan/form_bayar/'.$data['tagihan_id'])?>" class="btn btn-primary btn-xs"><i class="fa fa-ellipsis-h"></i> Detail</a></center>         
                      <?php } ?>                
                      </td>                                 
                      </tr>
                      <?php
                      } ?>
                    </tbody>
                  </table>
                  </div>
                </div>                   
              </div>  
            </div>
          </div>
</div>          


