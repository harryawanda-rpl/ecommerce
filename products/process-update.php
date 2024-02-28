<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id'];
	$nama_produk = $_POST['nama_produk'];
	$harga = $_POST['harga'];
	$kategori = $_POST['kategori'];
	$stok = $_POST['stok'];

	$sql = "UPDATE products SET nama_produk='$nama_produk', harga='$harga',
	kategori='$kategori', stok='$stok' WHERE id=$id";
	$query = mysqli_query($db, $sql);

	if( $query ) {
		header('Location: index.php');
	} else {
		die("Gagal menyimpan perubahan...");
	}
} else {
    die("Akses dilarang...");
}

?>