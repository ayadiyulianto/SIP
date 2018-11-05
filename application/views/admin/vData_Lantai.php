              
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
                            <h4><i class="fa fa-angle-right"></i> Lantai dan Harga Sewa</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Lantai</th>
                                  <th>Harga</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($lantai->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->id_lantai?></td>
                                  <td>Rp <?= number_format($row->harga,2,",",".")?></td>
                                  <td>
                                      <a class="btn btn-sm btn-primary" href="<?= base_url('admin/edit_lantai/'.$row->id_lantai)?>"><i class="fa fa-pencil"> Ubah</i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->