<?php
$indeks=$_GET['indeks'];
$json_data = file_get_contents('akun.json');
$akun = json_decode($json_data,true);

if(isset($_POST['submit'])){
    $update_data=[
        "name"=>$_POST['name'],
        "birth"=>$_POST['birth'],
        "email"=>$_POST['email'],
        "contact"=>$_POST['contact'],
    ];

$akun[$indeks]=$update_data;
$json_update_data = json_encode($akun,JSON_PRETTY_PRINT);
file_put_contents('akun.json',$json_update_data);
header('location:readtask.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE DATA MEMBERSHIP</title>
</head>
<body>
    <h2>SILAKAN MENGUBAH DATA MEMBERSHIP</h2>
    <form action="" method="post">
        <input type="text" name="name" value="<?=$guest[$indeks]['name']?>" required><br>
        <input type="text" name="birth" value="<?=$guest[$indeks]['birth']?>" required><br>
        <input type="text" name="email" value="<?=$guest[$indeks]['email']?>" required><br>
        <input type="text" name="contact" value="<?=$guest[$indeks]['contact']?>" required><br>
        <input type="submit" name="submit" value="Simpan">
    </form>
</body>
</html>