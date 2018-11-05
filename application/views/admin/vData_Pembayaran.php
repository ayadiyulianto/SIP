              
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
                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                            <h4><i class="fa fa-angle-right"></i> Data Pembayaran</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Nama</th>
                                  <th>NPM</th>
                                  <th>Nomor Kamar</th>
                                  <th>Jumlah Bayar</th>
                                  <th>Keterangan</th>
                                  <th>Semester</th>
                                  <th>Keterangan</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($pembayaran->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->nama_lengkap?></td>
                                  <td><?= $row->npm?></td>
                                  <td><?= $row->id_kamar?></td>
                                  <td>Rp <?= number_format($row->jumlah,2,",",".")?></td>
                                  <td>
                                    <?php if($row->sisa > 0){ echo "<font style='color: red'>sisa Rp ".number_format($row->sisa,2,",",".")."</font>";}
                                          else{ echo "<b style='color: green'>LUNAS</b>";} ?>
                                  </td>
                                  <td><?= $row->semester?></td>
                                  <td><?= $row->keterangan?></td>
                                  <td>
                                      <a class="btn btn-sm btn-primary" href="<?= base_url('admin/detail_pembayaran/'.$row->id_penghuni)?>"><i class="fa fa-search "> Detail Pembayaran</i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->