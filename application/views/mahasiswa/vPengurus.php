              
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel col-md-12">
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php } ?>
                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                            <h4><i class="fa fa-angle-right"></i> Data Pengurus Asrama</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Nama</th>
                                  <th>Jabatan</th>
                                  <th>Tahun</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($pengurus->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->nama?></td>
                                  <td><?= $row->jabatan?></td>
                                  <td><?= $row->tahun?></td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->