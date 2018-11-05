<!DOCTYPE html>
<html>
<title>Sistem Informasi Asrama</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="Dashboard">
<meta name="keyword" content="Dashboard, Bootstrap, backend, Template, Theme, Responsive, Fluid, Retina">
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/img/<?= $umum->logo?>" />
<link rel="stylesheet" href="<?= base_url()?>assets/frontend/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Tutup Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-32"><b>Sistem Informasi<br><?= $umum->nama_asrama?></b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#sejarah" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sejarah</a> 
    <a href="#visimisi" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Visi dan Misi</a>
    <a href="#fasilitas" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Fasilitas</a>
    <a href="#harga" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Informasi Harga</a>
    <a href="#kamar" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kamar Tersedia</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kontak</a><br>
    <a href="<?= base_url('auth'); ?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Login/Daftar</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-indigo w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-indigo w3-margin-right" onclick="w3_open()">☰</a>
  <span>SIRAMA</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-right:0px">

  <!-- Automatic Slideshow Images -->
  <div class="w3-hide-large" style="margin-top:75px"></div>
  <div id="home">
    <?php foreach($slider->result() as $slider){?>
      <div class="mySlides w3-display-container w3-center">
        <img src="<?= base_url()?>assets/img/<?= $slider->gambar?>" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-indigo w3-padding-16 w3-white" style="opacity:0.75;width:100%">
          <h3><b><?= $slider->keterangan?></b></h3>
        </div>
      </div>
    <?php }?>
  </div>
  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-indigo" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-indigo w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Sejarah -->
  <div class="w3-container" id="sejarah" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Sejarah</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p class="w3-justify"><?= $umum->sejarah?></p>
  </div>

  <!-- Visi -->
  <div class="w3-container" id="visimisi" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Visi</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p class="w3-justify"><?= $umum->visi?></p>
  </div>

  <!-- Misi -->
  <div class="w3-container">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Misi</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <p class="w3-justify"><?= $umum->misi?></p>
  </div>

  <!-- Fasilitas -->
  <div class="w3-container" id="fasilitas" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Fasilitas</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <div class="w3-row-padding w3-center">
      <?php foreach($fasilitas->result() as $fasilitas){?>
        <div class="w3-col l4 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-indigo w3-padding"><?= $fasilitas->keterangan ?></div>
            <img src="<?= base_url()?>assets/img/<?= $fasilitas->gambar ?>" onclick="onClick(this)" alt="<?= $fasilitas->keterangan ?>" style="width:100%">
          </div>
        </div>
      <?php }?>
    </div>
  </div>

  <!-- Harga -->
  <div class="w3-container" id="harga" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Informasi Harga</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <div class="w3-row-padding w3-center">
      <?php $i=0; foreach($lantai->result() as $harga){?>
        <div class="w3-col l3 m6 w3-margin-bottom">
          <ul class="w3-ul w3-border w3-center w3-hover-shadow">
            <li class="<?php if($i%2==0){echo 'w3-dark-grey';}else{echo 'w3-grey';}?> w3-xlarge w3-padding-32">Lantai <b><?= $harga->id_lantai ?></b></li>
            <li class="w3-padding-16">
              <h2 class="w3-wide">Rp <?= $harga->harga ?></h2>
              <span class="w3-opacity">per 6 bulan</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
              <a href="#kamar" onclick="openCity(event,'<?= "Lantai".$harga->id_lantai ?>')" class="w3-button w3-indigo w3-padding-large">Daftar</a>
            </li>
          </ul>
        </div>
      <?php $i++; }?>
    </div>
  </div>

  <!-- kamar tersedia -->
  <div class="w3-container" id="kamar" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Kamar Tersedia</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <h4><i>Jumlah penghuni per kamar maksimal <?= $umum->penghuni_per_kamar?> orang</i></h4>
    <div class="w3-row-padding">
      <div class="w3-bar w3-grey">
        <?php $i=0; foreach($lantai->result() as $floor){?>
          <button class="w3-bar-item w3-button tablink <?php if($i==0){echo 'w3-indigo';}?>" onclick="openCity(event,'<?= "Lantai".$floor->id_lantai ?>')">Lantai <?= $floor->id_lantai ?></button>
        <?php $i++; }?>
      </div>

      <?php $i=0; foreach($lantai->result() as $lantai){?>
        <div id="<?= "Lantai".$lantai->id_lantai ?>" class="w3-container w3-border city" <?php if($i!=0){ ?>style="display:none" <?php }?> >
          <h2>Lantai <b><?= $lantai->id_lantai ?></b></h2>
          <table class="w3-table w3-striped w3-bordered w3-border w3-hoverable w3-white">
            <thead>
              <tr>
                  <th>Nomor Kamar</th>
                  <th>Jumlah Penghuni</th>
                  <th>Nama / Jurusan / Asal Teman Sekamar</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach(${"lantai".$lantai->id_lantai}->result() as ${"lantai".$lantai->id_lantai}){
                if(${"lantai".$lantai->id_lantai}->jumlah_penghuni < $umum->penghuni_per_kamar){ ?>
                <tr>
                  <td><?= ${"lantai".$lantai->id_lantai}->id_kamar; ?></td>
                  <td><?= ${"lantai".$lantai->id_lantai}->jumlah_penghuni; ?></td>
                  <td>
                    <?php
                      $cek = $this->mDatabase->get_penghuni_by_kamar(${"lantai".$lantai->id_lantai}->id_kamar);
                      foreach($cek->result() as $key){
                        echo '<li>'.$key->nama_lengkap.' / '.$key->program_studi.' / '.$key->alamat_asal.'</li>';
                      }
                    ?>
                  </td>
                </tr>
              <?php }}?>
            </tbody>
          </table>
          <br>
        </div>
      <?php $i++; }?>

    </div>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Kontak Kami</b></h1>
    <hr style="width:50px;border:5px solid grey" class="w3-round">
    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-col m4 w3-container">
        <!-- Add Google Maps -->
        <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
      </div>
      <div class="w3-col m8 w3-panel">
        <div class="w3-large w3-margin-bottom">
          <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Alamat: <?= $umum->alamat?><br>
          <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telepon: <?= $umum->telepon?><br>
        </div>
        <div class="w3-container w3-card-4 w3-padding-16 w3-white">
          <p>Silahkan tinggalkan pesan, kritik, atau saran:</p>
          <form action="<?= base_url()?>process/tambahPesan" method="post" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Nama" requiindigo name="name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" requiindigo name="email">
              </div>
            </div>
            <textarea class="w3-input w3-border" placeholder="Pesan" requiindigo name="message"></textarea>
            <button class="w3-button w3-indigo w3-right w3-section" type="submit">
              <i class="fa fa-paper-plane"></i> Kirim Pesan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-padding-32">
  <a href="#home" class="w3-button w3-indigo"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali ke Atas</a>
  <p>2018. Designed by <a href="" title="manasuka.inc" target="_blank" class="w3-hover-text-indigo">manasuka.inc</a>. Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-indigo">w3.css</a></p>
</footer>

<!-- End page content -->
</div>

<script>

// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

function myMap()
{
  myCenter=new google.maps.LatLng(<?= $umum->map_latitude?>,<?= $umum->map_langitude?>);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" w3-indigo", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-indigo";
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtVi0H4w9mVTJbrShUo8P0AIsIRzOZ6c&callback=myMap"></script>

</body>
</html>
