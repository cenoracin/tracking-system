<?php

include "koneksi.php";

$id = $_GET['id'];

$stmt = mysqli_prepare($conn,"SELECT * FROM tracking WHERE id=?");

mysqli_stmt_bind_param($stmt,"i",$id);

mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);

$data = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

    $stmt2 = mysqli_prepare($conn,"
    
    UPDATE tracking SET
    
    status_pengiriman=?,
    lokasi_terakhir=?,
    updated_at=NOW()
    
    WHERE id=?
    
    ");

    mysqli_stmt_bind_param(
    $stmt2,
    "ssi",
    $_POST['status'],
    $_POST['lokasi'],
    $id
    );

    mysqli_stmt_execute($stmt2);

    header("Location: admin.php");
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Update Tracking</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div class="header">
<h1>UPDATE TRACKING</h1>
</div>

<div class="container">

<div class="card">

<form method="POST">

<input type="text" value="<?php echo $data['stt']; ?>" disabled>

<select name="status">

<option>Barang Diterima</option>
<option>Dalam Perjalanan</option>
<option>Sampai Gudang</option>
<option>Sedang Diantar</option>
<option>Delivered</option>

</select>

<input type="text" name="lokasi" value="<?php echo $data['lokasi_terakhir']; ?>">

<button type="submit" name="update">
Update Status
</button>

</form>

</div>

</div>

</body>
</html>
