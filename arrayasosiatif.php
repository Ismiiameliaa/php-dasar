<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            width: 30px;
            height: 30px;
            background-color: pink;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak:hover{
            transform:rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php
        $angka = [1,2,3,4,5,6,7,8,9];
    ?>
    <?php foreach ($angka as $a):?>
    <div class="kotak"><?= $a;?></div>
    <?php endforeach;?>
    <div class="clear"></div>
</body>
</html>
<br><br>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- array di dalam array -->
    <?php
        $angka2 = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
        echo $angka2 [2][1];
        // indeks ke 2, di dalamnya indeks ke 1 adalah 8        
    ?>
</body>
</html>
<br><br>

<!-- 2 foreach -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak3{
            width: 30px;
            height: 30px;
            background-color: pink;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }
        .kotak3:hover{
            transform:rotate(360deg);
            border-radius: 50%;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php
        $angka3 = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    ?>
        <?php foreach($angka3 as $agk):?>
            <!-- untuk mengulang elemen2 bersarang untuk array bersarang-->
            <?php foreach($agk as $b):?>
                <div class="kotak3"><?= $b;?></div>
            <?php endforeach;?>
            <div class="clear"></div>
    <?php endforeach;?>
</body>
</html>

