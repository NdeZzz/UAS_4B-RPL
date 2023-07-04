<?php 
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$admin = mysqli_query ($koneksi,"SELECT * FROM petugas WHERE username='$username' and password='$password'");
$log = mysqli_num_rows($admin);
$r = mysqli_fetch_array($admin);
if ($log > 0){
	$_SESSION['username']= $username;
	$_SESSION['password']= $password;
	$_SESSION['level']= $r['level'];
	if ($r['level']=='admin'){
		echo " <script> location.href='petugas/admin.php'</script>";
	}elseif ($r['level']=='resepsionis'){
		echo " <script> location.href='petugas/resepsionis.php'</script>";
} else {
	header("location:login.php?login gagal") ;
}
}else{
	header("location:login.php?login gagal") ;
}
 ?>