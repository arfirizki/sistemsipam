<?php

  function rupiah($angka){
  
  $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
  return $hasil_rupiah;

}  
?>                
<!-- TAGIHAN       -->
<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-money"></i> TAGIHAN</h3>
              <marquee><font color="red">MOHON BAYAR TEPAT WAKTU...</font></marquee>
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
                      <td>Tanggal&nbspBayar</td>
                      <td>Jumlah&nbspBayar</td>
                      <td>Keterangan</td>
                      <td align="center">Action</td>
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
                        <td><?=$data['tgl_bayar']?></td>            
                        <td><?=rupiah($data['total'])?></td>            
                        <td><?=$data['keterangan']?></td> 
                        <td>
                         <center><a href="<?php echo base_url('tagihanp/form_bayar/'.$data['tagihan_id'])?>" class="btn btn-primary btn-xs"><i class="fa fa-ellipsis-h"></i> Detail</a></center>
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


