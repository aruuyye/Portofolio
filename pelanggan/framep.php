
<!DOCTYPE html>
<html amp>

<body>

<section class="header1 cid-rIdnGxH7WRS">
<?php
        include "../koneksi.php";
$id_tcukur=$_GET['id'];
$sql = "SELECT * FROM gambar where id_tcukur='".$id_tcukur."'";
$query = mysqli_query($con, $sql);
while($data = mysqli_fetch_array($query)){
?>
<img src='../tukang_cukur/images/<?php echo $data['nama']; ?>' width='100%'>
<?php }
?>
</section>
 
</body>
</html>