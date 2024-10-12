<!-- ada pengulangan for dan foreach -->


<!-- FOR -->
<?php
$angka1 = [3,2,15,20,11,77,99];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak1{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear1{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < 7; $i++) { ?>
    <div class="kotak1"><?php echo $angka1[$i]; ?></div>
    <?php } ?>
    <div class="clear1"></div>
</body>
</html>
<br><br>



<!-- nilai elemen bertambah otomatis-->
<?php
$angka2 = [3,2,15,20,11,77,99,102];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak2{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear2{
            clear: both;
        }
    </style>
</head>
<body>
    <?php for ($i = 0; $i < count($angka2); $i++) { ?>
    <div class="kotak2"><?php echo $angka2[$i]; ?></div>
    <?php } ?>
<div class="clear2"></div>
</body>
</html>
