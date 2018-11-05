
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                          <h3><i class="fa fa-angle-right"></i> <?= $title?></h3>
                          <hr>
                          <h4><i class="fa fa-home"></i> Deskripsi Asrama</h4>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Asrama</label>
                              <div class="col-sm-10">
                                  <input type="text" name="nama_asrama" class="form-control" value="<?= $config->nama_asrama ?>" placeholder="Nama Asrama" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Sejarah Asrama</label>
                              <div class="col-sm-10">
                                  <textarea name="sejarah" class="form-control" readonly="readonly"><?= $config->sejarah ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Visi Asrama</label>
                              <div class="col-sm-10">
                                  <textarea name="visi" class="form-control" readonly="readonly"><?= $config->visi ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Misi Asrama</label>
                              <div class="col-sm-10">
                                  <textarea name="misi" class="form-control" readonly="readonly"><?= $config->misi ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Logo</label>
                              <div class="col-sm-3">
                                  <img src="<?= base_url()?>assets/img/<?= $config->logo ?>" style="width: 100px; height: auto;">
                              </div>
                          </div>
                          <h4><i class="fa fa-phone"></i> Info Kontak</h4>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Alamat" name="alamat" class="form-control" value="<?= $config->alamat ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Telepon</label>
                              <div class="col-sm-3">
                                  <input type="text" placeholder="Telepon" name="telepon" class="form-control" value="<?= $config->telepon ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Lokasi</label>
                              <div class="col-sm-10 form-inline">
                                  <input type="text" placeholder="Latitude/Lintang" name="map_latitude" class="form-control" value="<?= $config->map_latitude ?>" readonly="readonly">
                                  <input type="text" placeholder="Langitude/Bujur" name="map_langitude" class="form-control" value="<?= $config->map_langitude ?>" readonly="readonly">
                              </div>
                          </div>
                      </form>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->   
            </div><!-- /row -->