<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<?php
include "../koneksi.php";
$koor=$_POST['boxlink'];
$sql="UPDATE `barbershop` SET `koor` = '$koor' WHERE id_tcukur='".$_SESSION['id']."'";
mysqli_query($con, $sql);
header( 'Location: barbershop.php' );
?>