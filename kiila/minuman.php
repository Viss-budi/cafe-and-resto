<?php
session_start();

$minuman = [

["id"=>101,"nama"=>"Es Teh Manis","harga"=>8000,"foto"=>"https://images.unsplash.com/photo-1556679343-c7306c1976bc","kategori"=>"Fresh"],

["id"=>102,"nama"=>"Lemon Tea","harga"=>12000,"foto"=>"https://images.unsplash.com/photo-1558640476-437a2b9438a2","kategori"=>"Favorite"],

["id"=>103,"nama"=>"Matcha Latte","harga"=>22000,"foto"=>"https://images.unsplash.com/photo-1515823064-d6e0c04616a7","kategori"=>"Popular"],

["id"=>104,"nama"=>"Chocolate Milk","harga"=>20000,"foto"=>"https://images.unsplash.com/photo-1572490122747-3968b75cc699","kategori"=>"Best Seller"],

["id"=>105,"nama"=>"Strawberry Milk","harga"=>21000,"foto"=>"https://images.unsplash.com/photo-1553530666-ba11a7da3888","kategori"=>"Favorite"],

["id"=>106,"nama"=>"Mineral Water","harga"=>5000,"foto"=>"https://images.unsplash.com/photo-1564419320461-6870880221ad","kategori"=>"Basic"]

];

if(isset($_POST['add'])){

$id = $_POST['id'];

foreach($minuman as $item){

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

<title>Menu Minuman</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#fafafa;
font-family:Arial;
}

.hero{
height:40vh;
background:url('https://images.unsplash.com/photo-1495474472287-4d71bcdd2085');
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
color:white;
text-shadow:0 3px 10px rgba(0,0,0,0.5);
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
font-weight:bold;
font-size:18px;
}

</style>

</head>
<body>

<!-- HERO -->

<div class="hero">
<h1>Menu Minuman</h1>
</div>

<!-- MENU -->

<div class="container py-5">

<div class="row">

<?php foreach($minuman as $item): ?>

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