<?php
include '../config/06337connection.php';
$id = $_GET['kdbrg'];
$queryShow = "SELECT * FROM barang WHERE kdbrg = '$id'";
$sqlShow = mysqli_query($conn, $queryShow);
$result = mysqli_fetch_assoc($sqlShow);
// var_dump($result);
unlink("../../assets/temp/img/barang/".$result['filegbr']);

$sqldelete = "DELETE FROM barang WHERE kdbrg = '$id'";
$sql = mysqli_query($conn, $sqldelete);
if ($sql) {
    header("location:../../pages/06337show_pages.php");
} else {
    echo "gagal";
}
?>