
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
                      <form action="<?= base_url('admin/pelanggan_simpan')?>" class="form-horizontal style-form" method="post">
                          <input type="hidden" name="id" class="form-control" <?php if(isset($data)) echo 'value="'.$data['id'].'"'?>">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Tipe</label>
                              <div class="col-sm-10">
                                  <select name="tipe" class="form-control" required="required">
                                    <option>Pilih...</option>
                                    <option value="umum" <?php if(isset($data) AND $data['tipe']=="umum") echo 'selected' ?>>Umum</option>
                                    <option value="agent" <?php if(isset($data) AND $data['tipe']=="agent") echo 'selected'?>>Agent</option>
                                    <option value="reseller" <?php if(isset($data) AND $data['tipe']=="reseller") echo 'selected'?>>Reseller</option>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama" class="form-control" <?php if(isset($data)) echo 'value="'.$data['nama'].'"'?> placeholder="Nama" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">No. Telepon</label>
                              <div class="col-sm-10">
                                  <input type="text" name="no_telp" class="form-control" <?php if(isset($data)) echo 'value="'.$data['no_telp'].'"'?> placeholder="No Telepon" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <textarea name="alamat" class="form-control noMCE"><?php if(isset($data)) echo $data['alamat']?></textarea>
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