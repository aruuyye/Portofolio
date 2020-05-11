<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<?php
include "../koneksi.php";
$delpes=$_POST['delete'];
$sql="DELETE FROM `barbershop` WHERE id_tcukur = '".$_SESSION['id']."'";
mysqli_query($con, $sql);
echo "<script>window.alert('Berhasil Menghapus Akun')
    window.location='../index.php'</script>";
?>