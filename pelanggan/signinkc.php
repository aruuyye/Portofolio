<!DOCTYPE html>
<html lang="en">

<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content="">

  <title>Masuk</title>

  <link rel="stylesheet" href="../css/font-awesome.min.css">
<link rel="stylesheet" href="../css/allhome.css">
<link rel="stylesheet" href="../css/buatsigninup.css">
<link rel="stylesheet" href="../css/signintabs.css"><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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


<body><amp-sidebar id="sidebar" class="cid-rIduZ5xEHs" layout="nodisplay" side="right">
        <div class="builder-sidebar" id="builder-sidebar">
            <button on="tap:sidebar.close" class="close-sidebar">
                <span></span>
                <span></span>
            </button>

            <div class="sidebar mbr-white" data-app-modern-menu="true"><hr>
              <a class="text-primary display-3" href="../index.php"><img src=../icon/icnber.jpg width=29px height=38px> Beranda</a><hr>
              <a class="text-primary display-3" href="../daftar-pelanggan.php"><img src=../icon/icndafpel.jpg width=29px height=38px> Daftar Pelanggan</a><hr>
              <a class="text-primary display-3" href="../daftar-tukang-cukur.php"><img src=../icon/icndafbar.jpg width=29px height=38px> Daftar Tukang Cukur</a><hr>
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

<section class="engine"><a href="https://mobirise.me/i">free web creation software</a></section><section class="image1 cid-rIdwevOw8K" id="image1-t">

    <div>
      <div><br><br><br>
      </div>
        <div>
            <amp-img src="../icon/signin2.jpg" layout="responsive" width="14" height="2" alt="a sample image">
                
            </amp-img>
            
        </div>
    </div>

</section>

<section class="header1 cid-rIdnGxH7WRS" id="header1-f">

  <?php
session_start();
include '../koneksi.php';
if (isset($_POST['email'])){
 $email = $_POST['email'];
 $password = $_POST['password'];
        $result = mysqli_query($con,"select * from pelanggan where email='$email' and password='$password'");
 $cek = mysqli_num_rows($result);
        if($cek==1){
          while($data = mysqli_fetch_array($result)){
            $_SESSION['id'] = $data['id_pelanggan'];
            $_SESSION['email'] = $email;
            }
                 // Redirect user to index.php
     header("Location: customer.php");
         }if($cek==0){
 echo "<div class='form'>
<h3>Email/Kata kunci salah.</h3>
<br/>Klik disini untuk masuk <a href='signinkc.php'>masuk</a></div>";
 }
    }else{
?>
<br>
<form class="box" action="" method="post" name="login">
  <input type="text" name="email" placeholder="Email" required />
  <input type="password" name="password" placeholder="Kata Kunci" required />
<input type="submit" name="submit" value="Masuk">
Belum Punya Akun? <a href="..\daftar-pelanggan.php">Daftar!</a>
</form>
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

<section class="footer1 cid-rIdooQtecn" id="footer1-j">
    <div class="container">
        <div class="mbr-col-sm-12 align-center mbr-white">
            <p class="mbr-text mbr-fonts-style display-7">
                © 2019 by KANG CUKUR</p>
        </div>
    </div>
</section>
  <?php } ?>
</body>
</html>