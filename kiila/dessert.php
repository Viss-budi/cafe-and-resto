<?php
session_start();

$dessert = [

["id"=>301,"nama"=>"Chocolate Cake","harga"=>25000,"foto"=>"https://images.unsplash.com/photo-1578985545062-69928b1d9587","kategori"=>"Best Seller"],

["id"=>302,"nama"=>"Tiramisu","harga"=>28000,"foto"=>"https://images.unsplash.com/photo-1571877227200-a0d98ea607e9","kategori"=>"Favorite"],

["id"=>303,"nama"=>"Cheesecake","harga"=>30000,"foto"=>"https://images.unsplash.com/photo-1541783245831-57d6fb0926d3","kategori"=>"Popular"],

["id"=>304,"nama"=>"Ice Cream Sundae","harga"=>20000,"foto"=>"https://images.unsplash.com/photo-1563805042-7684c019e1cb","kategori"=>"Sweet"],

["id"=>305,"nama"=>"Churros","harga"=>22000,"foto"=>"https://images.unsplash.com/photo-1625944525533-473f1b8c6b45","kategori"=>"Favorite"],

["id"=>306,"nama"=>"Pancake Maple","harga"=>24000,"foto"=>"https://images.unsplash.com/photo-1504754524776-8f4f37790ca0","kategori"=>"Best Seller"]

];

if(isset($_POST['add'])){

$id = $_POST['id'];

foreach($dessert as $item){

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

<title>Menu Dessert</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#fafafa;
font-family:Arial;
}

.hero{
height:40vh;
background:url('https://images.unsplash.com/photo-1551024601-bec78aea704b');
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
<h1>Sweet Dessert Menu</h1>
</div>

<!-- MENU -->

<div class="container py-5">

<div class="row">

<?php foreach($dessert as $item): ?>

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