<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?= web_fullname?></title>
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/img/unib.png" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/bootstrap.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/style.css')?>"/>
    <style type="text/css">
      @media print {
         .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12 {
              float: left;
         }
         .col-sm-12 {width: 100%;}
         .col-sm-11 {width: 91.66666667%;}
         .col-sm-10 {width: 83.33333333%;}
         .col-sm-9  {width: 75%;}
         .col-sm-8  {width: 66.66666667%;}
         .col-sm-7  {width: 58.33333333%;}
         .col-sm-6  {width: 50%;}
         .col-sm-5  {width: 41.66666667%;}
         .col-sm-4  {width: 33.33333333%;}
         .col-sm-3  {width: 25%;}
         .col-sm-2  {width: 16.66666667%;}
         .col-sm-1  {width: 8.33333333%;}
      }
    </style>
  </head>
  <body>
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row">
              <div class="col-sm-12">
                  <div class="form-panel form-horizontal style-form">
                    <h3>Laporan Keuntungan Bulan : <b><?= $active ?></b></h3>
                    <div class="form-group"></div>
                    <h4>Rincian Pesanan</h4>
                    <table class="table table-bordered table-striped table-condensed table-hover">
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
                    <div class="form-group"></div>

                    <h4>Total Keuntungan</h4>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Total Transaksi</label>
                            <label class="col-sm-6 control-label"><?= $laporan->total_transaksi ?></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Total Pesanan</label>
                            <label class="col-sm-6 control-label"><?= $laporan->total_pesanan ?></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Total Telah Dibayar</label>
                            <label class="col-sm-6 control-label">Rp <?= number_format($laporan->total_telah_bayar,2,",",".")?></label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Total Untung Upah Cetak</label>
                            <label class="col-sm-6 control-label">Rp <?= number_format($laporan->total_untung_cetak,2,",",".")?></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Total Upah Design</label>
                            <label class="col-sm-6 control-label">Rp <?= number_format($laporan->total_upah_design,2,",",".")?></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-6 control-label">Total Upah Finishing</label>
                            <label class="col-sm-6 control-label">Rp <?= number_format($laporan->total_upah_finishing,2,",",".")?></label>
                        </div>
                      </div>
                    </div>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->   
            </div><!-- /row -->

            <script type="text/javascript">
              window.print();
            </script>

  </body>
</html>