<?php 
session_start();
if ($_SESSION == null){
  header( 'Location: ../index.php' );
}
include '../koneksi.php';
//session_destroy();
$id_pelanggan = $_SESSION['id'];
if (isset($_POST['nm_pelanggan'])){
  //ini variable post
  $nm_pelanggan = $_POST['nm_pelanggan'];
  $no_telp = $_POST['no_telp'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  }
?>
<!DOCTYPE html>
<html amp>


<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content=""><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>Barber</title>

  <link rel="stylesheet" href="../css/font-awesome.min.css"> 
 <link rel="stylesheet" href="../css/allhome.css">
 <link rel="stylesheet" href="../css/barberkc.css">
 <link rel="stylesheet" href="../css/menbarb.css">
 <link rel="stylesheet" href="../css/formbox.css">
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

    <div class="container">
        <?php
        include "../koneksi.php";
$id_tcukur=$_GET['id'];
$sql = "SELECT * FROM barbershop where id_tcukur='".$id_tcukur."'";
$query = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($query)){
    ?>
<iframe width="285" height="170" id="gmap_canvas" src="<?php echo $data['koor']; ?>&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
<?php }
?>

<section class="header1 cid-rIdnGxH7WRS">
<?php
        include "../koneksi.php";
$id_tcukur=$_GET['id'];
 $cekk = mysqli_num_rows(mysqli_query($con,"SELECT * FROM gambar WHERE id_tcukur='".$id_tcukur."'"));
        if($cekk > 0){
?>
<?php
        include "../koneksi.php";
$id_tcukur=$_GET['id'];
$sql = "SELECT * FROM gambar where id_tcukur='".$id_tcukur."'";
$query = mysqli_query($con, $sql);
echo "<iframe width='100%' height='170' ";
while($data = mysqli_fetch_array($query)){
?>
src="framep.php?id=<?php echo $data['id_tcukur']; ?>" frameborder="2">
<?php }
echo "</iframe>";
?>
<?php } ?>
*Jika foto tidak muncul, tukang cukur tidak mengunggah foto
</section>

          <?php
        include "../koneksi.php";
$id_tcukur=$_GET['id'];
$sql = "SELECT * FROM booking where id_tcukur='".$id_tcukur."'";
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
    <?php
        include "../koneksi.php";
    if (isset($_POST['pemesan'])){
 $id = ($_GET['id']);
 $id_pelanggan=($_SESSION['id']);
 $pemesan = ($_POST['pemesan']);
 $waktu = ($_POST['waktu']);
 $cekk = mysqli_num_rows(mysqli_query($con,"SELECT * FROM booking WHERE id_pelanggan='$id_pelanggan'"));
        if($cekk > 0){
          echo "<script>window.alert('Anda Sudah Memesan, Harap Hapus pesanan bila ingin mengganti waktu');</script>";
        }
        else{
          mysqli_query($con,"INSERT INTO `booking` (`id_tcukur`, `id_pelanggan`, `pemesan`, `waktu`) VALUES ('$id', '$id_pelanggan', '$pemesan', '$waktu')");
          echo "<script>window.alert('Berhasil Memesan, Silahkan Muat Ulang Halaman (Harap datang sebelum waktu yang ditentukan!)')</script>";
      }
    }else{
?>
  <form class="box" action="" method="post">
  <input type="textarea" name="pemesan" placeholder="Nama Pemesan">
  <input type="time" name="waktu" placeholder="Waktu Datang"><br>
<input type="submit" name="submit" value="Datang Pada Waktu ini!">
</form>
<form class="box" action="delpes.php" method="post">
  <input type="submit" name="delpes" value="Batalkan Pesanan">
</form>
<?php } ?> 
  </div>
</section></section>
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