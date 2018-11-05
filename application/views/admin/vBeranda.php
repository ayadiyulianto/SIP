				<div class="row">
					<div class="col-lg-9 main-chart">

						<div class="row mt text-center">
							<h2>Selamat Datang di Sistem Informasi Asrama Putri Orchid Universitas Bengkulu</h2>
						</div>
						<div class="row mt">
							<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
	                  			<div class="box1">
						  			<span class="li_heart"></span>
						  			<h3><?= $penghuni_aktif ?></h3>
	                			</div>
				  				<p><?= $penghuni_aktif ?> Penghuni Aktif</p>
	                		</div>
							<div class="col-md-2 col-sm-2 box0">
	                  			<div class="box1">
						  			<span class="li_cloud"></span>
						  			<h3><?= $penghuni_baru ?></h3>
	                			</div>
				  				<p><?= $penghuni_baru ?> Penghuni Baru belum Melakukan Konfirmasi</p>
	                		</div>
	                		<div class="col-md-2 col-sm-2 box0">
	                			<div class="box1">
						  			<span class="li_stack"></span>
						  			<h3><?= $kamar_tersedia ?>/<?= $kamar_total ?></h3>
	                			</div>
						  			<p><?= $kamar_tersedia ?> kamar masih tersedia dari total <?= $kamar_total ?> kamar</p>
	                		</div>
	                		<div class="col-md-2 col-sm-2 box0">
	                			<div class="box1">
						  			<span class="li_data"></span>
						  			<h3><?= $pembayaran_lunas ?>/<?= $pembayaran_total ?></h3>
	                			</div>
						  			<p><?= $pembayaran_lunas ?> pembayaran LUNAS dari total <?= $pembayaran_total?> tagihan.</p>
	                  		</div>
	                  	</div>
	                  	<div class="row mtbox">
	                      <!--CUSTOM CHART START -->
	                      <div class="border-head">
	                          <h3>Penghuni Per Semester</h3>
	                      </div>
	                      <div class="custom-bar-chart">
	                          <ul class="y-axis">
	                              <li><span>10.000</span></li>
	                              <li><span>8.000</span></li>
	                              <li><span>6.000</span></li>
	                              <li><span>4.000</span></li>
	                              <li><span>2.000</span></li>
	                              <li><span>0</span></li>
	                          </ul>
	                          <div class="bar">
	                              <div class="title">JAN</div>
	                              <div class="value tooltips" data-original-title="8.500" data-toggle="tooltip" data-placement="top">85%</div>
	                          </div>
	                      </div>
	                      <!--custom chart end-->
						</div><!-- /row -->
					</div>

					<div class="col-lg-3 ds">
                    <!--COMPLETED ACTIONS DONUTS CHART-->
						<h3>PEMBERITAHUAN</h3>
                                        
                      <!-- First Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>2 Minutes Ago</muted><br/>
                      		   <a href="#">James Brown</a> subscribed to your newsletter.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Second Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>3 Hours Ago</muted><br/>
                      		   <a href="#">Diana Kennedy</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Third Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>7 Hours Ago</muted><br/>
                      		   <a href="#">Brandon Page</a> purchased a year subscription.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fourth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>11 Hours Ago</muted><br/>
                      		   <a href="#">Mark Twain</a> commented your post.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- Fifth Action -->
                      <div class="desc">
                      	<div class="thumb">
                      		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                      	</div>
                      	<div class="details">
                      		<p><muted>18 Hours Ago</muted><br/>
                      		   <a href="#">Daniel Pratt</a> purchased a wallet in your store.<br/>
                      		</p>
                      	</div>
                      </div>
                      <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->


				</div><!-- /row -->