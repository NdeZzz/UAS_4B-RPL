<?php
$servername = "localhost";
$username	= "root";
$password	= "";
$database	= "db_hotel";

$koneksi = mysqli_connect("localhost", "root", "", "db_hotel");

//cek koneksi
if (mysqli_connect_errno()) {
	echo "koneksi database gagal: " . mysqli_connect_error();
}
