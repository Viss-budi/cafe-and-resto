<?php
session_start();

$success = false;

if(isset($_POST['reservasi'])){

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$orang = $_POST['orang'];
$meja = $_POST['meja'];
$catatan = $_POST['catatan'];

$success = true;

}
?>

<style>

.hero{
height:40vh;
background:url('https://images.unsplash.com/photo-1414235077428-338989a2e8c0');
background-size:cover;
background-position:center;
display:flex;
align-items:center;
justify-content:center;
color:white;
text-shadow:0 3px 10px rgba(0,0,0,0.6);
}

.form-box{
background:white;
padding:30px;
border-radius:15px;
box-shadow:0 5px 20px rgba(0,0,0,0.1);
}

.info-box{
background:#fff3cd;
padding:20px;
border-radius:10px;
}

</style>


<!-- HERO -->

<div class="hero">
<h1>Reservasi Meja</h1>
</div>


<!-- CONTENT -->

<div class="container py-5">

<div class="row">

<!-- FORM -->

<div class="col-md-7">

<div class="form-box">

<h3 class="mb-4">Form Reservasi</h3>

<?php if($success): ?>

<div class="alert alert-success">
Reservasi berhasil dikirim! Admin akan segera menghubungi Anda.
</div>

<?php endif; ?>

<form method="post">

<div class="mb-3">
<label>Nama Lengkap</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="mb-3">
<label>No WhatsApp</label>
<input type="text" name="hp" class="form-control" required>
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" class="form-control">
</div>

<div class="row">

<div class="col-md-6 mb-3">
<label>Tanggal Reservasi</label>
<input type="date" name="tanggal" class="form-control" required>
</div>

<div class="col-md-6 mb-3">
<label>Jam</label>
<input type="time" name="jam" class="form-control" required>
</div>

</div>

<div class="mb-3">
<label>Jumlah Orang</label>
<input type="number" name="orang" class="form-control" required>
</div>

<div class="mb-3">
<label>Pilihan Area</label>
<select name="meja" class="form-control">

<option>Indoor</option>
<option>Outdoor</option>
<option>VIP Room</option>

</select>
</div>

<div class="mb-3">
<label>Catatan</label>
<textarea name="catatan" class="form-control"></textarea>
</div>

<button name="reservasi" class="btn btn-dark w-100">
Pesan Sekarang
</button>

</form>

</div>

</div>


<!-- INFO -->

<div class="col-md-5">

<div class="info-box mb-4">

<h5>Jam Operasional</h5>

<p>
Senin - Jumat : 10.00 - 22.00 <br>
Sabtu - Minggu : 09.00 - 23.00
</p>

</div>

<div class="info-box">

<h5>Informasi Reservasi</h5>

<ul>
<li>Reservasi minimal 2 jam sebelum datang</li>
<li>Kapasitas maksimal 10 orang per meja</li>
<li>Acara besar silakan hubungi admin</li>
<li>Pembatalan maksimal H-1</li>
</ul>

</div>

</div>

</div>

</div>