              
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php } ?>
                          <h4><i class="fa fa-angle-right"></i> Pesan </h4>
                          &nbsp; <a class="btn btn-sm btn-primary" href="<?= base_url('admin/email_baca')?>"><i class="fa fa-check "></i> Tandai semua segagai telah dibaca</a>
                          <table class="myTable table table-striped table-advance table-hover">
                            <hr>
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Email</th>
                                  <th>Tanggal</th>
                                  <th>Pesan</th>
                                  <th></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($email->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->nama?></td>
                                  <td><?= $row->email?></td>
                                  <td><?= $row->tanggal?></td>
                                  <td><?= $row->pesan?></td>
                                  <td>
                                      <a class="btn btn-primary btn-sm" href="<?= base_url('admin/email_lihat/'.$row->id)?>"><i class="fa fa-check "></i></a>
                                      <a class="btn btn-danger btn-sm" onclick="confirm('Yakin ingin menghapus?');" href="<?= base_url('admin/email_hapus/'.$row->id)?>"><i class="fa fa-trash-o "></i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->