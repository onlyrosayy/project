<?php

$servername= "localhost:3306";
$dBUsername= "mahs_anewsom";
$dBPassword = "mustangs";
$dBName = "mahs_anewsom";

$conn = mysqli_connect($servername, $dBUsernam, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}