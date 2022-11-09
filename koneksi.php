<?php
$hostname = "localhost";
$db = "dbphp1";
$user = "root";
$pass = "";

$mysqli = mysqli_connect($hostname, $user, $pass, $db);

if (!$mysqli) {
    echo "eror";
}
