<?php

$conn = mysqli_connect("localhost", "root", "", "comfort");


function daftar($data)
{
    global $conn;

    $email = stripslashes($data["email"]);
    $password = mysqli_real_escape_string($conn, $data["password"]);
    if ($email == "admin@gmail.com") {
        $user = "admin";
    } else {
        $user = "user";
    }

    // cek user sudah ada atau belum
    $result = mysqli_query($conn, "SELECT email FROM tb_user WHERE email = '$email'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah terdaftar');
        </script>";
        return false;
    }


    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO tb_user VALUES ('','$email','','$password','','','$user')");

    return mysqli_affected_rows($conn);
}
