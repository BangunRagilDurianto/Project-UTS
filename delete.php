<?php
include_once("koneksi.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "DELETE FROM modal WHERE id=$id");
header("location:read.php");
