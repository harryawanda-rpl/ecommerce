<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM orders WHERE id=$id";
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
				<td>Kode Produk</td>
				<td><input type="text" name="id_produk" value="<?php echo $data['id_produk'] ?>"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value="<?php echo $data['jumlah'] ?>"></td>
			</tr>
			<tr>
				<td>Total Harga</td>
				<td><input type="text" name="total_harga" value="<?php echo $data['total_harga'] ?>"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>