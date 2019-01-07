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
                    <h3>ID Transaksi : <?= $transaksi->id?></h3>
                    <div class="form-group"></div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tanggal Terima</label>
                            <label class="col-sm-8 control-label"><?= date('d M Y H:m:s',strtotime($transaksi->tanggal_terima))?></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Tanggal Jadi</label>
                            <label class="col-sm-8 control-label"><?= date('d M Y',strtotime($transaksi->tanggal_jadi))?></label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Kasir</label>
                            <label class="col-sm-8 control-label"><?= $transaksi->kasir ?></label>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Pelanggan</label>
                            <label class="col-sm-8 control-label"><?= $transaksi->nama.' ('.$transaksi->no_telp.')'?></label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12">
                        <h4><i class="fa fa-angle-right"></i> Data Pesanan</h4>
                        <div class="form-group"></div>

                        <table class="table table-bordered table-striped table-condensed table-hover">
                          <thead>
                          <tr>
                              <th width="5%">No</th>
                              <th>Jenis Cetakan</th>
                              <th>Jumlah</th>
                              <th>Harga</th>
                              <th>Keterangan</th>
                          </tr>
                          </thead>
                          <tbody>
                            <?php $i=1; foreach($pesanan->result() as $row){?>
                            <tr>
                                <td><?= $i++?></td>
                                <td><?= $row->kode_barang.' - '.$row->nama_cetak?></td>
                                <td><?= $row->jumlah?></td>
                                <td>Rp <?= number_format($row->harga,2,",",".")?></td>
                                <td><?= $row->keterangan?></td>
                            </tr>
                            <?php }?>
                          </tbody>
                        </table>
                        <div class="form-group"></div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Total Harga</label>
                            <label class="col-sm-8 control-label">Rp <?= number_format($transaksi->total_harga,2,",",".")?></label>
                        </div>
                        <?php $sisa = $transaksi->total_harga-$transaksi->bayar;
                        if($sisa>0){
                          $dibayar="Rp ".number_format($transaksi->bayar,2,",",".")." (Sisa Rp ".number_format($sisa,2,",",".").")";
                        }else{
                          $dibayar="LUNAS";
                        }?>
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Telah Dibayar</label>
                            <label class="col-sm-8 control-label"><?= $dibayar ?></label>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Keterangan</label>
                            <label class="col-sm-8 control-label"><?= $transaksi->keterangan?></label>
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