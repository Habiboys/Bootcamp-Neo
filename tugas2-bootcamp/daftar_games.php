<?php

include 'koneksi.php';

$sql = "SELECT * FROM games";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $games[] = $row;
    }
}
if (isset($_POST["submit"])) {
    $id_game = $_POST['id_game'];

// Query untuk menghapus data
$sql = "DELETE FROM games WHERE id_game='$id_game'";

if ($conn->query($sql) === TRUE) {
    echo"<script> alert ('Data Berhasil Dihapus')
    document.location.href='index.php';
    </script>";
} else {
    echo "Error deleting record: " . $conn->error;
}

}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
   
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">
            <a class="navbar-brand" href="#">Habibie Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Account</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </div>
    </nav>



    <div class="container">
        <br>
        <h3> Daftar Games</h3>
        <div class="col-md-2"><a href="tambah_view.php" class="btn btn-success">Tambah Data</a></div>
        <br>
        
        <?php if ($result->num_rows > 0) : ?>
            <table class="table">
                <tr class="table-light">
                    <th scope="col">ID</th>
                    <th scope="col">Nama Game</td>
                    <th scope="col">Deskripsi</td>
                    <th scope="col">Aksi</td>

                </tr>

                <?php foreach ($games as $g) : ?>
                    <tr>
                        <td><?= $g["id_game"] ?></td>
                        <td><?= $g["nama_game"] ?></td>
                        <td><?= $g["deskripsi"] ?></td>
                        <td>

                        <form action="" method="post">
                            <input type="hidden" name="id_game" value="<?= $g['id_game']; ?>">
                            <a href="edit_view.php?id_game=<?= $g['id_game']; ?>" class="btn btn-warning">Edit</a>
                            <button type="submit" name="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                            </form>
                        </td>
                    </tr>

                <?php

                endforeach;  ?>
            </table>
        <?php endif; ?>
      

    </div>
   



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>