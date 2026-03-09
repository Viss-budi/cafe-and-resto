<?php
session_start();

$makanan = [

["id"=>1,"nama"=>"Nasi Goreng Special","harga"=>28000,"foto"=>"https://images.unsplash.com/photo-1604908176997-125f25cc6f3d","kategori"=>"Best Seller"],
["id"=>2,"nama"=>"Chicken Katsu Rice","harga"=>32000,"foto"=>"https://images.unsplash.com/photo-1559847844-d721426d6edc","kategori"=>"Favorite"],
["id"=>3,"nama"=>"Ayam Bakar Madu","harga"=>30000,"foto"=>"https://images.unsplash.com/photo-1600891964599-f61ba0e24092","kategori"=>"Popular"],
["id"=>4,"nama"=>"Sate Ayam","harga"=>25000,"foto"=>"https://images.unsplash.com/photo-1625944525533-473f1b8c6b45","kategori"=>"Best Seller"]

];

if(isset($_POST['add'])){

$id = $_POST['id'];

foreach($makanan as $item){

if($item['id'] == $id){

$_SESSION['cart'][] = $item;

}

}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Coffee Shop</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">

<style>

body{
font-family:'Poppins',sans-serif;
background:#fafafa;
}

/* HERO */

.hero{
height:45vh;
background:url('https://images.unsplash.com/photo-1509042239860-f550ce710b93');
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
color:white;
text-shadow:0 3px 10px rgba(0,0,0,0.6);
}

/* CARD */

.card{
border:none;
border-radius:15px;
transition:0.3s;
}

.card:hover{
transform:translateY(-8px);
box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.card img{
height:220px;
object-fit:cover;
border-top-left-radius:15px;
border-top-right-radius:15px;
}

.price{
font-size:18px;
font-weight:600;
color:#6b4f4f;
}

.badge-menu{
position:absolute;
top:15px;
left:15px;
background:#000;
}

.btn-order{
background:#000;
border:none;
}

.btn-order:hover{
background:#333;
}

</style>

</head>
<body>

<!-- HERO -->

<div class="hero">
<h1>Menu Makanan Kami</h1>
</div>

<!-- MENU -->

<div class="container py-5">

<div class="row">

<?php foreach($makanan as $item): ?>

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

<!-- CTA -->

<div class="bg-dark text-white text-center p-5">

<h3>Enjoy Your Meal With Our Best Coffee</h3>
<p>Fresh food and premium coffee everyday</p>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>