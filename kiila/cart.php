<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

<title>Keranjang</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container py-5">

<h2>Keranjang Belanja</h2>

<table class="table">

<tr>
<th>Menu</th>
<th>Harga</th>
</tr>

<?php

$total = 0;

if(isset($_SESSION['cart'])){

foreach($_SESSION['cart'] as $item){

$total += $item['harga'];

?>

<tr>
<td><?= $item['nama'] ?></td>
<td>Rp <?= number_format($item['harga']) ?></td>
</tr>

<td>
<a href="hapus.php?id=<?= $index ?>" class="btn btn-danger btn-sm">
Hapus
</a>
</td>

<?php
}
}
?>

<tr>

<th>Total</th>
<th>Rp <?= number_format($total) ?></th>

</tr>

</table>

<a href="makanan.php" class="btn btn-secondary">Kembali</a>

</div>

</body>
</html>