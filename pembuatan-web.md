Langkah 1: Persiapan Lingkungan
<br />
Pastikan XAMPP sudah terinstal dan berjalan.
Buat folder baru di htdocs dengan nama hijab-fashion.
<br />
Langkah 2: Membuat Halaman Web
-Buat File index.php (Halaman Home)
```php
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
```
<br />

-Buat File produk.php
```php
<?php
$title = "Hijab Fashion - Produk";
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

<!-- Produk Section -->
<section class="produk container mt-5">
    <h2 class="text-center">Katalog Chako Hijab Fashion</h2> <br>
    <div class="row">
        <?php
        // Contoh data produk
        $products = [
            ["id" => 1, "name" => "Hijab Instan Putih", "price" => 70000, "image" => "gambar/instanputih.jpg"],
            ["id" => 2, "name" => "Hijab Instan Abu-abu", "price" => 70000, "image" => "gambar/instanabu.jpg"],
            ["id" => 3, "name" => "Hijab Instan Coklat", "price" => 70000, "image" => "gambar/instancoklat.jpg"],
            ["id" => 4, "name" => "Hijab Paris Coklat", "price" => 30000, "image" => "gambar/pariscklt.jpeg"],
            ["id" => 5, "name" => "Hijab Paris Putih", "price" => 30000, "image" => "gambar/parisputih.jpeg"],
            ["id" => 6, "name" => "Hijab Paris Hitam", "price" => 30000, "image" => "gambar/parishitam.jpeg"],
            ["id" => 7, "name" => "Hijab Pashmina Ash Grey", "price" => 50000, "image" => "gambar/pasminaabu.jpg"],
            ["id" => 8, "name" => "Hijab Pasmhina Sage", "price" => 50000, "image" => "gambar/pasminahijau.jpeg"],
            ["id" => 9, "name" => "Hijab Pasmhina Lavender", "price" => 50000, "image" => "gambar/pasminaungu.jpeg"],
            ["id" => 10, "name" => "Hijab Sport Magenta", "price" => 35000, "image" => "gambar/sportpink.jpeg"],
            ["id" => 11, "name" => "Hijab Sport Denim", "price" => 35000, "image" => "gambar/sportdenim.jpeg"],
            ["id" => 12, "name" => "Hijab Sport Tosca", "price" => 35000, "image" => "gambar/sporthijau.jpeg"],
            ["id" => 13, "name" => "Hijab Bergo Merah", "price" => 40000, "image" => "gambar/bergomerah.jpeg"],
            ["id" => 14, "name" => "Hijab Bergo Latte", "price" => 40000, "image" => "gambar/bergoltte.jpg"],
            ["id" => 15, "name" => "Hijab Bergo Dusty", "price" => 40000, "image" => "gambar/bergodusty.jpg"],
            ["id" => 16, "name" => "Hijab Pashmina Silk Hijau", "price" => 65000, "image" => "gambar/silkhijau.jpg"],
            ["id" => 17, "name" => "Hijab Pashmina Silk Hitam", "price" => 65000, "image" => "gambar/silkhitam.jpg"],
            ["id" => 18, "name" => "Hijab Pashmina Silk Milo", "price" => 65000, "image" => "gambar/silkmilo.jpg"],
        ];

        // Menampilkan setiap produk
        foreach ($products as $product) {
            echo '
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card produk-card">
                        <img src="' . $product['image'] . '" class="card-img-top" alt="' . $product['name'] . '">
                        <div class="card-body text-center">
                            <h5 class="card-title">' . $product['name'] . '</h5>
                            <p class="card-price">Rp' . number_format($product['price'], 0, ',', '.') . '</p>
                            <a href="detailproduk.php?id=' . $product['id'] . '" class="btn btn-dark btn-block">Detail Produk</a>
                        </div>
                    </div>
                </div>
            ';
        }
        ?>
    </div>
</section>

<?php include 'footer.php'; ?>
```
<br />

-Buat File detailproduk.php
```php
<?php
// Mengatur title halaman
$title = "Detail Produk - Hijab Fashion";
include('header.php');

// Data produk yang sama dengan yang ada di produk.php
$products = [
    ["id" => 1, "name" => "Hijab Instan Putih", "price" => 70000, "description" => "Hijab instan premium warna putih cocok digunakan untuk ke sekolah, olahraga, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br>Panjang depan = 45 cm <br>Panjang belakang = 80 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/instanputih.jpg", "image2" => "gambar/instanputih2.jpg"],
    ["id" => 2, "name" => "Hijab Instan Abu-abu", "price" => 70000, "description" => "Hijab instan premium warna abu-abu cocok digunakan untuk ke sekolah, olahraga, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br>Panjang depan = 45 cm <br>Panjang belakang = 80 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/instanabu.jpg", "image2" => "gambar/instanabu2.jpg"],
    ["id" => 3, "name" => "Hijab Instan Coklat", "price" => 70000, "description" => "Hijab paris premium warna coklat cocok digunakan untuk ke sekolah, olahraga, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br>Panjang depan = 45 cm <br>Panjang belakang = 80 cm <br>Mohon toleransi selisih 1-2 cm<br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/instancoklat.jpg", "image2" => "gambar/instancoklat2.jpg"],
    ["id" => 4, "name" => "Hijab Paris Coklat", "price" => 30000, "description" => "Hijab paris premium warna coklat cocok digunakan untuk ke sekolah, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br> 110 cm x 110 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/pariscklt.jpeg", "image2" => "gambar/pariscklt2.jpeg"],
    ["id" => 5, "name" => "Hijab Paris Putih", "price" => 30000, "description" => "Hijab paris premium warna putih cocok digunakan untuk ke sekolah, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br> 110 cm x 110 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/parisputih.jpeg", "image2" => "gambar/parisputih2.jpeg"],
    ["id" => 6, "name" => "Hijab Paris Hitam", "price" => 30000, "description" => "Hijab pasmina premium warna hitam cocok digunakan untuk ke sekolah, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br> 110 cm x 110 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/parishitam.jpeg", "image2" => "gambar/parishitam2.jpeg"],
    ["id" => 7, "name" => "Hijab Pashmina Ash Grey", "price" => 50000, "description" => "Hijab pashmina ceruty premium warna ash grey cocok digunakan untuk ke acara penting, aktivitas sehari-hari dan semua kegiatan. <br> <br>Ukuran: <br> 175 cm x 70 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/pasminaabu.jpg", "image2" => "gambar/pasminaabu2.jpg"],
    ["id" => 8, "name" => "Hijab Pashmina Sage", "price" => 50000, "description" => "Hijab pashmina ceruty premium warna hijau sage cocok digunakan untuk ke acara penting, aktivitas sehari-hari dan semua kegiatan. <br> <br>Ukuran: <br> 175 cm x 70 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/pasminahijau.jpeg", "image2" => "gambar/pasminahijau2.jpg"],
    ["id" => 9, "name" => "Hijab Pashmina Lavender", "price" => 50000, "description" => "Hijab pashmina ceruty premium warna ungu lavender cocok digunakan untuk ke acara penting, aktivitas sehari-hari dan semua kegiatan. <br> <br>Ukuran: <br> 175 cm x 70 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/pasminaungu.jpeg", "image2" => "gambar/pasminaungu2.jpeg"],
    ["id" => 10, "name" => "Hijab Sport Magenta", "price" => 35000, "description" => "Hijab sport instan premium warna magenta cocok digunakan untuk olahraga, dan aktivitas sehari-hari. <br> <br>Ukuran: <br>Panjang depan = 48 cm <br>Panjang belakang = 77 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/sportpink.jpeg", "image2" => "gambar/sportpink2.jpeg"],
    ["id" => 11, "name" => "Hijab Sport Denim", "price" => 35000, "description" => "Hijab sport instan premium warna biru denim cocok digunakan untuk olahraga, dan aktivitas sehari-hari. <br> <br>Ukuran: <br>Panjang depan = 48 cm <br>Panjang belakang = 77 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/sportdenim.jpeg", "image2" => "gambar/sportdenim2.jpg"],
    ["id" => 12, "name" => "Hijab Sport Tosca", "price" => 35000, "description" => "Hijab sport instan premium warna hijau tosca cocok digunakan untuk olahraga, dan aktivitas sehari-hari. <br> <br>Ukuran: <br>Panjang depan = 48 cm <br>Panjang belakang = 77 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/sporthijau.jpeg", "image2" => "gambar/sporthijau2.jpeg"],
    ["id" => 13, "name" => "Hijab Bergo Merah", "price" => 40000, "description" => "Hijab bergo instan premium warna merah cocok digunakan untuk olahraga, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br>Panjang depan = 65 cm <br>Panjang belakang = 75 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/bergomerah.jpeg", "image2" => "gambar/bergomerah2.jpg"],
    ["id" => 14, "name" => "Hijab Bergo Latte", "price" => 40000, "description" => "Hijab bergo instan premium warna coklat latte cocok digunakan untuk olahraga, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br>Panjang depan = 65 cm <br>Panjang belakang = 75 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/bergoltte.jpg", "image2" => "gambar/bergoltte2.jpg"],
    ["id" => 15, "name" => "Hijab Bergo Dusty", "price" => 40000, "description" => "Hijab bergo instan premium warna dusty pink cocok digunakan untuk olahraga, aktivitas sehari-hari dan semua acara. <br> <br>Ukuran: <br>Panjang depan = 65 cm <br>Panjang belakang = 75 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/bergodusty.jpg", "image2" => "gambar/bergodusty2.jpg"],
    ["id" => 16, "name" => "Hijab Pashmina Silk Hijau", "price" => 65000, "description" => "Hijab pashmina satin silk premium warna hijau cocok digunakan untuk ke acara penting, aktivitas sehari-hari dan semua kegiatan. <br> <br>Ukuran: <br> 180 cm x 75 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/silkhijau.jpg", "image2" => "gambar/silkhijau2.jpg"],
    ["id" => 17, "name" => "Hijab Pashmina Silk Hitam", "price" => 65000, "description" => "Hijab pashmina satin silk premium warna hitam cocok digunakan untuk ke acara penting, aktivitas sehari-hari dan semua kegiatan. <br> <br>Ukuran: <br> 180 cm x 75 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/silkhitam.jpg", "image2" => "gambar/silkhitam2.jpeg"],
    ["id" => 18, "name" => "Hijab Pashmina Silk Milo", "price" => 65000, "description" => "Hijab pashmina satin silk premium warna coklat milo cocok digunakan untuk ke acara penting, aktivitas sehari-hari dan semua kegiatan. <br> <br>Ukuran: <br> 180 cm x 75 cm <br>Mohon toleransi selisih 1-2 cm <br><br>Catatan : Perbedaan warna sedikit dikarenakan efek pencahayaan", "image" => "gambar/silkmilo.jpg", "image2" => "gambar/silkmilo2.jpg"],
    
];

// Mendapatkan ID produk dari URL
$product_id = isset($_GET['id']) ? $_GET['id'] : null;
$product = null;

// Mencari produk berdasarkan ID
foreach ($products as $item) {
    if ($item['id'] == $product_id) {
        $product = $item;
        break;
    }
}
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
    .img-thumbnail {
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    #mainImage {
        width: 100%;
        max-height: 600px;
        object-fit: cover;
    }
</style>

<section class="container mt-5">
    <?php if ($product): ?>
        <div class="row">
            <!-- Gambar Produk -->
            <div class="col-md-6">
                <img id="mainImage" src="<?php echo $product['image']; ?>" class="img-fluid mb-2" alt="<?php echo $product['name']; ?>">
                
                <!-- Thumbnail Gambar -->
                <div class="d-flex">
                    <img onclick="changeImage('<?php echo $product['image']; ?>')" src="<?php echo $product['image']; ?>" class="img-thumbnail mr-2" style="width: 100px; cursor: pointer;" alt="Gambar 1">
                    <img onclick="changeImage('<?php echo $product['image2']; ?>')" src="<?php echo $product['image2']; ?>" class="img-thumbnail" style="width: 100px; cursor: pointer;" alt="Gambar 2">
                </div>
            </div>

            <!-- Detail Produk -->
            <div class="col-md-6">
                <h2><?php echo $product['name']; ?></h2>
                <p class="text-muted">Harga: Rp<?php echo number_format($product['price'], 0, ',', '.'); ?></p>
                <p><?php echo $product['description']; ?></p>
                <br>

                <!-- Tombol Tambah ke Keranjang -->
                <input type="hidden" name="add" value="<?php echo $product['id']; ?>">
                <a href="co.php?add=<?php echo $product['id']; ?>" class="btn btn-dark btn-block">Tambah ke Keranjang</a>
            </div>
        </div>
    <?php else: ?>
        <p class="text-center">Produk tidak ditemukan.</p>
    <?php endif; ?>
</section>

<script>
    // JavaScript untuk mengganti gambar utama
    function changeImage(image) {
        document.getElementById("mainImage").src = image;
    }
</script>


<?php include('footer.php'); ?>
```
<br />

-Buat File kontak.php
```php
<?php
$title = "Hijab Fashion - Tentang Kami";
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chako Hijab Fashion - Tentang Kami</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">
    <h2>Tentang Kami</h2>
    <p>Chako Hijab Fashion adalah merek hijab yang berkomitmen untuk menghadirkan produk hijab berkualitas tinggi dan gaya yang elegan untuk wanita muslim. Dengan berbagai pilihan hijab seperti hijab instan, hijab pashmina, hingga hijab sport, kami memastikan setiap produk kami dirancang dengan mempertimbangkan kenyamanan dan kecantikan.</p>
    
    <p>Didirikan di Semarang, Jawa Tengah, kami bangga menjadi salah satu merek lokal yang menawarkan produk dengan kualitas unggul dan harga terjangkau. Kami percaya bahwa hijab bukan hanya sekadar penutup kepala, tetapi juga sebuah ekspresi dari jati diri setiap wanita muslim.</p>
    
    <p>Di Chako Hijab Fashion, kami berkomitmen untuk terus berinovasi dan memberikan pelayanan terbaik kepada pelanggan. Terima kasih atas kepercayaan dan dukungan Anda.</p>
    <br>

    <h3>Visi Kami</h3>
    <p>Menjadi merek hijab pilihan utama yang menyediakan hijab modern dan nyaman untuk setiap wanita muslim di Indonesia.</p>
    <br>

    <h3>Misi Kami</h3>
    <ul>
        <li>Menyediakan produk hijab berkualitas dengan harga yang bersaing.</li>
        <li>Berinovasi dalam desain dan bahan hijab untuk meningkatkan kenyamanan.</li>
        <li>Menyebarkan nilai positif dan inspirasi melalui fashion hijab.</li>
    </ul>
    <br>
</div>

<?php include('footer.php'); ?>
```
<br />

-Buat File co.php
```php
<?php
session_start();
$title = "Hijab Fashion - Checkout";
include('header.php');

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Mendapatkan data produk dari URL
$product_id = isset($_GET['add']) ? $_GET['add'] : null;
$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : 1;

$products = [
    1 => ["name" => "Hijab Instan Putih", "price" => 70000],
    2 => ["name" => "Hijab Instan Abu-abu", "price" => 70000],
    3 => ["name" => "Hijab Instan Coklat", "price" => 70000],
    4 => ["name" => "Hijab Paris Coklat", "price" => 30000],
    5 => ["name" => "Hijab Paris Putih", "price" => 30000],
    6 => ["name" => "Hijab Paris Hitam", "price" => 30000],
    7 => ["name" => "Hijab Pashmina Ash Grey", "price" => 50000],
    8 => ["name" => "Hijab Pashmina Sage", "price" => 50000],
    9 => ["name" => "Hijab Pashmina Lavender", "price" => 50000],
    10 => ["name" => "Hijab Sport Magenta", "price" => 35000],
    11 => ["name" => "Hijab Sport Denim", "price" => 35000],
    12 => ["name" => "Hijab Sport Tosca", "price" => 35000],
    13 => ["name" => "Hijab Bergo Merah", "price" => 40000],
    14 => ["name" => "Hijab Bergo Latte", "price" => 40000],
    15 => ["name" => "Hijab Bergo Dusty", "price" => 40000],
    16 => ["name" => "Hijab Pashmina Silk Hijau", "price" => 65000],
    17 => ["name" => "Hijab Pashmina Silk Hitam", "price" => 65000],
    18 => ["name" => "Hijab Pashmina Silk Milo", "price" => 65000],
];

if ($product_id && isset($products[$product_id])) {
    $product = $products[$product_id];
} else {
    header('Location: index.php');
    exit();
}
// Menghitung total harga
$total_price = $product['price'] * $quantity;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment-method'];
    $quantity = $_POST['quantity'];
    $total_price = $product['price'] * $quantity;

    // Query untuk menyimpan data ke tabel orders
    $stmt = $conn->prepare("INSERT INTO orders (name, email, phone, address, product_name, quantity, total_price, payment_method) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if ($stmt === false) {
        die("Error in prepare: " . htmlspecialchars($conn->error));
    }
    
    $stmt->bind_param("sssssis", $name, $email, $phone, $address, $product['name'], $quantity, $total_price, $payment_method);

    // Debug: tampilkan query yang akan dieksekusi
    $query = "INSERT INTO orders (name, email, phone, address, product_name, quantity, total_price, payment_method) VALUES ('$name', '$email', '$phone', '$address', '" . $product['name'] . "', $quantity, $total_price, '$payment_method')";
    echo "Query: $query"; // Debugging

    if ($stmt->execute()) {
        $conn->commit();
        echo "<script>alert('Pesanan berhasil diproses!'); window.location.href = 'index.php';</script>";
    } else {
        error_log("Query error: " . $stmt->error . "\n", 3, "error_log.txt"); // Tuliskan error ke file
        echo "Terjadi error saat memproses pesanan.";
    }
    
    $stmt->close();
    $conn->close();
}
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

<!-- Form Pemesanan -->
<section class="container mt-5">
    <h2>Formulir Pemesanan</h2>
    <form method="POST" action="">
    <div class="form-group">
        <label for="name">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="phone">Nomor Telepon</label>
        <input type="tel" class="form-control" id="phone" name="phone" required>
    </div>
    <div class="form-group">
        <label for="address">Alamat Lengkap</label>
        <textarea class="form-control" id="address" name="address" rows="3" required></textarea>
    </div>
    
    <!-- Field Jumlah Pembelian -->
    <div class="form-group">
            <label for="quantity">Jumlah Pembelian</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="<?php echo $quantity; ?>" min="1" required>
        </div>

        <!-- Tampilkan Ringkasan Pesanan -->
        <h4>Ringkasan Pesanan</h4>
        <p><?php echo $product['name']; ?> - Rp<?php echo number_format($product['price'], 0, ',', '.'); ?></p>
        <p style="color: red;">Total bayar: Rp<span id="total-price"><?php echo number_format($total_price, 0, ',', '.'); ?></span></p>

        <div class="form-group">
            <label for="payment-method">Metode Pembayaran</label>
            <select class="form-control" id="payment-method" name="payment-method" required>
                <option>Transfer Bank BCA</option>
                <option>Transfer Bank BNI</option>
                <option>Transfer Bank BRI</option>
                <option>Transfer Bank BSI</option>
                <option>Transfer Bank Mandiri</option>
                <option>DANA</option>
                <option>OVO</option>
                <option>Gopay</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Proses Pesanan</button>
    </form>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    // Script untuk update total price saat quantity diubah
    $(document).ready(function() {
        $('#quantity').on('input', function() {
            var price = <?php echo $product['price']; ?>;
            var quantity = $(this).val();
            var total = price * quantity;
            $('#total-price').text(total.toLocaleString('id-ID'));
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php include('footer.php'); ?>
```
<br />

-Buat File header.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hijab Fashion</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-mTfKy1j8vZubJ0vLTuXXAsjJzShj42saTVtG6HYhTCfay6DXMWBhwg/qH4D3d1Vh4yYPs2Gxiy1v7BvUuhWBCQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Tambahkan Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
</head>
<body>

<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light justify-content-between">
            <a class="navbar-brand" href="index.php">Chako Hijab Fashion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php"><i class="fas fa-home"></i> Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="produk.php">Produk</a></li>
                    <li class="nav-item"><a class="nav-link" href="kontak.php">Tentang Kami</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
```
<br />

-Buat File footer.php
```php
<footer class="footer mt-5 py-4  text-dark">
    <div class="container d-flex flex-column align-items-center text-center">
        <div class="row justify-content-center w-100">
            <div class="col-md-4 text-center">
                <h5>Kontak Kami</h5>
                <p>Email: info@chakohijabfashion.com</p>
                <p>WhatsApp: <a href="https://wa.me/6281234567890" target="_blank" class="text-dark">+62 812 3456 7890</a></p>
            </div>
        </div>
        <hr class="bg-dark w-100">
        <p class="mb-0">&copy; <?php echo date("Y"); ?> Chako Hijab Fashion. All Rights Reserved.</p>
    </div>
</footer>

<!-- Script tambahan -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Ikon media sosial -->
<script src="script.js"></script>
</body>
</html>
```
<br />

-Buat Folder gambar/
Tempatkan gambar peoduk disini