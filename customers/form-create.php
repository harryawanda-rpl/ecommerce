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
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama_lengkap"></td>
			</tr>
			<tr>
				<td>Alamat Pengiriman</td>
				<td><textarea name="alamat_pengiriman"></textarea></td>
			</tr>
			<tr>
				<td>Negara</td>
				<td><input type="text" name="negara"></td>
			</tr>
			<tr>
				<td>No Telepon</td>
				<td><input type="text" name="no_telp"></td>
			</tr>
		</table>
		<button type="submit" name="create" class="btn btn-primary">Simpan</button>
	</form>
</body>
</html>