<!DOCTYPE html>
<html>
<head>  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <title>Pengaturan</title>

  <link rel="stylesheet" href="../css/font-awesome.min.css"> 
 <link rel="stylesheet" href="../css/allhome.css">
 <link rel="stylesheet" href="../css/modal.css">
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
              <a class="text-primary display-3" href="customer.php"><img src=../icon/icnpel.jpg width=29px height=38px> Halaman Utama</a><hr>
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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Create a column layout with Flexbox */
.row {
  display: flex;
}

/* Left column (menu) */
.left {
  flex: 35%;
  padding: 10px 0;
}

.left h2 {
  padding-left: 8px;
}



/* Style the navigation menu inside the left column */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myMenu li a {
  padding: 6px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}
</style>
</head>
<body>

<div class="row">
  <div class="left" style="background-color:#F4E1D6; height: 398px">
    <br><br><br><center><h2 class="Helvetica-fonts-style align-center mbr-bold display-1">Pengaturan</h2></center>
<style>

.divu {
  border-style: solid;
  border-top-color: #9d392b;
  border-bottom-color: #165593;
}
</style>
    <div class="w3-panel w3-white w3-xlarge mbr-fonts-style">
    <ul id="myMenu">
     <center>
      <li><a class="divu" href="pelanggan_profile.php">Profil Saya</a></li>
      <li><a class="divu" href="pusban.php">Pusat Bantuan</a></li>
      <li><a class="divu" id="myBtn">Hapus Akun</a></li>
    </ul></center>
  </div>
  </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h4>Yakin Ingin Menghapus Akun?</h4>
    </div>
    <div class="modal-body">
      <form class="box" action="del.php" method="post">
      <input type="submit" name="delete" value="Hapus">
    </form>
    </div>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


<script>
function myFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("mySearch");
  filter = input.value.toUpperCase();
  ul = document.getElementById("myMenu");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
    a = li[i].getElementsByTagName("a")[0];
    if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}
</script>

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
