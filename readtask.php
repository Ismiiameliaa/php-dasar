<?php
$json_data = file_get_contents('akun.json');
$akun = json_decode($json_data,true);
$i = 0;
$indeks = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BACA MEMBERSHIP</title>
    <style>
        .tabel1{
            margin: auto;
            margin-top: 30px;
            border-spacing: 0px;
        }
        th{
            background-color: brown;
            color: white;
            padding: 12px;
        }
        td{
            padding: 10px;
        }
        /* PEWARNAAN BARIS GANJIL */
        tr:nth-child(even){ */
        background-color: gray;
        }
        /* PEWARNAAN BARIS GENAP */
        tr:nth-child(odd){
            background-color: pink;
        }
    </style>
</head>
<body>
    <center><h2>DATA MEMBERSHIP</h2></center>
    <center><a href="createtask.php">Tambah Data</a></center>
    <table class="tabel1" border = "1">
                <th>no</th>
                <th>name</th>
                <th>birth</th>
                <th>email</th>
                <th>contact</th>
                <th>action</th>
            </tr >
            <?php foreach ($akun as $akn) { ?>
                <tr>
                    <td>
                        <?=$i++?>
                    </td>
                    <td>
                        <?=$akn['name']?>
                    </td>
                    <td>
                        <?=$akn['birth']?>
                    </td>
                    <td>
                        <?=$akn['email']?>
                    </td>
                    <td>
                        <?=$akn['contact']?>
                    </td>
                    <td>
                        <a href="update.php?indeks=<?=$indeks?>">Edit</a>
                        <a href="delete.php?indeks=<?=$indeks++?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>