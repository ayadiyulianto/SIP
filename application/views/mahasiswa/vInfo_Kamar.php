
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                          <h3><i class="fa fa-angle-right"></i> Info Kamar Dihuni</h3>
                          <hr>
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php } ?>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nomor Kamar</label>
                              <div class="col-sm-2">
                                  <input type="text" name="id_kamar" class="form-control" value="<?= $kamar->id_kamar ?>" placeholder="Nomor Kamar" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Tanggal Masuk</label>
                              <div class="col-sm-2">
                                  <input type="text" name="tgl_masuk" class="form-control" value="<?= date_format(date_create($kamar->tgl_masuk),"d-m-Y") ?>" placeholder="Tanggal Masuk" readonly="readonly" id='datepicker' data-date-format="dd-mm-yyyy">
                              </div>
                          </div>
                      </form>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->   
            </div><!-- /row -->