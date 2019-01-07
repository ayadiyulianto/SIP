              
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
                          <h4><i class="fa fa-angle-right"></i> Log Aktivitas</h4>
                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Username</th>
                                  <th>Aktivitas</th>
                                  <th>Waktu</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($log->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->username?></td>
                                  <td><?= $row->activity?></td>
                                  <td><?= $row->datetime?></td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                          <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');" href="<?= base_url('admin/log_hapus')?>"><i class="fa fa-trash-o"> Kosongkan Log Aktivitas</i></a>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->