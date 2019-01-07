              
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
                            <h4><i class="fa fa-angle-right"></i> Data Transaksi</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th width="15%"><a class="btn btn-sm btn-info" href="<?= base_url('admin/transaksi_tambah')?>"><i class="fa fa-plus"> Tambah Transaksi</i></a></th>
                                  <th>ID Trx</th>
                                  <th>Tanggal Terima</th>
                                  <th>Kasir</th>
                                  <th>Pelanggan</th>
                                  <th>Tanggal Jadi</th>
                                  <th>Total Harga</th>
                                  <th>Bayar</th>
                                  <th>Status</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($transaksi->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td>
                                      <a class="btn btn-sm btn-success" href="<?= base_url('admin/transaksi_detail/'.$row->id)?>"><i class="fa fa-search "> Detail</i></a>
                                      <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');" href="<?= base_url('admin/transaksi_hapus/'.$row->id)?>"><i class="fa fa-trash-o "> Hapus</i></a>
                                  </td>
                                  <td><?= $row->id?></td>
                                  <td><?= $row->tanggal_terima?></td>
                                  <td><?= $row->kasir?></td>
                                  <td><?= $row->pelanggan?></td>
                                  <td><?= $row->tanggal_jadi?></td>
                                  <td><?= "Rp ".number_format($row->total_harga,2,",",".")?></td>
                                  <td>
                                    <?php if($row->bayar < $row->total_harga){ echo "<font style='color: blue'> Rp ".number_format($row->bayar,2,",",".")."</font>";}
                                          else{ echo "<b style='color: green'>LUNAS</b>";} ?>
                                  </td>
                                  <td><?php
                                    if($row->tanggal_diambil==NULL){ ?> Belum Selesai  &nbsp; <a class="btn btn-xs btn-success" onclick="return confirm('Yakin ingin mengubah?');" href="<?= base_url('admin/transaksi_selesai/'.$row->id) ?>">Telah diambil</a>
                                    <?php } else { echo "Selesai"; } ?>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->