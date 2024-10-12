<!-- 3 cara membuat tabel pengulangan -->

<!-- CARA 1 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- membuat tabel 3 baris, tiap baris 5 kolom tanpa looping -->
    <table border="1" cellpadding="10" cellspacing="0">  
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>
    </table>
</body>
</html>
<br><br>

<!-- CARA 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- tabel 3 baris, tiap baris 5 kolom, cellpadding agar luas ruangan cell, cellspacing agar bordernya tidak tebal -->
    <table border="1" cellpadding="10" cellspacing="0">
        <?php
            for($i=1;$i<=3;$i++){
                echo "<tr>";
                for($j=1;$j<=5;$j++){
                    echo "<td>$i,$j</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
<br><br>

<!-- CARA 3 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CARA TERFAVORIT</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- ganti kurung kurawal dengan bukanya :, dan tutupnya endfor; -->
        <?php for($i=1;$i<=3;$i++):?>
            <tr>
                <?php for($j=1;$j<=5;$j++):?>
                     <!-- < ? php echo bisa disingkat < ? = -->
                    <td><?= "$i,$j";?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>