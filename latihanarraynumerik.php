<?php
$mahasiswa = ["Rizki Amalia", "201253010", "Ilmu Komunikasi", "rizkiamalia@gmail.com"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAFTAR MAHASISWA</title>
</head>
<body>
    <h1>DAFTAR MAHASISWA</h1>
    <ul>
        <?php
            foreach ($mahasiswa as $mhs): ?>
            <li><?= $mhs; ?></li>
        <?php endforeach; ?>
        
    </ul>
    <!-- atau -->
     <ul>
        <li><?= $mahasiswa[0];?></li>
        <li><?= $mahasiswa[1];?></li>
        <li><?= $mahasiswa[2];?></li>
        <li><?= $mahasiswa[3];?></li>        
     </ul>
</body>
</html>

<br><br>
<!-- mahasiswa > 1 (multidimensi/array numerik di dalam array tapi harus perhatikan urutannya karena php tidak bisa mendeteksi kesalahan posisi urutan-->
<?php
    $karyawan = [
        ["Rizki Amalia", "201253010", "Ilmu Komunikasi", "rizkiamalia@gmail.com"],
        ["Muhammad Agus", "201253011", "Ilmu Politik", "m.agus@gmail.com"],
        ["Muhammad Alim", "201253012", "Ilmu Sastra", "m.alim@gmail.com"]
    ];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1>DAFTAR KARYAWAN</h1>
        <?php
            foreach ($karyawan as $kry): ?>
            <ul>
                <li>Nama : <?= $kry[0];?></li>
                <li>NIP : <?= $kry[1];?></li>
                <li>Bidang : <?= $kry[2];?></li>
                <li>Email : <?= $kry[3];?></li>        
            </ul>
        <?php endforeach; ?>
    </body>
    </html>
