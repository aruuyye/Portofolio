<?php
session_start();
if ($_SESSION['id'] == null){
  header( 'Location: ../index.php' );
}
?>
<?php
include "../koneksi.php";
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];
$path = "images/".$nama_file;
if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/jpg"){
if($ukuran_file <= 500000){
if(move_uploaded_file($tmp_file, $path)){
$query = "INSERT INTO gambar(nama,id_tcukur,ukuran,tipe) VALUES('".$nama_file."','".$_SESSION['id']."','".$ukuran_file."','".$tipe_file."')";

$sql = mysqli_query($con, $query); // Eksekusi/ Jalankan query dari variabel $query

if($sql){
echo "<script>window.alert('Berhasil diunggah')
window.location='daffoto.php'</script>";


}else{
echo "<script>window.alert('Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database')
window.location='barbershop.php'</script>";
}

}else{
echo "<script>window.alert('Maaf, Gambar gagal diunggah')
window.location='barbershop.php'</script>";
}

}else{
echo "<script>window.alert('Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 500Kb')
window.location='barbershop.php'</script>";
}

}else{
echo "<script>window.alert('Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.')
window.location='barbershop.php'</script>";
}

?>