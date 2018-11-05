
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
                      <form action="<?= base_url('adminprocess/penghuni')?>" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nomor Kamar</label>
                              <div class="col-sm-10">
                                  <select name="id_kamar" class="form-control" required="required">
                                    <option>Pilih...</option>
                                    <?php foreach($kamar->result() as $row){ ?>
                                    <option value="<?= $row->id_kamar?>"><?= $row->id_kamar.' ('.$row->jumlah_penghuni.' penghuni)'?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">NPM</label>
                              <div class="col-sm-10">
                                  <select name="npm" class="form-control" required="required">
                                    <option>Pilih...</option>
                                    <?php foreach($mahasiswa->result() as $row){ ?>
                                    <option value="<?= $row->npm?>"><?= $row->npm.' '.$row->nama_lengkap?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Tanggal masuk</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Tanggal masuk" name="tgl_masuk" class="form-control" value="<?= $tgl_masuk ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Keterangan" name="keterangan" class="form-control" value="<?= $keterangan ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Semester</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Semester" name="semester" class="form-control" value="<?= $semester ?>" readonly="readonly">
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