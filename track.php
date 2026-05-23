<?php
include "koneksi.php";

$data = null;

if(isset($_GET['stt'])){

    $stt = $_GET['stt'];

    $stmt = mysqli_prepare($conn,"SELECT * FROM tracking WHERE stt=?");

    mysqli_stmt_bind_param($stmt,"s",$stt);

    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    $data = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Tracking Barang</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="header">
<h1>HASIL TRACKING</h1>
</div>

<div class="container">

<div class="card">

<?php if($data){ ?>

<table>

<tr>
<th>STT</th>
<td><?php echo $data['stt']; ?></td>
</tr>

<tr>
<th>Pengirim</th>
<td><?php echo $data['pengirim']; ?></td>
</tr>

<tr>
<th>Penerima</th>
<td><?php echo $data['penerima']; ?></td>
</tr>

<tr>
<th>Barang</th>
<td><?php echo $data['barang']; ?></td>
</tr>

<tr>
<th>Asal</th>
<td><?php echo $data['asal']; ?></td>
</tr>

<tr>
<th>Tujuan</th>
<td><?php echo $data['tujuan']; ?></td>
</tr>

<tr>
<th>Status</th>
<td><?php echo $data['status_pengiriman']; ?></td>
</tr>

<tr>
<th>Lokasi</th>
<td><?php echo $data['lokasi_terakhir']; ?></td>
</tr>

<tr>
<th>Update</th>
<td><?php echo $data['updated_at']; ?></td>
</tr>

</table>

<?php } else { ?>

<h3>Data tracking tidak ditemukan</h3>

<?php } ?>

</div>

</div>

</body>
</html>
