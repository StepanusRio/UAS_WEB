<?php
include '../config/06337connection.php';
session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $pass = md5($_POST['password']);
    $level = $_POST['level'];

    $sql = "SELECT * FROM tuser WHERE username = '$username' AND password = '$pass'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['level'] = $row['level'];
        $_SESSION['nama'] = $row['nama'];
        header('location: ../../pages/06337dashboard.php');
    }else{
        echo "<script>alert('Username atau Password Salah');</script>";
    }
}