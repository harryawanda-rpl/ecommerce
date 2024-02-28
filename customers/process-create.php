<?php

include("config.php");

if(isset($_POST['create'])){

	$nama_lengkap = $_POST['nama_lengkap'];
	$alamat_pengiriman = $_POST['alamat_pengiriman'];
	$negara = $_POST['negara'];
	$no_telp = $_POST['no_telp'];

	$sql = "INSERT INTO customers (nama_lengkap, alamat_pengiriman, negara, no_telp)
	VALUE ('$nama_lengkap', '$alamat_pengiriman', '$negara', '$no_telp')";

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