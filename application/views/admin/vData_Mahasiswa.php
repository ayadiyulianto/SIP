              
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
                            <h4><i class="fa fa-angle-right"></i> Data Mahasiswa Terdaftar di Asrama</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th width="15%"><a class="btn btn-sm btn-info" href="<?= base_url('admin/tambah_mahasiswa')?>"><i class="fa fa-plus"> Tambah Mahasiswa</i></a></th>
                                  <th>Nama Lengkap</th>
                                  <th>Nama Panggilan</th>
                                  <th>NPM</th>
                                  <th>Email</th>
                                  <th>Nomor HP</th>
                                  <th>Tempat Lahir</th>
                                  <th>Tanggal Lahir</th>
                                  <th>Alamat Asal</th>
                                  <th>Agama</th>
                                  <th>Nomor KTP</th>
                                  <th>Program Studi</th>
                                  <th>Fakultas</th>
                                  <th>Hobi</th>
                                  <th>Organisasi</th>
                                  <th>Riwayat Penyakit</th>
                                  <th>Nama Ayah</th>
                                  <th>Nama Ibu</th>
                                  <th>Alamat Orang Tua</th>
                                  <th>No. HP Orang Tua</th>
                                  <th>Pekerjaan Orang Tua</th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($mahasiswa->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td>
                                      <a class="btn btn-sm btn-primary" href="<?= base_url('admin/edit_mahasiswa/'.$row->npm)?>"><i class="fa fa-pencil "> Edit</i></a>
                                      <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');" href="<?= base_url('adminprocess/hapus_mahasiswa/'.$row->npm)?>"><i class="fa fa-trash-o "> Hapus</i></a>
                                  </td>
                                  <td><?= $row->nama_lengkap?></td>
                                  <td><?= $row->nama_panggilan?></td>
                                  <td><?= $row->npm?></td>
                                  <td><?= $row->email?></td>
                                  <td><?= $row->no_hp?></td>
                                  <td><?= $row->tempat_lahir?></td>
                                  <td><?= date('d-m-Y',strtotime($row->tgl_lahir))?></td>
                                  <td><?= $row->alamat_asal?></td>
                                  <td><?= $row->agama?></td>
                                  <td><?= $row->no_ktp?></td>
                                  <td><?= $row->program_studi?></td>
                                  <td><?= $row->fakultas?></td>
                                  <td><?= $row->hoby?></td>
                                  <td><?= $row->organisasi?></td>
                                  <td><?= $row->riwayat_penyakit?></td>
                                  <td><?= $row->nama_ayah?></td>
                                  <td><?= $row->nama_ibu?></td>
                                  <td><?= $row->alamat_ortu?></td>
                                  <td><?= $row->no_hp_ortu?></td>
                                  <td><?= $row->pekerjaan_ortu?></td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->