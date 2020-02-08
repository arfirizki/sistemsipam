<div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"><i class="fa fa-user"></i> Profil</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <div class="btn-group">
                  <button type="button" class="btn btn-box-tool">
                    <i class="fa fa-wrench"></i></button>                  
                </div>
                
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                  <div class="">
          <!-- Widget: user widget style 1 -->
                  <div class="box box-widget widget-user">
                      <div class="widget-user-header bg-aqua-active">
                        <h3 class="widget-user-username"><?=ucfirst($this->fungsi->profil()->name)?></h3>
                        <h5 class="widget-user-desc">ID <?=ucfirst($this->fungsi->profil()->pelanggan_id)?></h5>
                        <h6 class="widget-user-desc">Kategori <?=ucfirst($this->fungsi->profil()->kategori)?></h6>
                        <h6>PELANGGAN</h6>
                      </div>
                      <div class="widget-user-image">
                        <img class="img-circle" src="<?=base_url()?>assets/dist/img/pelanggan.png" alt="User Avatar">
                      </div>
                      <div class="box-footer">
                        <div class="row">
                          <div class="col-sm-4 border-right">
                            <div class="description-block">
                              <h5 class="description-header"><i class="fa fa-phone-square"></i> Phone</h5>
                              <span class="description-text"><?=ucfirst($this->fungsi->profil()->phone)?></span>
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
                            <span class="description-text"><?=ucfirst($this->fungsi->profil()->address)?></span>
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
