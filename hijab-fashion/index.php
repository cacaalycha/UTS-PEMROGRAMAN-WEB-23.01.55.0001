<?php
$title = "Hijab Fashion - Home";
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chako Hijab Fashion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<style>
    .btn-dark {
        background-color: #D4BDAC !important;
        border-color: #D4BDAC !important;
        color: #fff;
    }
</style>

<!-- Banner Section -->
<section class="banner">
    <div class="banner-image">
        <img src="gambar/cover.jpeg" class="img-fluid" alt="Promo Hijab">
        <div class="banner-overlay">
            <h1>Welcome to Chako Hijab Fashion</h1>
            <p>Tampil cantik, anggun dan syar'i dengan koleksi hijab terbaik kami</p>
            <a href="produk.php" class="btn btn-dark btn-lg mt-3" style="color: #333 !important;">Lihat Koleksi</a>
        </div>
    </div>
</section>

<!-- Produk Section -->
<section class="produk container mt-5">
    <h2 class="text-center mb-4">Produk Terbaru</h2>
    <div class="row">
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card produk-card">
                <img src="gambar/silkhitam.jpg" class="card-img-top" alt="Hijab Pashmina Silk Hitam">
                <div class="card-body text-center">
                    <h5 class="card-title">Hijab Pashmina Silk Hitam</h5>
                    <p class="card-price">Rp65.000</p>
                    <a href="detailproduk.php?id=17" class="btn btn-dark btn-block" >Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card produk-card">
                <img src="gambar/silkmilo.jpg" class="card-img-top" alt="Hijab Pashmina Silk Milo">
                <div class="card-body text-center">
                    <h5 class="card-title">Hijab Pahmina Silk Milo</h5>
                    <p class="card-price">Rp65.000</p>
                    <a href="detailproduk.php?id=18" class="btn btn-dark btn-block" >Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card produk-card">
                <img src="gambar/silkhijau.jpg" class="card-img-top" alt="Hijab Pashmina Silk Hijau">
                <div class="card-body text-center">
                    <h5 class="card-title">Hijab Pashmina Silk Hijau</h5>
                    <p class="card-price">Rp65.000</p>
                    <a href="detailproduk.php?id=16" class="btn btn-dark btn-block" >Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card produk-card">
                <img src="gambar/bergodusty2.jpg" class="card-img-top" alt="Hijab Bergo Dusty">
                <div class="card-body text-center">
                    <h5 class="card-title">Hijab Bergo Dusty</h5>
                    <p class="card-price">Rp40.000</p>
                    <a href="detailproduk.php?id=15" class="btn btn-dark btn-block" >Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card produk-card">
                <img src="gambar/bergoltte.jpg" class="card-img-top" alt="Hijab Bergo Latte">
                <div class="card-body text-center">
                    <h5 class="card-title">Hijab Bergo Latte</h5>
                    <p class="card-price">Rp40.000</p>
                    <a href="detailproduk.php?id=14" class="btn btn-dark btn-block" >Detail</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card produk-card">
                <img src="gambar/bergomerah2.jpg" class="card-img-top" alt="Hijab Bergo Merah">
                <div class="card-body text-center">
                    <h5 class="card-title">Hijab Bergo Merah</h5>
                    <p class="card-price">Rp40.000</p>
                    <a href="detailproduk.php?id=13" class="btn btn-dark btn-block" >Detail</a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include('footer.php'); ?>