<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<?php
include "../koneksi.php";
$statusbuka=$_POST['statusbuka'];
$sql="UPDATE `barbershop` SET `statusbuka` = '$statusbuka' WHERE id_tcukur='".$_SESSION['id']."'";
mysqli_query($con, $sql);
header( 'Location: barbershop.php' );
?>