<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$name          = $_POST['name'];
$address       = $_POST['address'];
$gender        = $_POST['gender'];
$negara        = $_POST['negara'];
$kota          = $_POST['kota'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$pincode       = $_POST['pincode'];
$email         = $_POST['email'];
$username      = $_POST['username'];
$password      = $_POST['password'];

// query SQL untuk insert data
$query = "INSERT INTO user SET id='',nama='$name',alamat='$address',gender='$gender',negara='$negara',kota='$kota',tanggal_lahir='$tanggal_lahir',pincode='$pincode',email='$email',username='$username',pswd='$password'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
