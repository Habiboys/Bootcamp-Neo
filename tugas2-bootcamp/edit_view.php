<?php
include 'koneksi.php';
$id = $_GET['id_game'];
$sql = "SELECT * FROM games WHERE id_game='$id'";
$result = $conn->query($sql);
$game = $result->fetch_assoc();


if (isset($_POST["submit"])) {
$id_game1 = $_POST['id_game'];
$nama_game = $_POST['nama_game'];
$deskripsi = $_POST['deskripsi'];

$edit = "UPDATE games SET nama_game='$nama_game', deskripsi='$deskripsi' WHERE id_game='$id_game1'";

if ($conn->query($edit) === TRUE) {
    echo "
    <script>
        alert ('data berhasil diubah');
        document.location.href='index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert ('data gagal diuabh');
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
    <title>Edit Data Game</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">

        <h2>Edit Data Game</h2>

        <form action="" method="post">
            <input type="hidden" name="id_game" value="<?php echo $game['id_game']; ?>">

            <div class="mb-3">
                <label for="nama_game" class="form-label">Nama Game</label>
                <input type="text" class="form-control" id="nama_game" name="nama_game" value="<?php echo $game['nama_game']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="4" required><?php echo $game['deskripsi']; ?></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

        <br>
        <a href="index.php" class="btn btn-secondary">Kembali ke Daftar Game</a>
    </div>

    <!-- Tambahkan link Bootstrap JS dan Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>

</html>