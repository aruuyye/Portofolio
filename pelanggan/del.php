<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<?php
include "../koneksi.php";
$delpes=$_POST['delete'];
$sql="DELETE FROM `pelanggan` WHERE id_pelanggan = '".$_SESSION['id']."'";
mysqli_query($con, $sql);
echo "<script>window.alert('Berhasil Menghapus Akun')
    window.location='../index.php'</script>";
?>