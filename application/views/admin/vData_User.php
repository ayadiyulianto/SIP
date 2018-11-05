              
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
                            <h4><i class="fa fa-angle-right"></i> Data Pengguna Website</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>Username</th>
                                  <th>Level</th>
                                  <th>Password</th>
                                  <th width="15%"><a class="btn btn-sm btn-info" href="<?= base_url('admin/tambah_user')?>"><i class="fa fa-plus"> Tambah Pengguna</i></a></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($user->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->username?></td>
                                  <td><?= $row->level?></td>
                                  <td><?= $row->password?></td>
                                  <td>
                                      <a class="btn btn-sm btn-primary" href="<?= base_url('admin/edit_user/'.$row->username)?>"><i class="fa fa-pencil "> Edit</i></a>
                                      <a class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?');" href="<?= base_url('adminprocess/hapus_user/'.$row->username)?>"><i class="fa fa-trash-o "> Hapus</i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->