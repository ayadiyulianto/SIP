              
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
                            <h4><i class="fa fa-angle-right"></i> Data Antrian Pesanan</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>ID Trx</th>
                                  <th>Jenis Cetakan</th>
                                  <th>Jumlah</th>
                                  <th>Tanggal Jadi</th>
                                  <th>Keterangan</th>
                                  <th>Status</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($pesanan->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->id_transaksi?></td>
                                  <td><?= $row->kode_barang.' - '.$row->nama_cetak?></td>
                                  <td><?= $row->jumlah?></td>
                                  <td><?= date('d M Y',strtotime($row->tanggal_jadi))?></td>
                                  <td><?= $row->keterangan?></td>
                                  <td><?php echo $row->status;
                                      if($row->status=="dipesan"){ ?> &nbsp; <a class="btn btn-xs btn-info" href="<?= base_url('admin/pesanan_ubah/diproses/'.$row->id)?>">Proses</a>
                                      <?php }elseif($row->status=="diproses"){ ?> &nbsp; <a class="btn btn-xs btn-success" onclick="return confirm('Yakin telah selesai?');" href="<?= base_url('admin/pesanan_ubah/selesai/'.$row->id)?>">Selesai</a>
                                      <?php } ?>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->