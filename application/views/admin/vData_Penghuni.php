              
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
                          <h4><i class="fa fa-angle-right"></i> Data Penghuni Asrama</h4>
                          <hr>
                          <a class="btn btn-sm btn-info" href="<?= base_url('admin/tambah_penghuni')?>">   <i class="fa fa-plus"> Tambah Penghuni</i></a><br><br>
                          <table class="myTable table table-bordered table-striped table-condensed table-hover">
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Nama</th>
                                  <th>NPM</th>
                                  <th>Nomor Kamar</th>
                                  <th>Tanggal Masuk</th>
                                  <th>Semester</th>
                                  <th>Status Tinggal</th>
                                  <th width="15%">
                                    <a class="btn btn-sm btn-warning" href="<?= base_url('adminprocess/nonaktifkan_semua')?>" onclick="return confirm('Yakin ingin menonaktifkan semua?');"><i class="fa fa-recycle"> Non Aktifkan Semua</i></a>
                                  </th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($penghuni->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->nama_lengkap?></td>
                                  <td><?= $row->npm?></td>
                                  <td><?= $row->id_kamar?></td>
                                  <td><?= date('d-m-Y',strtotime($row->tgl_masuk))?></td>
                                  <td><?= $row->semester?></td>
                                  <td><?= $row->keterangan?></td>
                                  <td>
                                    <?php if($row->keterangan=='aktif'){?>
                                      <a class="btn btn-sm btn-warning" onclick="return confirm('Yakin ingin menonaktifkan?');" href="<?= base_url('adminprocess/nonaktifkan_penghuni/'.$row->id_penghuni)?>"><i class="fa fa-pencil "> Nonaktifkan</i></a>
                                    <?php }else{ ?>
                                      <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');" href="<?= base_url('adminprocess/hapus_penghuni/'.$row->id_penghuni)?>"><i class="fa fa-trash-o "> Hapus</i></a>
                                    <?php } ?>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->