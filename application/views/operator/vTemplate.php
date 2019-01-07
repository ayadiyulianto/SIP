<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= web_fullname?></title>

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
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/js/bootstrap-select/bootstrap-select.min.css')?>"/>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/backend/js/bootstrap-fileupload/bootstrap-fileupload.css')?>">
    <script src="<?= base_url('assets/backend/js/jquery.js')?>"></script>

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
              <a href="<?= base_url('operator')?>" class="logo"><b><?= web_appname?></b></a>
              <!--logo end-->
              
              <div class="top-menu">
                <ul class="nav pull-right top-menu">
                      <li><a target="_blanks" class="logout" href="<?= base_url()?>"><i class="fa fa-globe"></i> LIHAT WEB</a></li>
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
                
                    <p class="centered"><img src="<?= base_url('assets/img/'.$this->session->userdata('avatar'))?>" class="img-circle" width="60"></p>
                    <h5 class="centered"><?= $this->session->userdata('nama') ?></h5>
                    <li class="mt">
                        <a href="<?= base_url('operator')?>">
                            <i class="fa fa-home"></i>
                            <span>DASHBOARD</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-database"></i>
                            <span>MASTER</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?= base_url('operator/offsetprinting')?>">OFFSET PRINTING</a></li>
                            <li><a href="<?= base_url('operator/digitalprinting')?>">DIGITAL PRINTING</a></li>
                            <li><a href="<?= base_url('operator/pelanggan')?>">PELANGGAN</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a href="javascript:;" >
                            <i class="fa fa-money"></i>
                            <span>TRANSAKSI</span>
                        </a>
                        <ul class="sub">
                            <li><a href="<?= base_url('operator/transaksi_tambah')?>">TAMBAH BARU</a></li>
                            <li><a href="<?= base_url('operator/transaksi')?>">DATA TRANSAKSI</a></li>
                            <li><a href="<?= base_url('operator/pesanan')?>">DATA PESANAN</a></li>
                        </ul>
                    </li>
                    <li class="mt">
                    </li>
                    <li>
                        <a href="<?= base_url('operator/password_ubah')?>">
                            <i class="fa fa-key"></i>
                            <span>UBAH PASSWORD</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?= base_url('auth/logout')?>" style="background-color: #d9534f">
                            <i class="fa fa-sign-out"></i>
                            <span>LOGOUT</span>
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
                &copy; SIKABER 2018. Powered by <a href="https://gridgum.com/themes/dashgum-bootstrap-dashboard/" title="DashGum" target="_blank" class="w3-hover-text-indigo">alvarez.is</a>
            </div>
            <br>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
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
    <script src="<?= base_url('assets/backend/js/bootstrap-select/bootstrap-select.min.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/bootstrap-inputmask/bootstrap-inputmask.min.js')?>"></script>
    <script src="<?= base_url('assets/backend/js/advanced-form-components.js')?>"></script>  
    <script src="<?= base_url('assets/backend/js/form-component.js')?>"></script>  
    <script src="<?= base_url('assets/backend/js/bootstrap-fileupload/bootstrap-fileupload.js')?>"></script> 
    <script src="<?= base_url('assets/backend/tinymce/tinymce.min.js')?>"></script>
    <script type="application/javascript">
        tinymce.init({
          selector : "textarea:not(.noMCE)",
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
