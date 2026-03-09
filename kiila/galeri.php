<?php

$galeri = [

["kategori"=>"Makanan","foto"=>"https://images.unsplash.com/photo-1604908176997-125f25cc6f3d"],
["kategori"=>"Makanan","foto"=>"https://images.unsplash.com/photo-1559847844-d721426d6edc"],
["kategori"=>"Makanan","foto"=>"https://images.unsplash.com/photo-1546069901-ba9599a7e63c"],

["kategori"=>"Minuman","foto"=>"https://images.unsplash.com/photo-1556679343-c7306c1976bc"],
["kategori"=>"Minuman","foto"=>"https://images.unsplash.com/photo-1558640476-437a2b9438a2"],
["kategori"=>"Minuman","foto"=>"https://images.unsplash.com/photo-1515823064-d6e0c04616a7"],

["kategori"=>"Cafe","foto"=>"https://images.unsplash.com/photo-1495474472287-4d71bcdd2085"],
["kategori"=>"Cafe","foto"=>"https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb"],
["kategori"=>"Cafe","foto"=>"https://images.unsplash.com/photo-1442512595331-e89e73853f31"]

];

?>

<style>

.hero{
height:40vh;
background:url('https://images.unsplash.com/photo-1509042239860-f550ce710b93');
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
color:white;
}

.gallery img{
height:250px;
object-fit:cover;
border-radius:10px;
transition:0.3s;
}

.gallery img:hover{
transform:scale(1.05);
}

.label{
position:absolute;
top:10px;
left:10px;
background:black;
color:white;
padding:5px 10px;
font-size:12px;
border-radius:5px;
}

</style>

<div class="hero">
<h1>Galeri Cafe & Resto</h1>
</div>

<div class="container py-5">

<div class="row gallery">

<?php foreach($galeri as $item): ?>

<div class="col-md-4 mb-4">

<div class="position-relative">

<span class="label"><?= $item['kategori'] ?></span>

<img src="<?= $item['foto'] ?>" class="w-100">

</div>

</div>

<?php endforeach ?>

</div>

</div>