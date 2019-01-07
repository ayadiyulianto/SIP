<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title><?= web_fullname?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url()?>/assets/backend/css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/backend/js/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet"/>
    <!--external css-->
    <link href="<?= base_url()?>/assets/backend/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?= base_url()?>/assets/backend/css/style.css" rel="stylesheet">
    <link href="<?= base_url()?>/assets/backend/css/style-responsive.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

            <form class="form-signin" method="post">
                <h2 class="form-signin-heading">Pendaftaran Anggota <?= web_nickname?></h2>
                <div class="login-wrap">
                    <label style="color: blue">
                      <?php
                        $info=$this->session->flashdata('info');
                        if(!empty($info)) { echo $info;}
                      ?>
                    </label>
                    <label style="color: red">
                      <?php
                        $error=$this->session->flashdata('error');
                        if(!empty($error)) { echo $error;}
                        echo validation_errors();
                      ?>
                    </label>
                    <label class="control-label col-lg-12"><b>Silahkan isi biodata berikut :</b></label>
                    <br><br>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Nama Lengkap</label>
                      <div class="col-lg-9">
                          <input type="text" placeholder="..." name="nama_lengkap" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Nama Panggilan</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="nama_panggilan" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Alamat Asal</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="alamat_asal" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Tempat Lahir</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="tempat_lahir" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Tanggal Lahir</label>
                      <div class="col-lg-9">
                          <input type="text" placeholder="..." name="tgl_lahir" class="form-control" required="required" id='datepicker' data-date-format="dd-mm-yyyy">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Agama</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="agama" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Nomor KTP</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="no_ktp" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Program Studi</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="program_studi" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Fakultas</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="fakultas" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Nomor HP</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="no_hp" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Email</label>
                      <div class="col-lg-9  ">
                          <input type="email" placeholder="..." name="email" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Hobi</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="hoby" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Organisasi diikuti</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="organisasi" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Riwayat Penyakit</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="riwayat_penyakit" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Nama Ayah</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="nama_ayah" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Nama Ibu</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="nama_ibu" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Alamat Orang Tua</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="alamat_ortu" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Nomor HP Orang Tua</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="no_hp_ortu" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Pekerjaan Orang Tua</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="pekerjaan_ortu" class="form-control" required="required">
                      </div>
                    </div>

                    <label class="col-lg-12 control-label"><b>Informasi Akun</b></label>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">NPM</label>
                      <div class="col-lg-9  ">
                          <input type="text" placeholder="..." name="npm" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Password</label>
                      <div class="col-lg-9  ">
                          <input type="password" placeholder="..." name="password" id="password" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <label class="col-lg-3 control-label">Ulangi Password</label>
                      <div class="col-lg-9  ">
                          <input type="password" placeholder="..." name="ulangipassword" id="ulangipassword" onkeyup="check();" class="form-control" required="required">
                      </div>
                      <div class="col-lg-3"></div>
                      <label class="col-lg-9 control-label" id="message"></label>
                    </div>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-plus"></i> DAFTAR</button>
                    <hr>
                    <div class="registration">
                        Sudah punya akun? <a class="" href="<?= base_url('auth')?>">LOGIN</a><br><br>
                        <a class="" href="<?= base_url()?>"><u>Kembali ke Beranda</u></a>
                    </div>
                </div>

              </form>
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?= base_url()?>/assets/backend/js/jquery.js"></script>
    <script src="<?= base_url()?>/assets/backend/js/bootstrap.min.js"></script>
    <script src="<?= base_url()?>/assets/backend/js/bootstrap-datepicker/bootstrap-datepicker.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?= base_url()?>/assets/backend/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("<?= base_url()?>/assets/backend/img/login-bg.jpg", {speed: 500});
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
          $("#datepicker").datepicker();
        });

        var check = function() {
          if (document.getElementById('password').value ==
            document.getElementById('ulangipassword').value) {
            document.getElementById('message').style.color = 'blue';
            document.getElementById('message').innerHTML = 'Sesuai';
          } else {
            document.getElementById('message').style.color = 'red';
            document.getElementById('message').innerHTML = 'Tidak sesuai';
          }
        }
    </script>

  </body>
</html>
