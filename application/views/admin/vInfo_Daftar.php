
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('adminprocess/info_daftar')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
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
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Semester Aktif</label>
                              <div class="col-sm-4">
                                  <input type="text" placeholder="Ganjil 2018/2019" name="semester_aktif" class="form-control" value="<?= $semester_aktif ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Masa Pendaftaran</label>
                              <div class="col-sm-3">
                                  <input type="checkbox" name="masa_pendaftaran" <?php if($masa_pendaftaran==1){ ?> checked="checked" <?php } ?> value="1" data-toggle="switch" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Jumlah Penghuni Per Kamar</label>
                              <div class="col-sm-4">
                                  <input type="number" placeholder="Jumlah Penghuni Per Kamar" name="penghuni_per_kamar" class="form-control" value="<?= $penghuni_per_kamar ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Info Pembayaran</label>
                              <div class="col-sm-10">
                                  <textarea name="info_pembayaran" class="form-control" required="required"><?= $info_pembayaran ?></textarea>
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