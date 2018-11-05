
              <div class="row mt">
                  <div class="col-lg-12">    
                    <div class="content-panel col-md-12">
                      	<?php
                        $info=$this->session->flashdata('info');
                        $error=$this->session->flashdata('error');
                        if(!empty($info)) { ?>
                           <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                        <?php } elseif(!empty($error)) { ?>
                            <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                        <?php } ?>
                        <h4><i class="fa fa-angle-right"></i> Kamar Disewakan</h4>
                        <hr>
                        <div class="panel-heading">
                          <ul class="nav nav-tabs nav-justified">
                            <?php $i=1; foreach($lantai->result() as $row){?>
                              <li class="<?php if($i==1) echo 'active';?>">
                                <a data-toggle="tab" href="#lantai<?= $row->id_lantai?>"><b>Lantai <?= $row->id_lantai?></b></a>
                              </li>
                            <?php $i++; }?>
                          </ul>
                        </div><!-- --/panel-heading ---->
                        
                        <div class="panel-body">
                          <div class="tab-content">

                            <?php $i=1; foreach($lantai->result() as $row){?>
                              <div id="lantai<?= $row->id_lantai?>" class="tab-pane <?php if($i==1) echo 'active';?>">
          						<h3>Lantai <b><?= $row->id_lantai ?></b></h3>
                              	<div class="row">
                              		<div class="col-lg-4">
                              			<?php foreach(${"lantai".$row->id_lantai}->result() as ${"floor".$row->id_lantai}){
								        	$jumlah_penghuni = ${"floor".$row->id_lantai}->jumlah_penghuni; ?>
			                                <span style="margin: 5px" <?php if($jumlah_penghuni == 0){ ?> class="btn btn-info"<?php }
			                                      elseif($jumlah_penghuni == $maks_penghuni_per_kamar){ ?> class="btn btn-danger"<?php }
			                                      else{ ?> class="btn btn-warning"<?php }?>>
			                                    <label>Kamar <b><?= ${"floor".$row->id_lantai}->id_kamar?></b></label><br>
			                                    <label><b><?= ${"floor".$row->id_lantai}->jumlah_penghuni?></b> penghuni</label>
			                                </span>
								        <?php }?>
                              		</div>
                              		<div class="col-lg-8"> 
		                                <table class="myTable table table-bordered table-striped table-condensed table-hover">
		                                    <thead>
		                                    <tr>
							                  <th>Nomor Kamar</th>
							                  <th>Jumlah Penghuni</th>
							                  <th>Teman Sekamar ( Nama / Jurusan / Asal )</th>
		                                    </tr>
		                                    </thead>
		                                    <tbody>
								              <?php foreach(${"lantai".$row->id_lantai}->result() as ${"lantai".$row->id_lantai}){?>
								                <tr>
								                  <td><h4><?= ${"lantai".$row->id_lantai}->id_kamar; ?></h4></td>
								                  <td>
										        	<?php $jumlah_penghuni = ${"lantai".$row->id_lantai}->jumlah_penghuni; ?>
					                                <span style="margin: 5px" <?php if($jumlah_penghuni == 0){ ?> class="badge bg-info"<?php }
					                                      elseif($jumlah_penghuni == 4){ ?> class="badge bg-important"<?php }
					                                      else{ ?> class="badge bg-warning"<?php }?>>
					                                  	<?= $jumlah_penghuni?>
					                                </span>
								                  </td>
								                  <td>
								                    <?php
								                      $cek = $this->mDatabase->get_penghuni_by_kamar(${"lantai".$row->id_lantai}->id_kamar);
								                      foreach($cek->result() as $key){
								                        echo '<li>'.$key->nama_lengkap.' / '.$key->program_studi.' / '.$key->alamat_asal.'</li>';
								                      }
								                    ?>
								                  </td>
								                </tr>
								              <?php }?>
		                                    </tbody>
		                                </table>
		                            </div>
		                        </div>

                              </div><!-- --/tab-pane ---->
                            <?php $i++; }?>

                          </div><!-- /tab-content -->
                        </div><!-- --/panel-body ---->
                        
                      </div><!-- /col-lg-12 -->
                  </div><!-- --/row ---->
              </div>