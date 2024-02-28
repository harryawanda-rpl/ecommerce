<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
</head>
<body>
	<h3>CREATE DATA</h3>
	<form action="process-create.php" method="POST">
		<table border="0">
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk" class="form-control"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="harga" class="form-control"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori" class="form-control"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td><input type="text" name="stok" class="form-control"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>