<?php

include "koneksi.php";

$stmt = mysqli_prepare($conn,"

INSERT INTO tracking
(
stt,
pengirim,
penerima,
barang,
asal,
tujuan,
status_pengiriman,
lokasi_terakhir
)

VALUES (?,?,?,?,?,?,?,?)

");

mysqli_stmt_bind_param(
$stmt,
"ssssssss",
$_POST['stt'],
$_POST['pengirim'],
$_POST['penerima'],
$_POST['barang'],
$_POST['asal'],
$_POST['tujuan'],
$_POST['status'],
$_POST['lokasi']
);

mysqli_stmt_execute($stmt);

header("Location: admin.php");

?>
