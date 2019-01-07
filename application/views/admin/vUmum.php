
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('adminProcess/umum')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
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
                          <h4><i class="fa fa-home"></i> Deskripsi Percetakan</h4>
                          <div class="form-group">
                            <div class="col-lg-12">
                                  <textarea rows="10" name="tentang" class="form-control" required="required"><?= $config->tentang ?></textarea>
                            </div>
                          </div>
                          <h4><i class="fa fa-home"></i> Logo Percetakan</h4>
                          <div class="form-group">
                              <?php if($config->logo!=""){ ?>
                              <div class="col-sm-4">
                                  <img src="<?= base_url()?>assets/img/<?= $config->logo ?>" style="width: auto; height: 150px;">
                              </div>
                              <?php }?>
                              <div class="col-sm-4">
                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                      </div>
                                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                      <div>
                                          <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Pilih gambar baru</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Ganti</span>
                                            <input type="file" name="logo" class="default">
                                          </span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <h4><i class="fa fa-phone"></i> Info Kontak</h4>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Alamat" name="alamat" class="form-control" value="<?= $config->alamat ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Telepon</label>
                              <div class="col-sm-3">
                                  <input type="text" placeholder="Telepon" name="telepon" class="form-control" value="<?= $config->telepon ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Lokasi</label>
                              <div class="col-sm-10 form-inline">
                                  <input type="text" placeholder="Latitude/Lintang" name="map_latitude" class="form-control" value="<?= $config->map_latitude ?>" required="required">
                                  <input type="text" placeholder="Langitude/Bujur" name="map_langitude" class="form-control" value="<?= $config->map_longitude ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-2 col-sm-offset-2">
                                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                              </div>
                          </div>
                      </form>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->   
            </div><!-- /row -->