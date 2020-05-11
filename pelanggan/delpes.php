<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<?php
include "../koneksi.php";
$delpes=$_POST['delpes'];
$sql="DELETE FROM `booking` WHERE id_pelanggan = '".$_SESSION['id']."'";
mysqli_query($con, $sql);
echo "<script>window.alert('Berhasil Menghapus Pesanan')
    window.location='customer.php'</script>";
?>