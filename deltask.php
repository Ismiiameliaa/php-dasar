<?php
$json_data = file_get_contents('akun.json');
$akun = json_decode($json_data,true);
$indeks=$_GET['indeks'];
unset($akun[$indeks]);
$akun = array_values($akun);
$data_baru = json_encode($akun, JSON_PRETTY_PRINT);
file_put_contents('akun.json',$data_baru);
header('location:readtask.php');
?>