				<div class="row">
					<div class="col-lg-9 main-chart">

						<div class="row mt text-center">
							<h2>Selamat Datang di <?= web_fullname?></h2>
						</div>
						<div class="row mt">
							<div class="col-sm-2 col-sm-offset-3 box0">
	                  			<div class="box1">
						  			<span class="li_tag"></span>
						  			<h3><?= $transaksibaru ?></h3>
	                			</div>
				  				<p>TRANSAKSI BARU</p>
	            </div>
              <div class="col-sm-2 box0">
                          <div class="box1">
                    <span class="li_data"></span>
                    <h3><?= $pesananbaru ?></h3>
                        </div>
                  <p>PESANAN BARU</p>
              </div>
              <div class="col-sm-2 box0">
                          <div class="box1">
                    <span class="li_mail"></span>
                    <h3><?= $emailbaru ?></h3>
                        </div>
                  <p>EMAIL BARU</p>
              </div>
	          </div>
            	<div class="row mtbox">
                <div class="col-sm-10 col-sm-offset-1">
                  <!--CUSTOM CHART START -->
                  <div class="border-head">
                      <h3>Penjualan Bulan Ini</h3>
                  </div>
                </div>
						  </div><!-- /row -->
					</div>

					<div class="col-lg-3 ds">
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

						<h3>AKTIVITAS TERKINI</h3>
                                        
            <?php foreach($log->result() as $row){ ?>
            <div class="desc">
            	<div class="thumb">
            		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
            	</div>
            	<div class="details">
            		<p><muted><?= $row->datetime ?></muted><br/>
            		   <font color="blue"><?= $row->username ?></font> <?= $row->activity ?>
            		</p>
            	</div>
            </div>
            <?php }?>
            <br>
              
          </div><!-- /col-lg-3 -->
				</div><!-- /row -->