
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('adminprocess/pengurus')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                          <h3><i class="fa fa-angle-right"></i> <?= $title?></h3>
                          <hr>
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php }
                          ?> 
                          <br>
                          <input type="hidden" name="id" value="<?= $id ?>">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama</label>
                              <div class="col-sm-4">
                                  <input type="text" placeholder="Nama" name="nama" class="form-control" value="<?= $nama ?>" rrequired="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Jabatan</label>
                              <div class="col-sm-4">
                                  <input type="text" placeholder="Jabatan" name="jabatan" class="form-control" value="<?= $jabatan ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Tahun</label>
                              <div class="col-sm-4">
                                  <input type="text" placeholder="Tahun" name="tahun" class="form-control" value="<?= $tahun ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-2 col-sm-offset-2">
                                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                              </div>
                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->