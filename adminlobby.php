<!DOCTYPE html>
<html amp>
<?php ob_start(); session_start(); ob_end_clean();
?>
<head>
<meta name="viewport" content="width=device-width, ">
  <link rel="shortcut icon" href="icon/logo3.jpg" type="image/x-icon">
  <meta name="description" content="">

<link rel="stylesheet" href="css/font-awesome.min.css"> 
 <link rel="stylesheet" href="css/allhome.css">
 <link rel="stylesheet" href="css/buatsigninup.css">
</head>
<body>
<section class="container cid-rIdnGxH7WRS">
            <img src="icon/logoutama.jpg" layout="responsive" width="100%">                
            </img>
</section>
<section class="header1 cid-rIdnGxH7WRS">
        <?php
require('koneksi.php');
if (mysqli_connect_errno());

function lihat($con){
	$sql = "SELECT * FROM barbershop";
	$query = mysqli_query($con, $sql);	
  echo "<fieldset>";
	echo "<legend>Barber</legend>";
	echo "<table border='1' cellpadding='1' align=center>";
	echo "<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tindakan</th>
		 </tr>";	
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?php echo $data['id_tcukur']; ?></td>
				<td><?php echo $data['nm_tcukur']; ?></td>
				<td><?php echo $data['email']; ?></td>

				<td>
					<a href="admin.php?aksi=hapus&id_tcukur=<?php echo $data['id_tcukur']; ?>">Hapus</a>
       </td>
<?php }
echo "</table>";
echo "</legend>";
echo "</fieldset>";
echo "<br><br>";
}

function lihatpel($con){
	$sql = "SELECT * FROM pelanggan";
	$query = mysqli_query($con, $sql);	
  echo "<fieldset>";
	echo "<legend>Pelanggan</legend>";
	echo "<table border='1' cellpadding='1' align=center>";
	echo "<tr>
			<th>ID</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Tindakan</th>
		 </tr>";	
	while($data = mysqli_fetch_array($query)){
		?>
			<tr>
				<td><?php echo $data['id_pelanggan']; ?></td>
				<td><?php echo $data['nm_pelanggan']; ?></td>
				<td><?php echo $data['email']; ?></td>

				<td>
					<a href="admin.php?aksi=hapuspel&id_pelanggan=<?php echo $data['id_pelanggan']; ?>">Hapus</a>
       </td>
<?php }
echo "</table>";
echo "</legend>";
echo "</fieldset>";
}

function hapus($con){
	if(isset($_GET['id_tcukur']) && isset($_GET['aksi'])){
		$id_tcukur = $_GET['id_tcukur'];
		$sql_hapus = "DELETE FROM barbershop WHERE id_tcukur=" . $id_tcukur;
		$hapus = mysqli_query($con, $sql_hapus);
		if($hapus){
			if($_GET['aksi'] == 'hapus'){
				header('location: admin.php');
			}
		}
	}
}
function hapuspel($con){
	if(isset($_GET['id_pelanggan']) && isset($_GET['aksi'])){
		$id_pelanggan = $_GET['id_pelanggan'];
		$sql_hapus = "DELETE FROM pelanggan WHERE id_pelanggan=" . $id_pelanggan;
		$hapus = mysqli_query($con, $sql_hapus);
		if($hapus){
			if($_GET['aksi'] == 'hapuspel'){
				header('location: admin.php');
			}
		}
	}
}

if (isset($_GET['aksi'])){
	switch($_GET['aksi']){
		case "lihat":
			lihat($con);
			break;
		case "lihatpel":
			lihatpel($con);
			break;
		case "hapus":
			hapus($con);
			break;
		case "hapuspel":
			hapuspel($con);
			break;
		default:
			echo "<h3>Aksi <i>".$_GET['aksi']."</i> tidak ada!</h3>";
			lihat($con);
			lihatpel($con);
	}
} else {
	lihat($con);
	lihatpel($con);
}
?>
</section>
</body>
</html>