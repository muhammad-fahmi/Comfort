<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$username      = $_POST['username'];
$email         = $_POST['email'];
$password      = $_POST['password'];

// query SQL untuk insert data
$query = "INSERT INTO user SET id='',username='$username',email='$email',pswd='$password'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
