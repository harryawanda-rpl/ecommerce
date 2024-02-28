<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id'];
	$id_produk = $_POST['id_produk'];
	$nama_produk = $_POST['nama_produk'];
	$jumlah = $_POST['jumlah'];
	$total_harga = $_POST['total_harga'];

	$sql = "UPDATE orders SET id_produk='$id_produk', nama_produk='$nama_produk',
	jumlah='$jumlah', total_harga='$total_harga' WHERE id=$id";
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