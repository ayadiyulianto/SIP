              
              <div class="row mt">
                  <div class="col-md-12 col-lg-12">
                      <div class="content-panel col-md-12 col-lg-12">
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php } ?>
                            <h4><i class="fa fa-angle-right"></i> Detail Pembayaran</h4>
                            <hr>
                            <div class="row">
                              <div class="col-lg-2"><h5>Nama</h5></div>
                              <div class="col-lg-4"><h5>: <b><?= $pembayaran->nama_lengkap?></b></h5></div>
                            </div>
                            <div class="row">
                              <div class="col-lg-2"><h5>NPM</h5></div>
                              <div class="col-lg-4"><h5>: <b><?= $pembayaran->npm?></b></h5></div>
                            </div>
                            <div class="row">
                              <div class="col-lg-2"><h5>Nomor Kamar</h5></div>
                              <div class="col-lg-4"><h5>: <b><?= $pembayaran->id_kamar?></b></h5></div>
                            </div>
                            <div class="row">
                              <div class="col-lg-2"><h5>Semester</h5></div>
                              <div class="col-lg-4"><h5>: <b><?= $pembayaran->semester?></b></h5></div>
                            </div>
                            <div class="row">
                              <div class="col-lg-2"><h5>Status Huni</h5></div>
                              <div class="col-lg-4"><h5>: <b><?= $pembayaran->keterangan?></b></h5></div>
                            </div>
                            <br>
                            <table class="myTable table table-bordered table-striped table-condensed table-hover">
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Tanggal Bayar</th>
                                  <th>Jumlah</th>
                                  <th>Lampiran</th>
                                  <th width="15%"><?php if($pembayaran->sisa > 0){ ?><a class="btn btn-sm btn-info " href="<?= base_url('mahasiswa/tambah_pembayaran/'.$pembayaran->id_penghuni)?>"><i class="fa fa-plus"></i> Tambah Data</a><?php }?></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($detail_pembayaran->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= date('d-m-Y H:m:s',strtotime($row->tgl_bayar))?></td>
                                  <td>Rp <?= number_format($row->jumlah_bayar,2,",",".")?></td>
                                  <td>
                                    <div class="project-wrapper" style="width: 100px;">
                                      <div class="project">
                                        <div class="photo-wrapper">
                                          <div class="photo">
                                            <a class="fancybox" href="<?= base_url()?>assets/img/<?= $row->lampiran ?>"><img src="<?= base_url()?>assets/img/<?= $row->lampiran ?>" style="width: 100px; height: auto;"></a>
                                          </div>
                                          <div class="overlay"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                      <a class="btn btn-sm btn-primary" href="<?= base_url('mahasiswa/edit_pembayaran/'.$row->id_pembayaran)?>"><i class="fa fa-edit "> Ubah</i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                            </table>

                            <div class="row">
                              <div class="col-lg-2"><h5>Total dibayar</h5></div>
                              <div class="col-lg-4"><h5>: <b>Rp <?= number_format($pembayaran->jumlah,2,",",".")?></b></h5></div>
                            </div>
                            <div class="row">
                              <div class="col-lg-2"><h5>Keterangan</h5></div>
                              <div class="col-lg-4">
                                <h5>: <?php if($pembayaran->sisa > 0){ ?>
                                  <span style="margin: 5px" class="badge bg-important"><i class="fa fa-minus"></i></span> <b style="color: red">sisa Rp <?= number_format($pembayaran->sisa,2,",",".")?></b>
                                  <?php }else{ ?>
                                    <span style="margin: 5px" class="badge bg-success"><i class="fa fa-check"></i></span> <b style="color: green">LUNAS</b>
                                  <?php } ?>
                                </h5>
                              </div>
                            </div>
                            <hr>

                            <div class="row">
                              <div class="col-lg-2"><h4>Informasi Pembayaran</h4></div>
                              <div class="col-lg-10">
                                <?php echo $this->mDatabase->get('tb_umum')->row()->info_pembayaran; ?>
                              </div>
                            </div>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->