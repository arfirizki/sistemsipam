<head> 
    <title>cetak kwitansi</title>
    <meta charset="utf-8">
    <script type=”text/javascript”>
var s5_taf_parent = window.location;
function popup_print(){
window.open(‘preview.php’,’page’,’toolbar=0,scrollbars=1,location=0,statusbar=0,menubar=0,resizable=0,width=750,height=600,left=50,top=50,titlebar=yes’)
}
</script>
    <style>
        *{margin: 0; padding: 0}
        body{font-family: arial}
        .container{margin: auto; width:700px; text-align: center;}
        a{font-weight: bold}
    </style>
</head>

<body onload="window.print()">

<div class="row">
    <div class="col-md-12 container">
            <div class="panel-heading">
                <p ><img src="<?=base_url()?>assets/dist/img/pamsimas.jpg" style="float: left;" height="80px">PAMSIMAS</p>
                <p>DESA BOJONG KEC. BOJONG KAB. TEGAL</p>
                <p>Jl. Raya KH. Fatah Yasin No.1 Bojong</p>
                <br>
                <br>
               <hr>
               <br>
            </div>
        </div>
    </div>
<div class="panel-body table-responsive">
<form method="POST" action="">
    <div class="table" align="center">
        <?php
        $tarif = $row->tarif*$row->kubikasi;
        ?>
    <table>     
        <tr class="print">
            <td>ID. Tagihan</td>
            <td>: <?php echo $row->tagihan_id; ?></td>
            <td></td> 
            <td></td> 
            <td>Rincian Bayar</td>
        </tr>
        <tr>
            <td>Nama Pelanggan</td>
            <td>: <?php echo $row->name; ?></td> 
            <td></td>
            <td></td>
            <td>Pemakaian</td>
            <td>:  <?php echo $row->kubikasi; ?>m<sup>3</sup>x<?php echo rupiah($row->tarif); ?></td>
        </tr>
         <tr>
            <td>Bulan</td>
            <td>:  <?php echo $row->bulan; ?> </td>
            <td></td>
            <td></td>
            <td>Beban</td>
            <td>: <?php echo rupiah($row->beban); ?></td>
        </tr>
        <tr>
            <td>Tanggal Bayar</td>
            <td>: <?php echo $row->tgl_bayar; ?></td>
            <td></td>
            <td></td>
            <td>Harga</td>
            <td>: <?php echo rupiah($tarif); ?>
        </tr>
        <tr>
            <td>Awal</td>
            <td>:  <?php echo $row->kub_a; ?>m<sup>3</sup></td>
            <td></td>
            <td></td>
            <td></td>
            <td>  &nbsp -------------- +</td>            
        </tr> 
        <tr>
            <td>Akhir</td>
            <td>: <?php echo $row->kub_b; ?>m<sup>3</sup></td>            
            <td></td>
            <td></td>
            <td>Jumlah Bayar</td>
            <td>: <?php echo rupiah($row->total); ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:  <?php echo $row->keterangan; ?></td>            
        </tr>
</div>
<tr>
</td>
</tr>
    </table>    
</div>
</center>
<br>
<div style="float: right;">
    <label>Bojong, <?php echo date('Y-m-d')?></label>
    <br>
    <br>
    <br>
    <br>
    <label>Admin</label>
</div>
        
</form>
<?php
function rupiah($angka){
  
  $hasil_rupiah = "Rp." . number_format($angka,0,',','.');
  return $hasil_rupiah;
}
?>