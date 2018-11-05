
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('mahasiswaprocess/ubahpassword')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
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
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" value="<?= $username ?>" placeholder="Username" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Password Baru</label>
                              <div class="col-sm-10">
                                  <input type="password" name="password_baru" id="password_baru"  class="form-control" placeholder="Password Baru" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Ulangi Password Baru</label>
                              <div class="col-sm-10">
                                  <input type="password" name="ulangi_password_baru" id="ulangi_password_baru" onkeyup="check();" class="form-control" placeholder="Ulangi Password Baru" required="required">
                              </div>
                              <div class="col-lg-2"></div>
                              <label class="col-lg-10 control-label" id="message"></label>
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

            <script type="text/javascript">
                var check = function() {
                  if (document.getElementById('password_baru').value ==
                    document.getElementById('ulangi_password_baru').value) {
                    document.getElementById('message').style.color = 'blue';
                    document.getElementById('message').innerHTML = 'Sesuai';
                  } else {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Tidak sesuai';
                  }
                }
            </script>