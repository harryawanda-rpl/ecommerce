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
				<td>Kode Produk</td>
				<td><input type="text" name="id_produk"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td><input type="text" name="nama_produk"></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td>Total Harga</td>
				<td><input type="text" name="total_harga"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>