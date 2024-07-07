<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Tambah Produk</title>

    <style>
    body {
        background-color: #f8f9fa;
        /* Warna latar belakang */
        font-family: Arial, sans-serif;
    }

    .container {
        margin-top: 50px;
    }

    .form-container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .form-title {
        color: #dc3545;
        text-align: center;
        margin-bottom: 30px;
    }

    .form-control-label {
        font-weight: bold;
    }

    .btn-submit {
        background-color: #dc3545;
        color: #fff;
        border: none;
        width: 100%;
        padding: 10px;
        border-radius: 4px;
    }

    .btn-submit:hover {
        background-color: #c82333;
    }
    </style>
</head>

<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <h2 class="form-title">Tambah Produk</h2>

                    <form action="{{ route('tambah.simpan.produk') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="nama_produk" class="form-control-label">Nama Produk:</label>
                            <input type="text" class="form-control" id="nama_produk" name="nama_produk" required>
                        </div>

                        <div class="mb-3">
                            <label for="harga_produk" class="form-control-label">Harga:</label>
                            <input type="number" class="form-control" id="harga_produk" name="harga_produk" required>
                        </div>

                        <div class="mb-3">
                            <label for="kategori_produk" class="form-control-label">Kategori:</label>
                            <select class="form-select" id="kategori_produk" name="kategori_produk" required>
                                <option selected disabled>-- Pilih Kategori --</option>
                                <option value="1">Kategori 1</option>
                                <option value="2">Kategori 2</option>
                                <option value="3">Kategori 3</option>
                                <!-- Isi opsi dengan kategori produk yang sesuai -->
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="deskripsi_produk" class="form-control-label">Deskripsi:</label>
                            <textarea class="form-control" id="deskripsi_produk" name="deskripsi_produk" rows="3"
                                required></textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-submit">Simpan Produk</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>