<?php
include_once("koneksi.php");

if (isset($_GET['update'])) {
    $id = $_GET['id'];

    $nama = $_GET['nama'];
    $harga = $_GET['harga'];
    $stock = $_GET['stock'];

    $result = mysqli_query($mysqli, "UPDATE modal SET nama='$nama', harga='$harga', stock='$stock' WHERE id=$id ");
    header("Location: read.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM modal WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
    $nama = $res['nama'];
    $harga = $res['harga'];
    $stock = $res['stock'];
}

?>

<body>
    <div class="container m-5">
        <h1 class="mx-5">CRUD kedai ikan</h1>
        <form name="form" method="get" action="update.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" id="nama" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">harga</label>
                <input type="text" name="harga" class="form-control" id="harga" value="<?php echo $harga; ?>" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">stock</label>
                <input type="text" name="stock" class="form-control" id="stock" value="<?php echo $stock; ?>" aria-describedby="emailHelp">
            </div>
            <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>>
            <button type="submit" name="update" value="update" class="btn btn-primary">update</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>