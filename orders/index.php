<?php include("config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA</title>
  <style>
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    padding: 10px;
  }
  </style>
</head>
<body>
	<h2>INDEX DATA</h2>
  <a href="form-create.php" class="btn btn-primary">Tambah Data</a>
  <?php if(isset($_GET['status'])): ?>
    <?php
    if($_GET['status'] == 'sukses'){
      echo "Penambahan data berhasil!";
    } else {
      echo "Penambahan data gagal!";
    }
    ?>
  <?php endif; ?>
  <table>
    <thead>
      <tr align="center">
        <th>No</th>
        <th>Kode Produk</th>
        <th>Nama Produk</th>
        <th>Jumlah</th>
        <th>Total Harga</th>
        <th>Pilihan</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $no = 1;
      $query = $db->query("SELECT * FROM orders");
      while ($data = $query->fetch_assoc()){ 
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $data['id_produk'] ?></td>
        <td><?php echo $data['nama_produk'] ?></td>
        <td><?php echo $data['jumlah'] ?></td>
        <td><?php echo $data['total_harga'] ?></td>
        <td align="center">
          <a href="form-update.php?id=<?php echo $data['id'] ?>">Edit</a>
          <a onclick="return confirm('Anda yakin ingin menghapus data?')"
          href="delete.php?id=<?php echo $data['id'] ?>">Hapus</a>
        </td>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
		<p>Total Entri: <?php echo mysqli_num_rows($query) ?></p>
	</div>
</body>
</html>