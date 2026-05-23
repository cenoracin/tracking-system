<?php
include "koneksi.php";

$data = mysqli_query($conn,"SELECT * FROM tracking ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Tracking</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="header">
<h1>ADMIN TRACKING</h1>
</div>

<div class="container">

<div class="card">

<h2>Tambah Tracking</h2>

<form action="simpan.php" method="POST">

<input type="text" name="stt" placeholder="Nomor STT" required>

<input type="text" name="pengirim" placeholder="Pengirim" required>

<input type="text" name="penerima" placeholder="Penerima" required>

<input type="text" name="barang" placeholder="Barang" required>

<input type="text" name="asal" placeholder="Asal" required>

<input type="text" name="tujuan" placeholder="Tujuan" required>

<select name="status">

<option>Barang Diterima</option>
<option>Dalam Perjalanan</option>
<option>Sampai Gudang</option>
<option>Sedang Diantar</option>
<option>Delivered</option>

</select>

<input type="text" name="lokasi" placeholder="Lokasi Terakhir" required>

<button type="submit">Simpan</button>

</form>

</div>

<div class="card">

<h2>Daftar Tracking</h2>

<table>

<tr>
<th>STT</th>
<th>Status</th>
<th>Lokasi</th>
<th>Aksi</th>
</tr>

<?php while($row = mysqli_fetch_assoc($data)){ ?>

<tr>

<td><?php echo $row['stt']; ?></td>

<td><?php echo $row['status_pengiriman']; ?></td>

<td><?php echo $row['lokasi_terakhir']; ?></td>

<td>

<a href="update.php?id=<?php echo $row['id']; ?>">
Update
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</div>

</body>
</html>
