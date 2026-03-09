<?php

if(isset($_GET['menu'])){
$menu = $_GET['menu'];
}
else{
$menu = "";
}

if($menu=="about"){
	include "about.php";
}

else if($menu=="galeri"){
	include "galeri.php";
}

else if($menu=="reservasi"){
	include "reservasi.php";
}

else if($menu=="makanan"){
	include "makanan.php";
}

else if($menu=="minuman"){
	include "minuman.php";
}

else if($menu=="coffee"){
	include "coffee.php";
}

else if($menu=="dessert"){
	include "dessert.php";
}

else{
	include "home.php";
}

?>