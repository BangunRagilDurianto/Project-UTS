<?php
include_once("koneksi.php");

$angka = 0;

$result = mysqli_query($mysqli, "SELECT * FROM modal WHERE id");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gitar Akustik Store</title>
    <link rel="stylesheet" href="style/style1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container m-5">
        <h1 class="mx-5">CRUD Toko Gitar Akustik</h1>
        <a href="create.php">
            <button class="btn btn-primary mx-5" style="--clr:#1e9bff">Tambah</button>
        </a>
        <table class="table container m-5">
            <thead>
                <tr class="tabel">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stock</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- <tr>
                    <th scope="row">1</th>
                    <td>Cupang</td>
                    <td>5000</td>
                    <td>12</td>
                    <td>
                        <a href="#">✏edit</a> | <a href="#">🗑 Delete</a>
                    </td> -->
                <?php while ($res = mysqli_fetch_array($result)) {
                    $angka++;
                    echo '<tr>';
                    echo '<th scope="row">' . $angka . '</th>';
                    echo '<td>' . $res['nama'] . '</td>';
                    echo '<td>' . $res['harga'] . '</td>';
                    echo '<td>' . $res['stock'] . '</td>';
                    echo '<td>';
                    echo '<a href="update.php?id=
                    ' . $res['id'] . '    
                    ">✏Edit</a> | 
                    <a href="delete.php?id=
                    ' . $res['id'] . '
                    ">🗑 Hapus</a>';
                    echo '</td>';
                } ?>
                </tr>


            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>