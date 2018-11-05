<?php
  $username=$this->session->userdata('username');
  $smt_aktif="Ganjil 2018/2019";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, mahasiswa, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistem Informasi Asrama</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/img/unib.png" />
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/bootstrap.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/font-awesome/css/font-awesome.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/style.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/style-responsive.css')?>" />
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/js/fancybox/jquery.fancybox.css')?>" /> 
    <!-- Dashboard -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/css/zabuto_calendar.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/lineicons/style.css')?>"/>
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/js/datatables/dataTables.bootstrap.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/js/datatables/responsive.dataTables.min.css')?>"/>
    <!-- Form element-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/js/bootstrap-datepicker/bootstrap-datepicker.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/js/bootstrap-fileupload/bootstrap-fileupload.css')?>">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <section id="container" >
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
                <div class="sidebar-toggle-box">
                    <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                </div>
              <!--logo start-->
              <a href="<?= base_url('mahasiswa')?>" class="logo"><b>SIRAMA</b></a>
              <!--logo end-->
              
              <!-- <div class="nav notify-row" id="top_menu">
                  <ul class="nav top-menu">
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                              <i class="fa fa-tasks"></i>
                              <span class="badge bg-theme">4</span>
                          </a>
                          <ul class="dropdown-menu extended tasks-bar">
                              <div class="notify-arrow notify-arrow-green"></div>
                              <li>
                                  <p class="green">You have 4 pending tasks</p>
                              </li>
                              <li>
                                  <a href="index.html#">
                                      <div class="task-info">
                                          <div class="desc">DashGum Admin Panel</div>
                                          <div class="percent">40%</div>
                                      </div>
                                      <div class="progress progress-striped">
                                          <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                              <span class="sr-only">40% Complete (success)</span>
                                          </div>
                                      </div>
                                  </a>
                              </li>
                              <li class="external">
                                  <a href="#">See All Tasks</a>
                              </li>
                          </ul>
                      </li>

                      <li id="header_inbox_bar" class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                              <i class="fa fa-envelope-o"></i>
                              <span class="badge bg-theme">5</span>
                          </a>
                          <ul class="dropdown-menu extended inbox">
                              <div class="notify-arrow notify-arrow-green"></div>
                              <li>
                                  <p class="green">You have 5 new messages</p>
                              </li>
                              <li>
                                  <a href="index.html#">
                                      <span class="photo"><img alt="avatar" src="<?= base_url('assets/backend/img/ui-sam.jpg')?>"></span>
                                      <span class="subject">
                                      <span class="from">Zac Snider</span>
                                      <span class="time">Just now</span>
                                      </span>
                                      <span class="message">
                                          Hi mate, how is everything?
                                      </span>
                                  </a>
                              </li>
                              <li>
                                  <a href="index.html#">See all messages</a>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div> -->
              
              <div class="top-menu">
                <ul class="nav pull-right top-menu">
                      <li><a target="_blanks" class="logout" href="<?= base_url()?>"><i class="fa fa-globe"></i> Lihat Web</a></li>
                </ul>
              </div>
          </header>
        <!--header end-->
        
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                
                    <p class="centered"><img src="<?= base_url('assets/img/unib.png')?>" class="img-circle" width="60"></p>
                    <h5 class="centered"><?= $smt_aktif ?><br><br><?= $username?></h5>
                    <li class="mt">
                        <a href="<?= base_url('mahasiswa')?>">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('mahasiswa/Biodata')?>">
                            <i class="fa fa-user"></i>
                            <span>Biodata</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('mahasiswa/Kamar')?>">
                            <i class="fa fa-building"></i>
                            <span>Kamar</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('mahasiswa/Pembayaran')?>">
                            <i class="fa fa-money"></i>
                            <span>Pembayaran</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-list"></i>
                            <span>Informasi Asrama</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?= base_url('mahasiswa/Umum')?>">Tentang Asrama</a></li>
                            <li><a href="<?= base_url('mahasiswa/Info_Daftar')?>">Info Pendaftaran</a></li>
                            <li><a href="<?= base_url('mahasiswa/Fasilitas')?>">Fasilitas</a></li>
                            <li><a href="<?= base_url('mahasiswa/Lantai')?>">Lantai & Harga</a></li>
                            <li><a href="<?= base_url('mahasiswa/Pengurus')?>">Pengurus</a></li>
                        </ul>
                    </li>
                    <li class="mt">
                        <a href="<?= base_url('mahasiswa/Ubah_Password')?>">
                            <i class="fa fa-key"></i>
                            <span>Ubah Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/logout')?>">
                            <i class="fa fa-sign-out"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end--> 
            </div>
        </aside>
        <!--sidebar end-->
        
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
              <?php echo $contents;?>
            </section>
        </section>

        <!--main content end-->
        <!--footer start-->
        <footer class="site">
            <div class="text-center">
                2018. Designed by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-indigo">manasuka.inc</a>. Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-indigo">alvarez.is</a>
            </div>
            <br>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url('assets/backend/js/jquery.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/jquery-ui-1.9.2.custom.min.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/bootstrap.min.js')?>"></script>   
    <script src="<?= base_url('assets/backend/js/jquery.dcjqaccordion.2.7.js')?>" class="include"></script>
    <script src="<?= base_url('assets/backend/js/jquery.scrollTo.min.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/jquery.nicescroll.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/common-scripts.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/fancybox/jquery.fancybox.js')?>"></script> 
    <script type="text/javascript">
      $(function() {
          jQuery(".fancybox").fancybox();
      });
    </script>

    <!-- Dashboard -->
    <script src="<?= base_url('assets/backend/js/chart-master/Chart.js')?>"></script>   
    <script src="<?= base_url('assets/backend/js/zabuto_calendar.js')?>"></script>  
    <script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
            $("#my-calendar").zabuto_calendar({
                action_nav: function () {
                    return myNavFunction(this.id);
                }
            });
        });
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>

    <!-- Datatables -->
    <script src="<?= base_url('assets/backend/js/datatables/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/datatables/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/datatables/dataTables.responsive.min.js')?>"></script>   
    <script type="application/javascript">
        $(document).ready( function () {
            $('.myTable').DataTable({
                responsive: true
            });
        } );
    </script>
    <!-- Form element -->
    <script src="<?= base_url('assets/backend/js/bootstrap-switch.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/jquery.tagsinput.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/bootstrap-inputmask/bootstrap-inputmask.min.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/form-component.js')?>"></script>  
    <script src="<?= base_url('assets/backend/js/bootstrap-fileupload/bootstrap-fileupload.js')?>"></script> 
    <script src="<?= base_url('assets/backend/tinymce/tinymce.min.js')?>"></script>
    <script type="application/javascript">
        tinymce.init({
          selector: '#textarea',
          plugins : 'advlist autolink link lists charmap print preview'
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
          $("#datepicker").datepicker();
        });
    </script>

  </body>
</html>
