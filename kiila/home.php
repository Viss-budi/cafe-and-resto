<?php

$menu = [

["nama"=>"Lungo Coffee","harga"=>199,"kategori"=>"bestseller","foto"=>"https://images.unsplash.com/photo-1511920170033-f8396924c348"],
["nama"=>"Dalgona Coffee","harga"=>159,"kategori"=>"bestseller","foto"=>"https://images.unsplash.com/photo-1587734195503-904fca47e0e9"],
["nama"=>"Iced Coffee","harga"=>149,"kategori"=>"bestseller","foto"=>"https://images.unsplash.com/photo-1461023058943-07fcbe16d735"],
["nama"=>"Filter Coffee","harga"=>59,"kategori"=>"diskon","foto"=>"https://images.unsplash.com/photo-1509042239860-f550ce710b93"],
["nama"=>"Churros","harga"=>170,"kategori"=>"diskon","foto"=>"https://images.unsplash.com/photo-1625944525533-473f1b8c6b45"],
["nama"=>"Chocolate Tiramisu","harga"=>250,"kategori"=>"diskon","foto"=>"https://images.unsplash.com/photo-1571877227200-a0d98ea607e9"]

];

$ulasan = [
["nama"=>"Andi","komentar"=>"Kopinya enak banget dan tempatnya nyaman."],
["nama"=>"Sinta","komentar"=>"Dessert nya favorit saya!"],
["nama"=>"Rudi","komentar"=>"Pelayanan cepat dan ramah."]

];

?>

<!-- CAROUSEL -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<div class="carousel-item active">
<img src="https://images.unsplash.com/photo-1509042239860-f550ce710b93" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="https://images.unsplash.com/photo-1495474472287-4d71bcdd2085" class="d-block w-100">
</div>

<div class="carousel-item">
<img src="https://images.unsplash.com/photo-1521305916504-4a1121188589" class="d-block w-100">
</div>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

</div>

<!-- Best Seller -->

<div class="container py-5">

<h2 class="text-center mb-4">Best Seller Menu</h2>

<div class="row">

<?php foreach($menu as $item): ?>
<?php if($item['kategori']=="bestseller"): ?>

<div class="col-md-4 mb-4">

<div class="card shadow h-100">

<img src="<?= $item['foto'] ?>" class="card-img-top">

<div class="card-body text-center">

<h5><?= $item['nama'] ?></h5>

<p class="fw-bold">Rp <?= $item['harga'] ?></p>

<button class="btn btn-dark btn-sm">
Order Now
</button>

</div>

</div>

</div>

<?php endif ?>
<?php endforeach ?>

</div>
</div>

<!-- MENU DISKON -->

<div class="container py-5 bg-light">

<h2 class="text-center mb-4">Menu Diskon</h2>

<div class="row">

<?php foreach($menu as $item): ?>
<?php if($item['kategori']=="diskon"): ?>

<div class="col-md-4 mb-4">

<div class="card shadow h-100">

<img src="<?= $item['foto'] ?>" class="card-img-top">

<div class="card-body text-center">

<h5><?= $item['nama'] ?></h5>

<p class="text-danger fw-bold">
Rp <?= $item['harga'] ?>
</p>

<span class="badge bg-danger">Lihat Promo</span>

</div>

</div>

</div>

<?php endif ?>
<?php endforeach ?>

</div>
</div>

<!-- ULASAN -->

<div class="container py-5">

<h2 class="text-center mb-4">Ulasan Pelanggan</h2>

<div class="row">

<?php foreach($ulasan as $review): ?>

<div class="col-md-4 mb-4">

<div class="card shadow h-100">

<div class="card-body text-center">

<h5><?= $review['nama'] ?></h5>

<p>"<?= $review['komentar'] ?>"</p>

⭐ ⭐ ⭐ ⭐ ⭐

</div>

</div>

</div>

<?php endforeach ?>

</div>
</div>