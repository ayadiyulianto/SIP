
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('adminprocess/mahasiswa')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
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
                          <h4><i class="fa fa-user"></i> Biodata Penghuni</h4>
                          <input type="hidden" name="id" value="<?= $npm ?>">
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nama Lengkap</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="Nama Lengkap" name="nama_lengkap" class="form-control" value="<?= $nama_lengkap ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nama Panggilan</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Nama Panggilan" name="nama_panggilan" class="form-control" value="<?= $nama_panggilan ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Alamat Asal</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Alamat Asal" name="alamat_asal" class="form-control" value="<?= $alamat_asal ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tempat Lahir</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Tempat Lahir" name="tempat_lahir" class="form-control" value="<?= $tempat_lahir ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Tanggal Lahir</label>
                            <div class="col-lg-10">
                                <input type="text" placeholder="dd-mm-yyyy" name="tgl_lahir" class="form-control" value="<?= $tgl_lahir ?>" required="required" id='datepicker' data-date-format="dd-mm-yyyy">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Agama</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Agama" name="agama" class="form-control" value="<?= $agama ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nomor KTP</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Nomor KTP" name="no_ktp" class="form-control" value="<?= $no_ktp ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Program Studi</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Program Studi" name="program_studi" class="form-control" value="<?= $program_studi ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Fakultas</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Fakultas" name="fakultas" class="form-control" value="<?= $fakultas ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nomor HP</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Nomor HP" name="no_hp" class="form-control" value="<?= $no_hp ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10  ">
                                <input type="email" placeholder="Email" name="email" class="form-control" value="<?= $email ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Hobi</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Hobi" name="hoby" class="form-control" value="<?= $hoby ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Organisasi diikuti</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Organisasi" name="organisasi" class="form-control" value="<?= $organisasi ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Riwayat Penyakit</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Riwayat Penyakit" name="riwayat_penyakit" class="form-control" value="<?= $riwayat_penyakit ?>" required="required">
                            </div>
                          </div>
                          <h4><i class="fa fa-users"></i> Data Orang Tua</h4>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nama Ayah</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Nama Ayah" name="nama_ayah" class="form-control" value="<?= $nama_ayah ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nama Ibu</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Nama Ibu" name="nama_ibu" class="form-control" value="<?= $nama_ibu ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Alamat Orang Tua</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Alamat Orang Tua" name="alamat_ortu" class="form-control" value="<?= $alamat_ortu ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Nomor HP Orang Tua</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Nomor HP Orang Tua" name="no_hp_ortu" class="form-control" value="<?= $no_hp_ortu ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Pekerjaan Orang Tua</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Pekerjaan" name="pekerjaan_ortu" class="form-control" value="<?= $pekerjaan_ortu ?>" required="required">
                            </div>
                          </div>

                          <h4><i class="fa fa-key"></i> Informasi Akun</h4>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">NPM</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="NPM" name="npm" class="form-control" value="<?= $npm ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-lg-2 control-label">Password</label>
                            <div class="col-lg-10  ">
                                <input type="text" placeholder="Password" name="password" class="form-control" value="<?= $password ?>" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-2 col-sm-offset-2">
                                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                              </div>
                          </div>
                      </form>
                  </div>
              </div><!---->       
            </div><!-- /row -->