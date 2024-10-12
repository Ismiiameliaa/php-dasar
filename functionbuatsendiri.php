<!-- membuat function versi sendiri -->

<!-- misalnya membuat ucapan selamat pagi,siang,sore,malam ke user -->
<!-- tinggal tambahkan function time -->

<!-- <?php
// function salam($waktu, $nama){
// return "Selamat $waktu, $nama";
// }
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= salam("Pagi", "Amel"); ?></h1>
    
</body>
</html>
<br><br> -->


<!-- memberikan nilai parameter default-->
<?php
    function salam($waktu = "Datang", $nama = "Admin"){
    return "Selamat $waktu, $nama";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= salam("Pagi", "Amel"); ?></h1>
    
</body>
</html>


<!-- function penting terhindar dari hackers
 STRING: STRLEN(), STRCMP(), EXPLODE(),HTMLSPECIALCHARS()
 UTILITY: VAR_DUMP(), ISSET(), EMPTY(), DIE(), SLEEP()
 -->