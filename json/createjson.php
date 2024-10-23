<?php
 session_start();
 if(empty($_SESSION['username'])){
     header('location:loginjson.php');
 }
$json_data = file_get_contents("databarang.json");
$databarang = json_decode($json_data,true);

if(isset($_POST["submit"])){
    $data_baru=[
        "code"=>$_POST["code"],
        "name"=>$_POST["name"],
        "price"=>$_POST["price"],
        "stock"=>$_POST["stock"],
        "option"=>$_POST["option"],
    ];

$databarang[]=$data_baru;
$json_data_baru = json_encode($databarang,JSON_PRETTY_PRINT);
file_put_contents("databarang.json",$json_data_baru);
header("location:readjson.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW STOCK</title>
    <style>
        form{
            width: 30%;
            border: 1px solid black;
            margin: auto;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            backdrop-filter: blur(20px);
        }
        input{
            display: block;
            height: 30px;
            width: 100%;
            border: none;
            border-bottom: 1px solid black;
            margin-top: 10px;
            border-radius: 10px;
        }
        .submit{
            margin-top: 20px;
            height: 30px;
            width: 40%;
            border-radius: 10px;
            background-color: pink;
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
        .button a{
            color: white;
            margin-left: 450px;
        }
        h2{
            color: white;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    <center><h2>Add New Stock CV. Jujur Utama</h2></center>
    <div class="button">
        <a href="readjson.php" class="lihat">See More</a><br><br>
        <a href="logoutjson.php" class="logout">Logout</a>
    </div>
    <center>
        <form action="" method="post">
        <input type="text" name="code" placeholder="put a number" required><br>
        <input type="text" name="name" placeholder="put a name" required><br>
        <input type="text" name="price" placeholder="put a price" required><br>
        <input type="text" name="stock" placeholder="put a number" required><br>
        <button type="submit" name="submit">Save</button>
    </form>
    </center>
</body>
</html>