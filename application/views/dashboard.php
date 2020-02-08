<!-- Dashboard Admin -->
<?php if($this->fungsi->user_login()->level==1) {?>
  <?php $this->load->view('dashboard_admin') ?>
<?php }?>

<!-- Dashboard Pelanggan -->

<?php if($this->fungsi->user_login()->level==2) {?>
  <?php $this->load->view('dashboard_pelanggan') ?>
<?php }?>