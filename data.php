<?php 

echo "<head><title>Data Biaya</title></head>";
$fp = fopen("databiaya.txt", "r");
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
                <li><a   href="index.php" onclick="menu()">Input Detail</a></li>
                <li><a   href="data.php"  onclick="menu()">Data Biaya</a></li>
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
            <?php
            echo ("<center><h1><h1>Table Data Biaya</h1>");
            echo "<table border='1' width='70%' style='text-align: center'>";
            echo "<tr style='background-color: #F7E2E2';><td>Tanggal </td> <td>Nama </td><td>Alamat </td><td>Jarak (KM) </td><td>Total (Rp)</td></tr>";

            while ($isi = fgets($fp)) {
            $pisah = explode('|', $isi);
            echo "<tr><td>$pisah[0]</td> <td>$pisah[1] </td><td>$pisah[2] </td><td>$pisah[3] </td><td>$pisah[4] </td></tr>";
            }

            echo "</table>";
            
            ?>
        </div>


        <div id="bottom">
            <p> Copyright @2022 | Desaigned by Bagas Dwi Kurniawan - 2100018224 </p>
        </div>

    </div>


    
</body>
</html>


    
    
    
    
    



