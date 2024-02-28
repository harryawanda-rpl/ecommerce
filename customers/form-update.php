<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM customers WHERE id=$id";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>Update Data</h3>
	<form action="process-update.php" method="POST">
		<table border="0">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $data['id'] ?>" /></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama_lengkap" value="<?php echo $data['nama_lengkap'] ?>"></td>
			</tr>
			<tr>
				<td>Alamat Pengiriman</td>
				<td><textarea name="alamat_pengiriman"><?php echo $data['alamat_pengiriman'] ?></textarea></td>
			</tr>
			<tr>
				<td>Negara</td>
				<td><input type="text" name="negara" value="<?php echo $data['negara'] ?>"></td>
			</tr>
			<tr>
				<td>No Telp</td>
				<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>