<?php
$json_data = file_get_contents('akun.json');
$akun = json_decode($json_data,true);

if(isset($_POST['submit'])){
    $data_baru=[
        "name"=>$_POST['name'],
        "birth"=>$_POST['birth'],
        "email"=>$_POST['email'],
        "contact"=>$_POST['contact'],
        "action"=>$_POST['action'],
    ];

// menambahkan data baru
$akun[]=$data_baru;
// konversi kembali ke array to json
$json_data_baru = json_encode($akun,JSON_PRETTY_PRINT);
// simpan data
file_put_contents('akun.json',$json_data_baru);
// header
header('location:readtask.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA BARU MEMBERSHIP</title>
    <style>
        form{
            width: 30%;
            border: 1px solid black;
            margin: auto;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
        }
        input{
            display: block;
            height: 30px;
            width: 100%;
            border: none;
            border-bottom: 1px solid black;
            margin-top: 10px;
        }
        .submit{
            margin-top: 20px;
            height: 30px;
            width: 40%;
            border-radius: 10px;
            background-color: pink;
        }
    </style>
</head>
<body>
        <center><h2>SILAKAN MASUKKAN DATA MEMBERSHIP</h2></center>
        <form action="" method="post">
        <center><input type="text" name="name" placeholder="Sesuai KTP" required><br>
        <input type="text" name="birth" placeholder="Tanggal lahir" required><br>
        <input type="text" name="email" placeholder="Email" required><br>
        <input type="text" name="contact" placeholder="Nomor Telepon" required><br>
        <input class="submit" type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>