<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<?php
include "../koneksi.php";
$id=$_GET['id'];
$sql="DELETE FROM gambar WHERE id=" . $id;
mysqli_query($con, $sql);
echo "<script>window.alert('Berhasil Menghapus Gambar')
    window.location='barbershop.php'</script>";
?>