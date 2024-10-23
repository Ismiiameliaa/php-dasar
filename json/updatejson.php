<?php

session_start();
if(empty($_SESSION['username'])){
    header('location:loginjson.php');
}

$indeks=$_GET['indeks'];
$json_data = file_get_contents('databarang.json');
$databarang = json_decode($json_data,true);

if(isset($_POST["submit"])){
    $update_data=[
        "code"=>$_POST["code"],
        "name"=>$_POST["name"],
        "price"=>$_POST["price"],
        "stock"=>$_POST["stock"],
    ];

$databarang[$indeks]=$update_data;
$json_update_data = json_encode($databarang,JSON_PRETTY_PRINT);
file_put_contents('databarang.json',$json_update_data);
header('location:readjson.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA</title>
    <style>
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
        .container h2{
            font-size: 32px;
            text-align: center;
            color: white;
        }
        .button a{
            color: white;
        }
        table{
            width: 30%;
            border: 1px solid black;
            margin: auto;
            margin-top: 50px;
            padding: 30px;
            border-radius: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: transparent;
            backdrop-filter: blur(5px);
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            color: white;
        }
    </style>
</head>
<body>
<div class="background"></div>
    <div class="container">
        <h2>UPDATE DATA</h2>
        <div class="button">
            <center><a href="logoutjson.php" class="logout">Logout</a></center>
            <center><a href="readjson.php" class="kembali">Back</a></center>
        </div>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="">Code</label></td>
                    <td>:</td>
                    <td><input type="text" name="code" value="<?=$databarang[$indeks]["code"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Name</label></td>
                    <td>:</td>
                    <td><input type="text" name="name" value="<?=$databarang[$indeks]["name"]?>"required></td>
                </tr>
                <tr>
                    <td><label for="">Price</label></td>
                    <td>:</td>
                    <td><input type="text" name="price" value="<?=$databarang[$indeks]["price"]?>" required></td>
                </tr>
                <tr>
                    <td><label for="">Stock</label></td>
                    <td>:</td>
                    <td><input type="text" name="stock" value="<?=$databarang[$indeks]["stock"]?>" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button type="submit" name="submit">Save</button></td>
                </tr>
            </table> 
        </form>
    </div>
</body>
</html>