              
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
                            <h4><i class="fa fa-angle-right"></i> Data Digital Printing</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th width="15%"><a class="btn btn-sm btn-info" href="<?= base_url('admin/digitalprinting_tambah')?>"><i class="fa fa-plus"> Tambah Digital Printing</i></a></th>
                                  <th>Kode</th>
                                  <th>Nama Bahan</th>
                                  <th>Harga Modal/M</th>
                                  <th>Harga Umum/M</th>
                                  <th>Harga Reseller/M</th>
                                  <th>Harga Agent/M</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($digitalprinting->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td>
                                      <a class="btn btn-sm btn-primary" href="<?= base_url('admin/digitalprinting_ubah/'.$row->kode)?>"><i class="fa fa-pencil "> Edit</i></a>
                                      <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');" href="<?= base_url('admin/digitalprinting_hapus/'.$row->kode)?>"><i class="fa fa-trash-o "> Hapus</i></a>
                                  </td>
                                  <td><?= $row->kode?></td>
                                  <td><?= $row->nama_cetak?></td>
                                  <td><?= $row->harga_modal?></td>
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