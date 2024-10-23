<?php
$json_data = file_get_contents('databarang.json');
$databarang = json_decode($json_data, true);
$indeks = $_GET["indeks"];
unset($databarang[$indeks]);
$databarang = array_values($databarang);
$json_update = json_encode($databarang, JSON_PRETTY_PRINT);
file_put_contents('databarang.json',$json_update);
header("location:readjson.php");
echo "Deleted Successfully";
?>