<div class="row">
	<div class="col-md-12">
		<div class="box">
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:blue;">DATA PEMBAYARAN PELANGGAN</h3>
			</div>
			<hr/>
			<div class="box-body">	
				<form method="POST" action="<?=site_url('report/tampilkan')?>"  >
					<div class="form-group">
						<label>Laporan Data Pembayaran</label>
						Mulai Tanggal <input type="date" name="tgl1" value="<?php echo date('Y-m-d');?>" />
						Sampai Tanggal <input type="date" name="tgl2" value="<?php echo date('Y-m-d');?>">
			<input class="btn btn-success" type="submit" name="Tampilkan">
	</form>
					</div>
				</form>
			</div>
			<div class="box-header">
				<h3 class="box-title" style="padding-top:0; margin-top:0; color:black;">DATA PELANGGAN YANG BELUM BAYAR <font color="red"><?=$jmltagihannunggak?></font></h3>
			</div>
			<hr/>
			<div class="box-body">	
				<form method="POST" action="<?=site_url('report/nunggak')?>">
					<div class="form-group">
						<label>Laporan Data Pelanggan Belum Bayar</label>
						<input class="btn btn-danger" type="submit" name="Tampilkan">
	</form>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
