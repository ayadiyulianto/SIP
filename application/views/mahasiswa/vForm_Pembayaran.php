
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h3><i class="fa fa-angle-right"></i> <?= $title?></h3>
                      <hr>
                      <?php
                        $info=$this->session->flashdata('info');
                        $error=$this->session->flashdata('error');
                        if(!empty($info)) { ?>
                           <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                        <?php } elseif(!empty($error)) { ?>
                            <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                        <?php } ?>
                      <form action="<?= base_url('mahasiswaProcess/pembayaran')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id_pembayaran" value="<?= $id_pembayaran ?>">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">ID Penghuni</label>
                              <div class="col-sm-10">
                                  <input type="text" name="id_penghuni" class="form-control" value="<?= $id_penghuni ?>" placeholder="ID Penghuni" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Tanggal Bayar</label>
                              <div class="col-sm-10">
                                  <input type="text" name="tgl_bayar" class="form-control" value="<?= $tgl_bayar ?>" placeholder="Tanggal Bayar" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Jumlah Bayar</label>
                              <div class="col-sm-10">
                                  <input type="number" name="jumlah_bayar" class="form-control" value="<?= $jumlah_bayar ?>" placeholder="Jumlah Bayar" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Lampiran</label>
                              <div class="col-sm-7">
                                  <div class="fileupload fileupload-new" data-provides="fileupload">
                                      <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                          <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
                                      </div>
                                      <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                      <div>
                                          <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Ganti Lampiran</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Ganti</span>
                                            <input type="file" name="lampiran" class="default" <?php if($lampiran==""){ echo 'required="required"'; } ?>>
                                          </span>
                                      </div>
                                  </div>
                              </div>
                              <?php if($lampiran!=""){ ?>
                              <div class="col-sm-3">
                                  <img src="<?= base_url()?>assets/img/<?= $lampiran ?>" style="width: auto; height: 150px;">
                              </div>
                              <?php }?>
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