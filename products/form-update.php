<?php
include("config.php");
if( !isset($_GET['id']) ){
	header('Location: index.php');
}

$id = $_GET['id'];
$sql = "SELECT * FROM products WHERE id=$id";
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
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk" value="<?php echo $data['nama_produk'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" value="<?php echo $data['harga'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori" value="<?php echo $data['kategori'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" value="<?php echo $data['stok'] ?>" class="form-control"></td>
			</tr>
			<tr>
				<td>&nbsp</td>
			</tr>
		</table>
		<button type="submit" name="update" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>