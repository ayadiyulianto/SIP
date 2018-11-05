
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('mahasiswaprocess/biodata')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
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
                          <h4><i class="fa fa-user"></i> Data Diri</h4>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">NPM</label>
                              <div class="col-sm-10">
                                  <input type="text" name="npm" class="form-control" value="<?= $biodata->npm ?>" placeholder="NPM" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Lengkap</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_lengkap" class="form-control" value="<?= $biodata->nama_lengkap ?>" placeholder="Nama Lengkap" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Panggilan</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_panggilan" class="form-control" value="<?= $biodata->nama_panggilan ?>" placeholder="Nama Panggilan" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat Asal</label>
                              <div class="col-sm-10">
                                  <input type="text" name="alamat_asal" class="form-control" value="<?= $biodata->alamat_asal ?>" placeholder="Alamat Asal" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Agama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="agama" class="form-control" value="<?= $biodata->agama ?>" placeholder="Agama" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Tanggal Lahir</label>
                              <div class="col-sm-10">
                                  <input type="text" name="tgl_lahir" class="form-control" value="<?= date_format(date_create($biodata->tgl_lahir),"d-m-Y") ?>" placeholder="Tanggal Lahir" required="required" id='datepicker' data-date-format="dd-mm-yyyy">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nomor KTP</label>
                              <div class="col-sm-10">
                                  <input type="text" name="no_ktp" class="form-control" value="<?= $biodata->no_ktp ?>" placeholder="Nomor KTP" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Program Studi</label>
                              <div class="col-sm-10">
                                  <input type="text" name="program_studi" class="form-control" value="<?= $biodata->program_studi ?>" placeholder="Program Studi" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Fakultas</label>
                              <div class="col-sm-10">
                                  <input type="text" name="fakultas" class="form-control" value="<?= $biodata->fakultas ?>" placeholder="Fakultas" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nomor HP</label>
                              <div class="col-sm-10">
                                  <input type="text" name="no_hp" class="form-control" value="<?= $biodata->no_hp ?>" placeholder="Nomor HP" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" name="email" class="form-control" value="<?= $biodata->email ?>" placeholder="Email" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Hobi</label>
                              <div class="col-sm-10">
                                  <input type="text" name="hoby" class="form-control" value="<?= $biodata->hoby ?>" placeholder="Hobi" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Organisasi</label>
                              <div class="col-sm-10">
                                  <input type="text" name="organisasi" class="form-control" value="<?= $biodata->organisasi ?>" placeholder="Organisasi" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Riwayat Penyakit</label>
                              <div class="col-sm-10">
                                  <input type="text" name="riwayat_penyakit" class="form-control" value="<?= $biodata->riwayat_penyakit ?>" placeholder="Riwayat Penyakit" required="required">
                              </div>
                          </div>
                          <h4><i class="fa fa-users"></i> Data Orang Tua</h4>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Ayah</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_ayah" class="form-control" value="<?= $biodata->nama_ayah ?>" placeholder="Nama Ayah" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Ibu</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_ibu" class="form-control" value="<?= $biodata->nama_ibu ?>" placeholder="Nama Ibu" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat Orang Tua</label>
                              <div class="col-sm-10">
                                  <input type="text" name="alamat_ortu" class="form-control" value="<?= $biodata->alamat_ortu ?>" placeholder="Alamat Orang Tua" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nomor HP Orang Tua</label>
                              <div class="col-sm-10">
                                  <input type="text" name="no_hp_ortu" class="form-control" value="<?= $biodata->no_hp_ortu ?>" placeholder="Nomor HP Orang Tua" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Pekerjaan Orang Tua</label>
                              <div class="col-sm-10">
                                  <input type="text" name="pekerjaan_ortu" class="form-control" value="<?= $biodata->pekerjaan_ortu ?>" placeholder="Pekerjaan Orang Tua" required="required">
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