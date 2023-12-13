<?php
include 'koneksi.php'; // Pindahkan ini ke atas untuk memastikan koneksi telah dibuat

if (isset($_POST["submit"])) {
    // Perhatikan bahwa kita perlu mendefinisikan $sql terlebih dahulu
    $nama_game = $_POST['nama_game'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO games (nama_game, deskripsi) VALUES ('$nama_game', '$deskripsi')";

    if ($conn->query($sql) === TRUE) {
        echo "
        <script>
            alert ('data berhasil ditambahkan');
            document.location.href='index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert ('data gagal ditambahkan');
            document.location.href='index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Game</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Tambah Data Game</h2>

        <form action="" method="post">
            <div class="form-group">
                <label for="nama_game">Nama Game:</label>
                <input type="text" class="form-control" id="nama_game" name="nama_game" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-success">Tambah</button>
        </form>

        <br>
        <a href="index.php" class="btn btn-primary">Kembali ke Daftar Game</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
