<!DOCTYPE html>
<html>
<title><?= web_appname?></title>
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
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div id="myNavbar" class="w3-bar w3-white w3-wide w3-padding w3-card">
    <a href="" class="w3-bar-item w3-button w3-wide"><b><?= web_appname?></b></a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">TENTANG</a>
      <a href="#product" class="w3-bar-item w3-button"><i class="fa fa-list"></i> PRODUK</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i> KONTAK</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav id="mySidebar" class="w3-sidebar w3-bar-block w3-blue w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close ×</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">TENTANG</a>
  <a href="#product" onclick="w3_close()" class="w3-bar-item w3-button">PRODUK</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">KONTAK</a>
</nav>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-indigo" style="padding-top:0" onclick="this.style.display='none'">
  <span class="w3-button w3-indigo w3-xxlarge w3-display-topright">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption"></p>
  </div>
</div>

<!-- Header with Slideshow -->
<header  id="home" class="w3-display-container w3-center">
  <?php foreach($slider->result() as $row){?>
    <div class="mySlides w3-animate-opacity">
      <img class="w3-image" src="<?= base_url('assets/img/'.$row->gambar)?>" alt="<?= $row->keterangan?>" style="min-width:500px" width="1500" height="1000">
      <div class="w3-display-left w3-padding w3-hide-small" style="width:35%">
        <div class="w3-blue w3-opacity w3-hover-opacity-off w3-padding-large w3-round-large">
          <h1 class="w3-xlarge"><?= $row->keterangan?></h1>
        </div>
      </div>
    </div>
  <?php }?>
  <a class="w3-button w3-blue w3-display-right w3-margin-right w3-round w3-hide-small w3-hover-light-grey" onclick="plusDivs(1)">Next Slide <i class="fa fa-angle-right"></i></a>
  <a class="w3-button w3-block w3-blue w3-hide-large w3-hide-medium" onclick="plusDivs(1)">Next Slide <i class="fa fa-angle-right"></i></a>
</header>

<!-- The App Section -->
<div id="about" class="w3-container w3-padding-64 w3-white">
  <div class="w3-row-padding">
    <div class="w3-col l8 m6 w3-center">
      <h1 class="w3-jumbo">WHO ARE WE</h1>
      <p><em>We'd introduce our self!</em></p>
      <p><?= $umum->tentang?></p>
    </div>
    <div class="w3-col l4 m6">
      <img src="<?= base_url('assets/img/NS3FB_WP_R01_1920x1080.jpg')?>" onclick="onClick(this)" class="w3-image w3-right w3-hide-small w3-round-large" alt="KABER" width="335" height="471">
      <div class="w3-center w3-hide-large w3-hide-medium">
        <img src="<?= base_url('assets/img/NS3FB_WP_R01_1920x1080.jpg')?>" class="w3-image w3-margin-top w3-round-large" alt="PERCETAKAN KABER" width="335" height="471">
      </div>
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="w3-container w3-padding-64 w3-blue w3-opacity w3-hover-opacity-off">
  <div class="w3-row-padding">
    <div class="w3-col l4 m6">
      <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="<?= base_url('assets/img/NS3FB_WP_R01_1920x1080.jpg')?>" alt="PELAYANAN KABER" onclick="onClick(this)" width="335" height="471">
    </div>
    <div class="w3-col l8 m6 w3-center">
      <h1 class="w3-jumbo">WHY CHOOSE US</h1>
      <p><em>We'd give our best!</em></p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <img class="w3-image w3-round-large w3-hide-small w3-grayscale" src="<?= base_url('assets/img/NS3FB_WP_R01_1920x1080.jpg')?>" alt="PELAYANAN KABER" onclick="onClick(this)" width="335" height="471">
      <!-- <i class="fa fa-desktop w3-margin-bottom w3-jumbo w3-center"></i> -->
      <p class="w3-large">Responsive</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-heart w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Passion</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-diamond w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Design</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Support</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
  </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="product" class="w3-container w3-padding-64 w3-white" id="contact">
  <h3 class="w3-center w3-jumbo">WHAT WE OFFER</h3>
  <p class="w3-center"><em>We'd make your order!</em></p>
  <div class="w3-section w3-center w3-bottombar w3-padding-16">
    <span class="w3-margin-right">Filter:</span> 
    <button id="populer" class="w3-button filter w3-light-grey"><i class="fa fa-heart w3-margin-right"></i>POPULER</button>
    <button id="offset" class="w3-button filter w3-light-grey"><i class="fa fa-diamond w3-margin-right"></i>OFFSET PRINTING</button>
    <button id="digital" class="w3-button filter w3-light-grey w3-hide-small"><i class="fa fa-photo w3-margin-right"></i>DIGITAL PRINTING</button>
  </div>

  <!-- First Photo Grid-->
  <div id="productlist" class="w3-row-padding"></div>
  
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="w3-container w3-padding-64 w3-blue w3-opacity w3-hover-opacity-off" id="contact">
  <h3 class="w3-center w3-jumbo">WHERE WE WORK</h3>
  <p class="w3-center"><em>We'd love your feedback!</em></p>

  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m6 w3-container">
      <!-- Add Google Maps -->
      <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
    </div>
    <div class="w3-col m6 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <?= web_fullname ?><br>
        <?= $umum->alamat?><br>
        <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telepon: <?= $umum->telepon?><br>
        <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: <?= $umum->email?><br>
        <i class="fa fa-clock-o fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Buka : Senin - Jumat, 9:00 sampai 18:00
      </div>
      <p>Kirim pesan kepada kami :</p>
      <form action="" method="post">
        <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
          <div class="w3-half">
            <input class="w3-input w3-border" type="text" placeholder="Nama" required="required" name="nama">
          </div>
          <div class="w3-half">
            <input class="w3-input w3-border" type="email" placeholder="Email" required="required" name="email">
          </div>
        </div>
        <textarea class="w3-input w3-border" placeholder="Pesan" required="required" name="pesan"></textarea><br>
        <?= $recaptcha['widget'] ?>
        <?= $recaptcha['script'] ?>
        <button class="w3-button w3-white w3-right w3-section" type="submit">
          <i class="fa fa-paper-plane"></i> KIRIM PESAN
        </button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-container w3-padding-64 w3-white">
  <a href="#home" class="w3-button w3-blue"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>&copy; KABER 2022 - Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>

  // Slideshow
  var slideIndex = 1;
  showDivs(slideIndex);

  function plusDivs(n) {
    showDivs(slideIndex += n);
  }

  function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("mySlides");
    if (n > x.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    x[slideIndex-1].style.display = "block";  
  }

  var mySidebar = document.getElementById("mySidebar");

  // Toggle between showing and hiding the sidebar when clicking the menu icon
  function w3_open() {
      if (mySidebar.style.display === 'block') {
          mySidebar.style.display = 'none';
      } else {
          mySidebar.style.display = 'block';
      }
  }

  // Close the sidebar with the close button
  function w3_close() {
      mySidebar.style.display = "none";
  }

  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }

  function myMap()
  {
    myCenter=new google.maps.LatLng(<?= $umum->map_latitude?>, <?= $umum->map_longitude?>);
    var mapOptions= {
      center:myCenter,
      zoom:15, scrollwheel: false, draggable: false,
      mapTypeId:google.maps.MapTypeId.ROADMAP
    };
    var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

    var marker = new google.maps.Marker({
      position: myCenter,
    });
    marker.setMap(map);
  }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtVi0H4w9mVTJbrShUo8P0AIsIRzOZ6c&callback=myMap"></script>

<script src="<?= base_url('assets/backend/js/jquery.js')?>"></script>

<script type="text/javascript">
  $(function(){

    $(document).ready(function(){
      loadProduk('populer');
    });

    $('#populer').click(function(event){
      event.preventDefault();
      loadProduk('populer');
    });
    $('#offset').click(function(event){
      event.preventDefault();
      loadProduk('offset');
    });
    $('#digital').click(function(event){
      event.preventDefault();
      loadProduk('digital');
    });

    function loadProduk($type){
      $.ajax({
        url:"<?php echo base_url('welcome/get_produk')?>"+"/"+$type,
        success: function(response) {
          $("#productlist").html(response);
          $("#populer").addClass("w3-light-grey").removeClass("w3-blue");
          $("#offset").addClass("w3-light-grey").removeClass("w3-blue");
          $("#digital").addClass("w3-light-grey").removeClass("w3-blue");
          $("#"+$type).addClass("w3-blue").removeClass("w3-light-grey");
        },
        error: function() {
           alert("Terjadi kesalahan saat mengambil data pesanan.");
        }
      });
    }

    });
  </script>

</body>
</html>
