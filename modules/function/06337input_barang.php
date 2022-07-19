<?php
include_once '../../modules/config/06337connection.php';
if(isset($_POST['send'])){
    $kdbrg = $_POST['kdbrg'];
    $nmbrg = $_POST['nmbrg'];
    $hrgbrg = $_POST['hrgbrg'];
    $satuan = $_POST['satuan'];
    $gambar = $_FILES['filegbr']['name'];
    $path = "../../assets/temp/img/barang/";
    $temp = $_FILES['filegbr']['tmp_name'];
    move_uploaded_file($temp, $path.$gambar);

    // query insert data
    $query = "INSERT INTO barang VALUES ('$kdbrg', '$nmbrg', '$hrgbrg', '$satuan', '$gambar')";
    $result = mysqli_query($conn, $query);
    if ($result){
        header("location:../../pages/06337input_pages.php");
    }else{
        echo "Error";
    }
}
?>