<!-- checkout.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Halal Food Sulawesi</title>
</head>

<body>
    <h2>Checkout</h2>
    <!-- Formulir pengiriman -->
    <form action="{{ route('process-checkout') }}" method="POST">
        @csrf
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="alamat">Alamat:</label>
        <textarea id="alamat" name="alamat" rows="4" required></textarea><br><br>

        <label for="telepon">Nomor Telepon:</label>
        <input type="text" id="telepon" name="telepon" required><br><br>

        <!-- Opsi pembayaran -->
        <h3>Opsi Pembayaran</h3>
        <p>Simulasi pembayaran tanpa pihak ketiga.</p>

        <!-- Ringkasan pesanan -->
        <h3>Ringkasan Pesanan</h3>
        <p>Total Harga: Rp 25.000,00</p>

        <button type="submit">Konfirmasi Pesanan</button>
    </form>
</body>

</html>