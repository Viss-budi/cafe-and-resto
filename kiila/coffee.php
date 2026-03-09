<?php
session_start();

$coffee = [

["id"=>201,"nama"=>"Espresso","harga"=>18000,"foto"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348","kategori"=>"Strong"],

["id"=>202,"nama"=>"Americano","harga"=>20000,"foto"=>"https://images.unsplash.com/photo-1494314671902-399b18174975","kategori"=>"Classic"],

["id"=>203,"nama"=>"Cappuccino","harga"=>25000,"foto"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93","kategori"=>"Best Seller"],

["id"=>204,"nama"=>"Cafe Latte","harga"=>26000,"foto"=>"https://images.unsplash.com/photo-1521305916504-4a1121188589","kategori"=>"Favorite"],

["id"=>205,"nama"=>"Caramel Macchiato","harga"=>30000,"foto"=>"https://images.unsplash.com/photo-1461023058943-07fcbe16d735","kategori"=>"Popular"],

["id"=>206,"nama"=>"Mocha Coffee","harga"=>28000,"foto"=>"https://images.unsplash.com/photo-1572441710534-6802b8d5f9b5","kategori"=>"Sweet"]

];

if(isset($_POST['add'])){

$id = $_POST['id'];

foreach($coffee as $item){

if($item['id']==$id){

$_SESSION['cart'][] = $item;

}

}

}
?>

<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Menu Coffee</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#fafafa;
font-family:Arial;
}

.hero{
height:40vh;
background:url('https://images.unsplash.com/photo-1442512595331-e89e73853f31');
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
color:white;
text-shadow:0 3px 10px rgba(0,0,0,0.6);
}

.card{
border:none;
border-radius:15px;
transition:0.3s;
}

.card:hover{
transform:translateY(-6px);
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.card img{
height:220px;
object-fit:cover;
border-top-left-radius:15px;
border-top-right-radius:15px;
}

.badge-menu{
position:absolute;
top:15px;
left:15px;
background:black;
}

.price{
font-size:18px;
font-weight:bold;
}

</style>

</head>
<body>

<!-- HERO -->

<div class="hero">
<h1>Our Coffee Menu</h1>
</div>

<!-- MENU -->

<div class="container py-5">

<div class="row">

<?php foreach($coffee as $item): ?>

<div class="col-md-4 mb-4">

<div class="card shadow-sm position-relative">

<span class="badge badge-menu"><?= $item['kategori'] ?></span>

<img src="<?= $item['foto'] ?>" class="card-img-top">

<div class="card-body text-center">

<h5><?= $item['nama'] ?></h5>

<p class="price">
Rp <?= number_format($item['harga'],0,",",".") ?>
</p>

<form method="post">

<input type="hidden" name="id" value="<?= $item['id'] ?>">

<button name="add" class="btn btn-dark">
Tambah Keranjang
</button>

</form>

</div>

</div>

</div>

<?php endforeach ?>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>