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
