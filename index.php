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
                <li><a  href="index.php" onclick="menu()">Input Detail</a></li>
                <li><a  href="data.php"  onclick="menu()">Data Biaya</a></li>
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
            <form name="data" method="post" action="proses.php">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Nama Lengkap ... ">

                <label for="alamat">Alamat</label>
                <input type="text" id="alamat" name="alamat">

                <label for="jarak">Jarak (5000/Km)</label>
                <input type="text" id="jarak" name="jarak" placeholder="... Km">

                <input type="button" name="button" value="CEK BIAYA PENGIRIMAN" onclick="hitung()">

                <label for="biaya">Biaya Pengiriman</label>
                <input type="text" id="biaya" name="biaya">
  
                <input type="submit" name="submit" value="SIMPAN">
                <input type="reset" name="reset" value="RESET">



            </form>
        </div>


        <div id="bottom">
            <p> Copyright @2022 | Desaigned by Bagas Dwi Kurniawan - 2100018224 </p>
        </div>

    </div>


    
</body>
</html>