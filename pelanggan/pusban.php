<!DOCTYPE html>
<html>

<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content=""><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>Ubah Profile</title>

  <link rel="stylesheet" href="../css/font-awesome.min.css"> 
  <link rel="stylesheet" href="../css/allhome.css">
  <link rel="stylesheet" href="../css/faq.css">
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
              <a class="text-primary display-3" href="customer.php"><img src=../icon/icnber.jpg width=29px height=38px> Halaman Utama</a><hr>
              <a class="text-primary display-3" href="settingup.php"><img src=../icon/set.jpg width=29px height=38px> Pengaturan</a><hr>
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
<section>
      <div>
      <div><br><br><br>
      </div>
        <div>
<amp-img src="../icon/pusban.png" layout="responsive" width="14" height="2" alt="a sample image">     
            </amp-img>           
        </div>
    </div>
</section>
<meta name="viewport" content="width=device-width, initial-scale=1">
<section class="header2 cid-rIdnGxH7WRS" id="header2-f">
<div class="faq">FAQ</div>
<button class="acordion">1. Bagaimana cara mengupdate maps secara manual ?</button>
<div class="panel">
  <p>1. Buka google maps browser <a href="https://www.google.com/maps/">klik disini</a>.<br><br>
     2. Ambil lokasi anda secara langsung.<br>
     <img src="../iconkc/2kc.jpg" height="360" widt="240"></img>
     <br><br>
     3. Copy link pada bar pencarian.<br>
     <img src="../iconkc/3kc.jpg" height="360" widt="240"></img>
     <br><br>
     4. Kembali ke beranda Kang-Cukur dan taruh link yang sudah di copy pada bar link koordinasi lalu tekan perbarui.<br>
     <img src="../iconkc/4kc.jpg" height="360" widt="240"></img></img><img src="../iconkc/5kc.jpg" height="360" widt="240"></img></p>
</div>
<button class="acordion">2. Bagaimana cara mengupload foto Tukang Cukur ?</button>
<div class="panel">
  <p>1. Pilih foto tempat cukur anda<br>
 <img src="../iconkc/6kc.jpg" height="360" widt="240"></img><br><br>
     2. Pilih Foto di galery anda.<br>
     <img src="../iconkc/7kc.jpg" height="360" widt="240"></img>
     <br><br>
     3. Tekan tombol Unggah.<br>
     <img src="../iconkc/8kc.jpg" height="360" widt="240"></img>
     <br><br>
     4. Foto berhasil di hapus.<br>
     <img src="../iconkc/9kc.jpg" height="360" widt="240"></img></p>
</div>
<script>
var acc = document.getElementsByClassName("acordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>



<?php  ?>
<br><br>
</section>

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
