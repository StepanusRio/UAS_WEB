<?php
$title = "Data Tabel Barang";
include_once '../../assets/vendor/autoload.php';
include_once '../config/06337connection.php';
$no = 1;
$query = "SELECT * FROM barang";
$result = mysqli_query($conn, $query);

$html .= '
<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>' . $title . '</title>
</head>
';
$html = '
<body id="page-top">
    <h1>' . $title . '</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">'.$title.'</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table border="1" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Gambar</th>
                        </tr>';
$i = 1;
while ($row = mysqli_fetch_array($result)) {
    $html .= '
                            <tr>
                                <td>' . $i++ . '</td>
                                <td>' . $row["kdbrg"] . '</td>
                                <td>' . $row["nmbrg"] . '</td>
                                <td>' . $row["hrgbrg"] . '</td>
                                <td><img src="../../assets/temp/img/barang/' . $row["filegbr"] . '" alt="' . $row["nmbrg"] . '" width="100"></td>
                            </tr>
                            ';
}
$html .=        '
                    </thead>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
';
$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$mpdf->Output();
