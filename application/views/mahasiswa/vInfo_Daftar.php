
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('process/tambahConfig')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
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
                          <br>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Semester Aktif</label>
                              <div class="col-sm-4">
                                  <input type="text" placeholder="Ganjil 2018/2019" name="semester_aktif" class="form-control" value="<?= $semester_aktif ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Masa Pendaftaran</label>
                              <div class="col-sm-3">
                                  <input type="checkbox" name="masa_pendaftaran" <?php if($masa_pendaftaran==1){ ?> checked="checked" <?php } ?> data-toggle="switch" readonly="readonly"/>
                              </div>
                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->