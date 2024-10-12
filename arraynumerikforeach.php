<!-- FOREACH -->
<?php
$angka3 = [3,2,15,20,11,77,99,102,65,78];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak3{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear3{
            clear: both;
        }
    </style>
</head>
<body>
    <!-- untuk setiap elemen pada array angka -->
    <?php foreach ($angka3 as $a){?>
    <div class="kotak3"><?= $a; ?></div>
    <?php } ?>
<div class="clear3"></div>

<?php foreach ($angka3 as $a):?>
    <div class="kotak3"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>