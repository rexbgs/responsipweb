<?php 

$date = date("d-m-Y");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jarak = $_POST['jarak'];
$biaya = $_POST['biaya'];

echo "<head><title>Proses Biaya</title></head>";
$fp = fopen("databiaya.txt", "a+");
fputs($fp, "$date | $nama | $alamat | $jarak KM | Rp.$biaya\n");
fclose($fp);

?>

<!DOCTYPE html>
</php>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title> Responsi Pemrograman WEB </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    
    

</head>


<body>
    <script src="java.js"></script>
    <div class="bungkusan khusus">

        <div id="header">
            <p> Responsi Praktikum Pemrograman Web</p>
            <p id="decor"> "JASA PENGIRIMAN - JM_09"</p>
        </div>
        
        <div id="menu">
            <ul>
                <li><a href="index.php" onclick="menu()">Input Detail</a></li>
                <li><a href="data.php"  onclick="menu()">Data Biaya</a></li>
                <li id="kanan">
                    <a>
                        <?php
                            echo date("H:i:s - d/m/y");
                        ?>  
                    </a>
                </li>
            </ul>     
        </div>


        <div id="form">
            <p id="alret"> Simpan Berhasil !!!! </p>
        </div>


        <div id="bottom">
            <p> Copyright @2022 | Desaigned by Bagas Dwi Kurniawan - 2100018224 </p>
        </div>

    </div>


    
</body>
</html>

