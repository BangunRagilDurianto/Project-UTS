<?php
include_once("koneksi.php");

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $stock = $_POST['stock'];

    $result = mysqli_query($mysqli, "INSERT INTO modal(nama,harga,stock) VALUES ('$nama', '$harga', '$stock')");
    header("Location: read.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gitar Akustik Store</title>
    <link rel="stylesheet" href="style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container m-5">
        <h1 class="mx-5">CRUD Toko Gitar Akustik</h1>
        <form name="form" method="post" action="create.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Gitar</label>
                <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" name="harga" class="form-control" id="harga" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stok</label>
                <input type="text" name="stock" class="form-control" id="stock" aria-describedby="emailHelp">
            </div>

            <button type="submit" name="submit" class="btn btn-primary" style="--clr:#1e9bff">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>