<!DOCTYPE html>
<html amp>
<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>Beranda</title>
 
 <link rel="stylesheet" href="../css/allhome.css">
 <link rel="stylesheet" href="../css/barberkc.css">
 <link rel="stylesheet" href="../css/formbox.css"><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style amp-boilerplate>
body{
  -webkit-animation: -amp-start 8s steps(1,end) 0s 1 normal both;
  -moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;
  animation:-amp-start 8s steps(1,end) 0s 1 normal both
}
@-webkit-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-moz-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-ms-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@-o-keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
@keyframes -amp-start{
  from{visibility:hidden}to{visibility:visible}
}
</style> <!-- ini penting buat animasi navigasi jangan ditaruh css biar lanjayy -->

  <script async  src="https://cdn.ampproject.org/v0.js"></script>
  <script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
  <script async custom-element="amp-sidebar" src="https://cdn.ampproject.org/v0/amp-sidebar-0.1.js"></script>
</head>

<body>
<amp-sidebar id="sidebar" class="cid-rIduZ5xEHs" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>

            <div class="sidebar mbr-white" data-app-modern-menu="true"><hr>
              <a class="text-primary display-3" href="settingup.php"><img src=../icon/set.jpg width=32px height=38px> Pengaturan</a><hr>
              <a class="text-primary display-3" href="../logout.php"><img src=../icon/out.jpg width=32px height=38px> Keluar</a><hr>
            </div>
        </div>
    </amp-sidebar>
  <section class="menu cid-rIduZ5xEHs" id="menu1-q">
    
    <nav class="headerbar sticky-nav">
      <div class="brand">
          
          <p class="brand-name mbr-fonts-style display-2"><img src=../icon/icn.png width=40px height=40px> KANG CUKUR</p>
      </div>
    </nav>
    
    <button on="tap:sidebar.toggle" class="ampstart-btn hamburger sticky-but">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
</section>  
    	<div><br><br><br>
    	</div>
        <div>
          <body>
<center>
<p id="tampilkan"></p>
<h4 class="mbr-fonts-style align-center display-5">Cek lokasi anda! >> <button onclick="getLocation()">Cek</button></h4>

<div id="mapcanvas"></div>
</center>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

<script>
var view = document.getElementById("tampilkan");
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else {
        view.innerHTML = "Browser anda belum support fitur ini! Buka Pengaturan > Pusat Bantuan";
    }
}

function showPosition(position) {
    lat = position.coords.latitude;
    lon = position.coords.longitude;
    latlon = new google.maps.LatLng(lat, lon)
    mapcanvas = document.getElementById('mapcanvas')
    mapcanvas.style.height = '500px';
    mapcanvas.style.width = '500px';

    var myOptions = {
    center:latlon,
    zoom:14,
    mapTypeId:google.maps.MapTypeId.ROADMAP
    }
    
    var map = new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
    var marker = new google.maps.Marker({
      position:latlon,
      map:map,
      title:"Posisi anda disini!"
    });
    var kui="";
    var link;
    link1=lat;
    link2=lon;
    kui="https://maps.google.com/maps?q="+link1+"%2C"+link2;
    boxlink.value=kui;
}

function showError(error) {
    switch(error.code) {
        case error.PERMISSION_DENIED:
            view.innerHTML = "Deteksi ulang gagal"
            break;
        case error.POSITION_UNAVAILABLE:
            view.innerHTML = "Info lokasi tidak bisa ditemukan"
            break;
        case error.TIMEOUT:
            view.innerHTML = "Request timeout"
            break;
        case error.UNKNOWN_ERROR:
            view.innerHTML = "An unknown error occurred."
            break;
    }
 }
</script>

</body>
        <h4 class="mbr-fonts-style align-center display-5">Link Koordinasi Google Maps Anda:</h4>
        <?php  
        include'../koneksi.php';
        $sql_profil = mysqli_query($con,"SELECT * FROM barbershop WHERE id_tcukur = '".$_SESSION['id']."'");
        while($data = mysqli_fetch_array($sql_profil)){
  ?>
        <form class="box" action="linkmap.php" method="post">
        <input type="textarea" name='boxlink' id='boxlink' placeholder="Buka Pengaturan>Pusat Bantuan" value='<?php echo $data['koor']; ?>'>
        <input type="submit" name="submit" value="Perbarui">
        </form>
        <?php } ?>
*diharuskan mengunggah lokasi cukur
    	<form class="box" action="bukatutup.php" method="post">
      <div class="content1">
        <?php
        include "../koneksi.php";
$sql = "SELECT * FROM barbershop WHERE id_tcukur='".$_SESSION['id']."'";
$query = mysqli_query($con, $sql);
echo "<h1 class='mbr-fonts-style align-center display-5'>Status :";

 while($data = mysqli_fetch_array($query)){
    ?>
      <?php echo $data['statusbuka']; ?>
    <?php
  }
  echo "</h1>"
?>
      <div class="container1">
      <button class="btn btn1" name="statusbuka" value="Buka">Buka Barber</button>
      <button class="btn btn2" name="statusbuka" value="Tutup">Tutup Barber</button>
      </div>
    </form>
          <?php
        include "../koneksi.php";
$sql = "SELECT * FROM booking WHERE id_tcukur='".$_SESSION['id']."'";
  $query = mysqli_query($con, $sql);
  echo "<br><br>";
echo "<div class='content3 display-6'>";
echo "<table class='table' align='center'>";
echo "<thead>";
echo "<th >Daftar Antrian</th>";
echo "<th>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</th>";
echo "<th>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</th>";
echo "<th>Waktu Memesan</th>";
  echo "</thead>";
  echo "</table>";
  
  while($data = mysqli_fetch_array($query)){
    ?>
        <th><?php echo $data['pemesan']; ?></th>
        <th>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</th>
        <th>&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</th>
        <th><?php echo $data['waktu']; ?></th><br>
    <?php
  }
echo "</div>";
?>
</section>
    Unggah Foto Tempat Cukur Anda(ukuran kurang dari 500Kb):
    <form method="post" enctype="multipart/form-data" action="upload.php"><input type="file" name="gambar"><input type="submit" value="Unggah">
</form>
<a href="daffoto.php">Lihat Foto Anda</a>

<section class="social-follow cid-rIdugNkbS4" id="social-follow-p">
 <div class="wrapper">
<br>        
       <div class="icons-list">   
        <a href="https://facebook.com/Kang-Cukur-e-project-102562001317578/" target="_blank">
                <img src="../icon/iconfb.png" width="25" height="25"></img>
            </a>
<a href="https://instagram.com/kangcukur2020?igshid=19o1sshkg4bln" target="_blank">
                <img src="../icon/iconig.png" width="25" height="25"></img>
            </a>
</div>
    </div>
</section>
<section class="footer1 cid-rIdooQtecn" id="footer1-j">
    <div class="container">
        <div class="mbr-col-sm-12 align-center mbr-white">
            <p class="mbr-text mbr-fonts-style display-7">
                © 2019 by KANG CUKUR</p>
        </div>
    </div>
</section>
</body>
</html>