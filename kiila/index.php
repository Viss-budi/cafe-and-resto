<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<!-- RESPONSIVE -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Coffee Shop</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f4f4;
}

.carousel-item img{
height:60vh;
object-fit:cover;
}

.card img{
height:200px;
object-fit:cover;
}

</style>

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="#">CoffeeShop</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?menu=about">About</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Menu</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="index.php?menu=makanan">Makanan</a></li>
                        <li><a class="dropdown-item" href="index.php?menu=minuman">Minuman</a></li>
                        <li><a class="dropdown-item" href="index.php?menu=coffee">Coffee</a></li>
                        <li><a class="dropdown-item" href="index.php?menu=dessert">Dessert</a></li></ul></li>

                <li class="nav-item"><a class="nav-link" href="index.php?menu=galeri">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php?menu=reservasi">Reservasi</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Menu -->
<section id="about" class="section-padding">
    <div class="container text-center">
        <p>
            <?php
            include"menu.php";
            ?>
        </p>
    </div>
</section>

<!-- FOOTER -->

<footer class="bg-dark text-white text-center p-4">
<p>© <?= date("Y") ?> Coffee Shop</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>