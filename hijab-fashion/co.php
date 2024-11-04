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
