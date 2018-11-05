
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
                        <?php }
                      ?> 
                      <form action="<?= base_url('adminprocess/user')?>" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" value="<?= $username ?>" placeholder="Username" required="required">
                                  <input type="hidden" name="usernamee" class="form-control" value="<?= $username ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Level</label>
                              <div class="col-sm-10">
                                  <select name="level" class="form-control" required="required">
                                    <option>Pilih...</option>
                                    <option value="mahasiswa" <?php if($level=="mahasiswa") echo 'selected'?>>Mahasiswa</option>
                                    <option value="admin" <?php if($level=="admin") echo 'selected'?>>Admin</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" placeholder="Password" id="password" name="password" class="form-control" value="<?= $password ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Ulangi Password</label>
                              <div class="col-sm-10">
                                  <input type="password" placeholder="Ulangi Password" onkeyup="check();" id="ulangipassword" name="ulangipassword" class="form-control" value="<?= $password ?>" required="required">
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
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->

            <script type="text/javascript">
                var check = function() {
                  if (document.getElementById('password').value ==
                    document.getElementById('ulangipassword').value) {
                    document.getElementById('message').style.color = 'blue';
                    document.getElementById('message').innerHTML = 'Sesuai';
                  } else {
                    document.getElementById('message').style.color = 'red';
                    document.getElementById('message').innerHTML = 'Tidak sesuai';
                  }
                }
            </script>