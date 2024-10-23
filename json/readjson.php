<?php
session_start();
if(empty($_SESSION['username'])){
    header('location:loginjson.php');
}

$json_data = file_get_contents('databarang.json');
$databarang = json_decode($json_data,true);

$i = 1;
$indeks = 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA TAMU</title>
    <style>
        .table{
            margin: auto;
            margin-top: 30px;
            border-spacing: 0px;
            border-collapse: collapse; /* Menghilangkan spasi antara sel */
            /* width: 100%; Opsional, jika ingin tabel mengisi lebar kontainer */
        }
        th, td {
            border: none; /* Menghilangkan border */
            padding: 10px; /* Padding untuk sel */
        }
        th{
            background-color: skyblue;
            color: white;
            padding: 12px;
        }
        td{
            padding: 10px;
        }
        .option {
            justify-content: space-between; /* Mengatur jarak antara tautan */
        }
        .option a {
            margin-right: 50px; /* Atur jarak antara tautan */
        }
        /* PEWARNAAN BARIS GANJIL */
        tr:nth-child(even){ 
        background-color: #e4e4e4;
        }
        /* PEWARNAAN BARIS GENAP */
        tr:nth-child(odd){
            background-color: white;
        }
        .background {
            background-image: url('./connor.jpg');
            background-size: cover;
            background-position: center;
            position: absolute;
            top: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            background-repeat: no-repeat;
        }
        body {
            margin: 0;
            height: 100%;
            font-family: Arial, sans-serif;
        }
        h2{
            color: white;
            margin-left: 346px;
        }
        .button a{
            color: white;
            margin-left: 346px;
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="background"></div> <!-- Menambahkan div untuk background -->
    <div class="button">
        <a href="logoutjson.php" class="logout">Logout</a><br><br>
        <a href="createjson.php" class="tambah">+Add New Data</a>
    </div>
    <h2>Data Product CV. Jujur Utama</h2>
    <center>
    <table>
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Option</th>
        </tr>
        <?php foreach ($databarang as $dtb) { ?>
            <tr>
                <td>
                    <?=$i++?>
                </td>
                <td>
                    <?=$dtb['code']?>
                </td>
                <td>
                    <?=$dtb['name']?>
                </td>
                <td>
                    <?=$dtb['price']?>
                </td>
                <td>
                    <?=$dtb['stock']?>
                </td>
                <td class="option">
                        <!-- <button class="edit"> -->
                        <a href="updatejson.php?indeks=<?= $indeks ?>">Edit</a>
                        <!-- </button> -->
                       
                        <!-- <button class="delete"> -->
                            <a href="deletejson.php?indeks=<?= $indeks++ ?>">Delete</a>
                        <!-- </button> -->
                </td>
            </tr>
        <?php } ?>
    </table>
    </center>
</body>
</html>