<?php
include '../config/06337connection.php';
var_dump($_POST);
if(isset($_POST['send'])){
    // Perintah Untuk Update Barang
    $kdbrg = $_POST['kdbrg'];
    $nmbrg = $_POST['nmbrg'];
    $hrgbrg = $_POST['hrgbrg'];
    $satuan = $_POST['satuan'];
    $gambar = $_FILES['filegbr']['name'];
    $path = "../../assets/temp/img/barang/";
    $temp = $_FILES['filegbr']['tmp_name'];
    move_uploaded_file($temp, $path.$gambar);

    // Query Update Barang
    $query = "UPDATE barang SET nmbrg = '$nmbrg', hrgbrg = '$hrgbrg', satuan = '$satuan', filegbr = '$gambar' WHERE kdbrg = '$kdbrg'";
    $result = mysqli_query($conn, $query);
    if ($result){
        echo "Berhasil";
    }else{
        echo "Error";
    }
    header("location:../../pages/06337dashboard.php");
}elseif (isset($_POST['cancle'])) {
    header("location:../../pages/06337dashboard.php");
}
?>