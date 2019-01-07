              
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
                            <h4><i class="fa fa-angle-right"></i> Data Offset Printing</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Kode</th>
                                  <th>Jenis Cetakan</th>
                                  <th>Harga Umum</th>
                                  <th>Harga Reseller</th>
                                  <th>Harga Agent</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($offsetprinting->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->kode?></td>
                                  <td><?= $row->nama_cetak?></td>
                                  <td><?= $row->harga_umum?></td>
                                  <td><?= $row->harga_reseller?></td>
                                  <td><?= $row->harga_agent?></td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->