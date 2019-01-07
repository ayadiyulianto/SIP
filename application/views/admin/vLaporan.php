              
              <div class="row mt">
                  <div class="col-md-12 col-lg-12">
                      <div class="form-panel">

                          <h4><i class="fa fa-angle-right"></i> Laporan Keuntungan Bulan : <b><?= $active ?></b> &nbsp; <a href="<?= base_url('admin/laporan_cetak/'.$tahun.'/'.$bulan) ?>" target="_blanks" class="btn btn-default"><i class="fa fa-print"></i> Cetak Laporan</a></h4>
                          <hr>

                          <form class="form-inline" action="<?= base_url('admin/laporan')?>" method="post">
                            <div class="form-group">
                                <label class="sr-only" for="tahun">Tahun</label>
                                <input type="number" name="tahun" value="<?= $tahun ?>" class="form-control" id="tahun" placeholder="Tahun">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="bulan">Bulan</label>
                                <input type="number" name="bulan" value="<?= $bulan ?>" class="form-control" id="bulan" placeholder="Bulan (Misal 1)">
                            </div>
                            <button type="submit" class="btn btn-primary">Lihat Laporan</button>
                          </form>

                          <form class="form-horizontal style-form">
                          <div class="form-group"></div>

                          <h4>Rincian Pesanan</h4>
                          <div class="form-group"></div>
                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>ID Trx</th>
                                  <th>Jenis Cetakan</th>
                                  <th>Jumlah</th>
                                  <th>Untung Cetak</th>
                                  <th>Upah Design</th>
                                  <th>Upah Finishing</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($pesanan->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->id_transaksi?></td>
                                  <td><?= $row->kode_barang.' - '.$row->nama_cetak?></td>
                                  <td><?= $row->jumlah?></td>
                                  <td><?= $row->untung_cetak?></td>
                                  <td><?= $row->upah_design?></td>
                                  <td><?= $row->upah_finishing?></td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>

                          <h4>Total Keuntungan</h4>
                          <div class="form-group"></div>
                          <div class="row">
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Transaksi</label>
                                  <label class="col-sm-8 control-label"><?= $laporan->total_transaksi ?></label>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Pesanan</label>
                                  <label class="col-sm-8 control-label"><?= $laporan->total_pesanan ?></label>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Telah Dibayar</label>
                                  <label class="col-sm-8 control-label">Rp <?= number_format($laporan->total_telah_bayar,2,",",".")?></label>
                              </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Untung Upah Cetak</label>
                                  <label class="col-sm-8 control-label">Rp <?= number_format($laporan->total_untung_cetak,2,",",".")?></label>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Upah Design</label>
                                  <label class="col-sm-8 control-label">Rp <?= number_format($laporan->total_upah_design,2,",",".")?></label>
                              </div>
                              <div class="form-group">
                                  <label class="col-sm-4 control-label">Total Upah Finishing</label>
                                  <label class="col-sm-8 control-label">Rp <?= number_format($laporan->total_upah_finishing,2,",",".")?></label>
                              </div>
                            </div>
                          </div>
                          </form>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->