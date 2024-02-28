<?php

include("config.php");

if(isset($_POST['update'])){

	$id = $_POST['id'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$alamat_pengiriman = $_POST['alamat_pengiriman'];
	$negara = $_POST['negara'];
	$no_telp = $_POST['no_telp'];

	$sql = "UPDATE customers SET nama_lengkap='$nama_lengkap', alamat_pengiriman='$alamat_pengiriman',
	negara='$negara', no_telp='$no_telp' WHERE id=$id";
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