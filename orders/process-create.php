<?php

include("config.php");

if(isset($_POST['create'])){

	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$jumlah = $_POST['jumlah'];
	$total_harga = $_POST['total_harga'];

	$sql = "INSERT INTO orders (id_produk, nama_produk, jumlah, total_harga)
	VALUE ('$id_produk', '$nama_produk', '$jumlah', '$total_harga')";

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