<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_produk = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$kategori = $_POST['kategori'];
	$stok = $_POST['stok'];

	$sql = "INSERT INTO products (nama_produk, harga, kategori, stok)
	VALUE ('$nama_produk', '$harga', '$kategori', '$stok')";

	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
} else {
	die("Akses dilarang...");
}

?>