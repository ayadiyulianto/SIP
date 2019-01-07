
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel form-horizontal style-form">
                      <h3><i class="fa fa-angle-right"></i> Detail Transaksi <a href="<?= base_url('admin/transaksi_cetak/'.$transaksi->id) ?>" target="_blanks" class="btn btn-info"><i class="fa fa-print"></i> Cetak Transaksi</a></h3>
                                  
                      <hr>
                      <?php
                        $info=$this->session->flashdata('info');
                        $error=$this->session->flashdata('error');
                        if(!empty($info)) { ?>
                           <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                        <?php } elseif(!empty($error)) { ?>
                            <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                        <?php } ?>
                        <h3>ID Transaksi : <?= $transaksi->id?></h3>
                        <div class="form-group"></div>
                        <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Tanggal Terima</label>
                              <div class="col-sm-7">
                                  <input type="text" name="tanggal_terima" class="form-control" value="<?= date('d M Y H:m:s',strtotime($transaksi->tanggal_terima))?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Tanggal Jadi</label>
                              <div class="col-sm-7">
                                  <input type="text" name="tanggal_jadi" class="form-control" value="<?= date('d M Y',strtotime($transaksi->tanggal_jadi))?>" readonly="readonly">
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Kasir</label>
                              <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?= $transaksi->kasir ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Pelanggan</label>
                              <div class="col-sm-7">
                                  <input value="<?= $transaksi->nama.' ('.$transaksi->no_telp.')'?>" id="pelanggan" type="text" name="pelanggan" class="form-control" readonly="readonly">
                              </div>
                          </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                          <h4><i class="fa fa-angle-right"></i> Data Pesanan</h4>
                          <div class="form-group"></div>

                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th>Jenis Cetakan</th>
                                <th>Jumlah</th>
                                <th>Cetak</th>
                                <th>Design</th>
                                <th>Finishing</th>
                                <th>Total Harga</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php $i=1; foreach($pesanan->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->kode_barang.' - '.$row->nama_cetak?></td>
                                  <td><?= $row->jumlah?></td>
                                  <td>Rp <?= number_format($row->upah_cetak,2,",",".")?></td>
                                  <td>Rp <?= number_format($row->upah_design,2,",",".")?></td>
                                  <td>Rp <?= number_format($row->upah_finishing,2,",",".")?></td>
                                  <td>Rp <?= number_format($row->harga,2,",",".")?></td>
                                  <td><?= $row->keterangan?></td>
                                  <td><?= $row->status?></td>
                              </tr>
                              <?php }?>
                            </tbody>
                          </table>
                          <div class="form-group"></div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Total Harga</label>
                              <div class="col-sm-7">
                                  <input type="text" value="Rp <?= number_format($transaksi->total_harga,2,",",".")?>" class="form-control" id="total_harga" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Telah Dibayar</label>
                              <div class="col-sm-7">
                                <?php $sisa = $transaksi->total_harga-$transaksi->bayar;
                                      if($sisa>0){
                                        $dibayar="Rp ".number_format($transaksi->bayar,2,",",".")." (Sisa Rp ".number_format($sisa,2,",",".").")";
                                      }else{
                                        $dibayar="LUNAS";
                                      }?>
                                  <input type="text" name="bayar" class="form-control" readonly="readonly" value="<?= $dibayar ?>">
                              </div>
                          </div>
                          <form id="formUbah" action="<?= base_url('admin/transaksi_ubah/'.$transaksi->id)?>" method="post">
                          <?php if($sisa>0){?>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Bayar Sisa</label>
                              <div class="col-sm-7">
                                  <input form="formUbah" type="number" min="0" max="<?= $sisa?>" name="bayarlagi" class="form-control" value="0">
                              </div>
                          </div>
                          <?php } ?>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Keterangan</label>
                              <div class="col-sm-9">
                                  <textarea form="formUbah" rows="4" name="keterangan" class="form-control noMCE"><?= $transaksi->keterangan?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-7 col-sm-offset-3">
                                  <input form="formUbah" type="submit" name="Simpan" class="btn btn-primary">
                              </div>
                          </div>
                          </form>
                        </div>
                        </div>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->   
            </div><!-- /row -->