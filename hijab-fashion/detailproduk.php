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
