
            
            <!-- BASIC FORM ELELEMNTS -->
            <div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <h3><i class="fa fa-angle-right"></i> <?= $title?></h3>
                      <hr>
                      <?php
                        $info=$this->session->flashdata('info');
                        $error=$this->session->flashdata('error');
                        if(!empty($info)) { ?>
                           <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                        <?php } elseif(!empty($error)) { ?>
                            <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                        <?php } ?>
                      <form id="formTransaksi" action="<?= base_url('admin/transaksi_simpan')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                        <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Tanggal Terima</label>
                              <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?= date('d M Y') ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Tanggal Jadi</label>
                              <div class="col-sm-7">
                                  <input form="formTransaksi" type="text" id="tanggal_jadi" name="tanggal_jadi" class="form-control form-control-inline input-medium default-date-picker" required="required">
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Kasir</label>
                              <div class="col-sm-7">
                                  <input type="text" class="form-control" value="<?= $this->session->userdata('nama') ?>" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Pelanggan</label>
                              <div class="col-sm-7">
                                  <select id="pelanggan" data-live-search="true" name="id_pelanggan" class="form-control selectpicker show-tick" title="Pilih..." data-size="5">
                                    <?php foreach($pelanggan->result() as $row){ ?>
                                    <option value="<?= $row->id?>"><?= $row->nama.' - '.$row->tipe?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                              <div class="col-sm-2">
                                <a class="btn btn-sm btn-info" href="<?= base_url('admin/pelanggan_tambah')?>" data-toggle="tooltip" data-placement="bottom" title="Tambah Pelanggan Baru"><i class="fa fa-plus"></i></a>
                              </div>
                          </div>
                          <input id="jenis_harga" type="hidden" name="jenis_harga">
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-12">
                          <h4><i class="fa fa-angle-right"></i> Data Pesanan</h4>
                          <div class="form-group"></div>
                          <div class="row">
                          <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Jenis Cetakan</label>
                                <div class="col-sm-7">
                                    <select id="kode_barang" data-live-search="true" name="kode_barang" class="form-control selectpicker show-tick" title="Pilih..." data-size="5" disabled="disabled">
                                      <?php foreach($printing->result() as $row){ ?>
                                      <option value="<?= $row->kode?>"><?= $row->kode.' - '.$row->nama_cetak?></option>
                                      <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div id="divdetailpesanan" style="display: none;">
                              <div class="form-group">
                                  <label class="col-sm-3 control-label">Harga</label>
                                  <div class="col-sm-7">
                                      <input id="harga" type="number" min="0" name="harga" class="form-control" required="required">
                                  </div>
                              </div>
                              <div id="divjumlah" class="form-group" style="display: none;">
                                  <label class="col-sm-3 control-label">Jumlah(buah)</label>
                                  <div class="col-sm-7">
                                      <input id="banyak" type="number" min="0" name="banyak" class="form-control">
                                  </div>
                              </div>
                              <div id="divukuran" class="form-group" style="display: none;">
                                  <label class="col-sm-3 control-label">Ukuran(meter)</label>
                                  <div class="col-sm-7">
                                    <div class="col-sm-6">
                                      <input id="panjang" type="number" min="0" step="0.01" max="10" name="panjang" class="form-control" placeholder="Panjang">
                                    </div>
                                    <div class="col-sm-6">
                                      <input id="lebar" type="number" min="0" step="0.01" max="10" name="lebar" class="form-control" placeholder="Lebar">
                                    </div>
                                  </div>
                              </div>
                              <input id="jumlah" type="hidden" name="jumlah">
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Upah Cetak</label>
                                <div class="col-sm-7">
                                    <input type="number" min="0" id="upah_cetak" name="upah_cetak" class="form-control" readonly="readonly" value="0">
                                </div>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Upah Desain</label>
                                <div class="col-sm-7">
                                    <input id="upah_design" type="number" min="0" name="upah_design" class="form-control" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Upah Finishing</label>
                                <div class="col-sm-7">
                                    <input id="upah_finishing" type="number" min="0" name="upah_finishing" class="form-control" value="0">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Keterangan</label>
                                <div class="col-sm-7">
                                    <textarea id="keterangan" rows="4" name="keterangan" class="form-control noMCE"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-sm-offset-3">
                                    <button id="formPesananSubmit" type="button" class="btn btn-primary">Tambah Pesanan</button>
                                </div>
                            </div>
                          </div>
                          </div>

                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                            <thead>
                            <tr>
                                <th width="5%">No</th>
                                <th width="10%"></th>
                                <th>Jenis Cetakan</th>
                                <th>Jumlah</th>
                                <th>Cetak</th>
                                <th>Design</th>
                                <th>Finishing</th>
                                <th>Total Harga</th>
                                <th>Keterangan</th>
                            </tr>
                            </thead>
                            <tbody id="table_pesanan">
                            </tbody>
                          </table>

                          <div class="form-group"></div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Keterangan</label>
                              <div class="col-sm-7">
                                  <textarea form="formTransaksi" rows="4" name="keterangan" class="form-control noMCE"></textarea>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Total Harga</label>
                              <div class="col-sm-7">
                                  <input form="formTransaksi" type="text" class="form-control" id="total_harga" readonly="readonly">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">Bayar</label>
                              <div class="col-sm-7">
                                  <input form="formTransaksi" type="number" min="0" name="bayar" class="form-control" required="required" value="0">
                              </div>
                          </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-4">
                                <input type="submit" name="submit" class="btn btn-primary btn-lg" value="Simpan">
                                <a href="<?= base_url('admin/transaksi_batal') ?>" class="btn btn-danger btn-lg">Batal</a>
                            </div>
                        </div>
                      </form>
                  </div><!-- /content-panel -->
              </div><!-- /col-md-12 -->   
            </div><!-- /row -->

            <script type="text/javascript">
              $(function(){

                $(document).ready(function(){
                  loadTabelPesananTMP();
                  $('[data-toggle="tooltip"]').tooltip(); 
                });

                $('#pelanggan').change(function(event){
                  event.preventDefault();
                  var id=this.value;
                  $.ajax({
                    url:"<?php echo base_url('admin/transaksi_get_pelanggan')?>",
                    type:"post",
                    data:{id:id},
                    success: function(response) {
                      $("#jenis_harga").val('harga_'+response);
                    },
                    error: function() {
                       alert("Terjadi kesalahan.");
                    }
                  });
                  resetFormPesanan();
                  $('#kode_barang').prop("disabled", false);
                  $('#kode_barang').selectpicker('refresh');
                });

                $('#kode_barang').change(function(event){
                  event.preventDefault();
                  var kode=this.value;
                  var jenis_harga = $('#jenis_harga').val();
                  $.ajax({
                    url:"<?php echo base_url('admin/pesanan_get_barang')?>",
                    type:"post",
                    data:{kode:kode},
                    dataType:'json',
                    success: function(response) {
                      $("#harga").val(response[jenis_harga]);
                      $("#divdetailpesanan").show();
                      $("#upah_cetak").val(0);
                      $("#panjang").val(0);
                      $("#lebar").val(0);
                      $("#banyak").val('');
                      if(response['jenis_cetak']=="offset"){
                        $("#divukuran").hide();
                        $("#divjumlah").show();
                      }else{
                        $("#divjumlah").hide();
                        $("#divukuran").show();
                      }
                    },
                    error: function() {
                       alert("Terjadi kesalahan.");
                    }
                  });
                });

                $('#banyak').change(function(event){
                  event.preventDefault();
                  var banyak = this.value;
                  var harga = $('#harga').val();
                  $('#jumlah').val(banyak);
                  $('#upah_cetak').val(banyak*harga);
                });
                $('#panjang').change(function(event){
                  event.preventDefault();
                  var panjang = this.value;
                  var lebar = $('#lebar').val();
                  var harga = $('#harga').val();
                  $('#upah_cetak').val(panjang*lebar*harga);
                });
                $('#lebar').change(function(event){
                  event.preventDefault();
                  var panjang = $('#panjang').val();
                  var lebar = this.value;
                  var harga = $('#harga').val();
                  $('#jumlah').val(panjang+"x"+lebar);
                  $('#upah_cetak').val(panjang*lebar*harga);
                });

                $('#formPesananSubmit').click(function(event){
                  event.preventDefault();
                  if ($("#kode_barang").val().length > 0 && $("#jumlah").val().length > 0 ) {
                    var data={
                      kode_barang:$("#kode_barang").val(),
                      jumlah:$("#jumlah").val(),
                      upah_cetak:$("#upah_cetak").val(),
                      upah_design:$("#upah_design").val(),
                      upah_finishing:$("#upah_finishing").val(),
                      keterangan:$("#keterangan").val()
                    };
                    $.ajax({
                      url:"<?php echo base_url('admin/pesanan_tmp_tambah')?>",
                      type:"post",
                      data:data,
                      success: function() {
                        resetFormPesanan();
                        loadTabelPesananTMP();

                      },
                      error: function() {
                        alert("Terjadi kesalahan saat menambah pesanan.");
                      }
                    });
                  }else{
                    alert("Mohon lengkapi data pesanan!");
                  }
                  
                });

                function resetFormPesanan(){
                  $('#kode_barang').val('');
                  $('#divdetailpesanan').hide();
                  $('#upah_cetak').val(0);
                  $('#upah_design').val(0);
                  $('#upah_finishing').val(0);
                  $('#keterangan').val('');
                }
                
                function loadTabelPesananTMP(){
                  $.ajax({
                    url:"<?php echo base_url('admin/pesanan_tmp')?>",
                    dataType:"json",
                    success: function(response) {
                      $("#table_pesanan").html(response['data']);
                      $("#total_harga").val(response['total_harga']);
                    },
                    error: function() {
                       alert("Terjadi kesalahan saat mengambil data pesanan.");
                    }
                  });
                }

                $('#table_pesanan').on('click','.hapus',function(event) {
                  event.preventDefault();
                  var id = $(this).attr('id');
                  $.ajax({
                    url:"<?php echo base_url('admin/pesanan_tmp_hapus')?>"+"/"+id,
                    success: function() {
                      loadTabelPesananTMP();
                    },
                    error: function() {
                      alert("Terjadi kesalahan saat akan menghapus pesanan.");
                    }
                  });
                });

                $("#formTransaksi").submit(function(event) {
                  if($("#total_harga").val() == 0){
                    event.preventDefault();
                    alert("Belum ada barang yang dipesan");
                  }
                });

              });
            </script>