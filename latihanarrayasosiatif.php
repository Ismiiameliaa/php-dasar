<!-- array asosiatif keynya adalah string yang kita buat sendiri-->


<!-- untuk 1 elemen -->
<?php
$mahasiswa = [
    "nama"=>"Rizki Amalia",
    "NIM"=>"201253010"
];

echo $mahasiswa["NIM"];
?>
<br><br>


<!-- >1 elemen -->
<?php
    $karyawan = [
        [
            "nama"=>"Rizal",
            "NIP"=>"2012.030"
        ],
        [
            "nama"=>"Anjas",
            "NIP"=>"2012.040"
        ],
        [
            "nama"=>"Bagus",
            "NIP"=>"2012.050"
        ],
        [
            "nama"=>"Bagus",
            "NIP"=>"2012.050",
        ],
    ];
    echo $karyawan[3]["NIP"];
?>
<br><br>

<?php
    $peserta = [
        [
            "nama"=>"Rizki Amalia", 
            "NIM"=>"201253010", 
            "jurusan"=>"Ilmu Komunikasi",
            "email"=>"rizkiamalia@gmail.com",
            "gambar"=>"gbr1.jpeg"
        ],
        [
            "nama"=>"Muhammad Agus",
            "NIM"=>"201253011",
            "jurusan"=>"Ilmu Politik",
            "email"=>"m.agus@gmail.com",
            "gambar"=>"gbr2.jpeg"
        ],
        [
            "nama"=>"Muhammad Alim",
            "NIM"=>"201253012",
            "jurusan"=>"Ilmu Sastra",
            "email"=>"m.alim@gmail.com",
            "gambar"=>"gbr3.jpeg"
        ]
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
        <h1>DAFTAR PESERTA</h1>
        <?php
            foreach ($peserta as $pes): ?>
            <ul>
                <img src="images/<?=$pes["gambar"];?>" width="100px">
                <li>Nama : <?= $pes["nama"];?></li>
                <li>NIP : <?= $pes["NIM"];?></li>
                <li>Bidang : <?= $pes["jurusan"];?></li>
                <li>Email : <?= $pes["email"];?></li>        
            </ul>
        <?php endforeach; ?>
    </body>
    </html>

    
