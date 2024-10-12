<!-- php dasar :
 sintaks php <?php ?>,
 standar output (echo, print, print_r (untuk mencari kesalahan), var_dump (untuk mencari kesalahan))
 KOMENTAR double slash/CTRL+SLASH/slash+bintang bintang+slash
-->

<?php
// mencetak string/tulisan ke layar dengan kutip 2 atau kutip 1
echo "Rizki Amalia";
print "Rizki Amalia";
// fungsi kutip di string untuk membedakan tanda kutip agar tidak eror, namun khusus kutip 2 fungsinya lebih sakti daripada kutip 1
echo "Jum'at";
// mencetak angka tanpa tanda kutip
echo 123;
// mencetak bulean true mencetak angka 1
echo true;
// mencetak bulean false dengan kosong
echo false;

// print_r menggunakan tanda kurung
print_r ("Rizki Amalia"); 
// var_dump menggunakan tanda kurung untuk memberikan informasi tipe data apa dan ukuran berapa (spasi dihitung)
var_dump ("Rizki Amalia");
?>

<!-- PENULISAN SINTAKS PHP -->
<!-- 1. php di dalam html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo "Rizki Amalia";?></h1>
    <p><?php echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, veritatis";?></p>
</body>
</html>
<!-- 2. html di dalam php  TIDAK DISARANKAN-->


<!-- VARIABEL DAN TIPE DATA -->
 <!-- variabel ($) untuk menampung sebuah nilai-->
<?php
// penulisannya tidak boleh diawali dengan angka tapi boleh mengandung angka misal $1nama vs /$nama1 dan tanpa spasi
$nama = "Agus";
echo "halo nama saya $nama";
echo 'halo nama saya $nama';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halo, Selamat Datang <?php echo $nama;?></h1>
</body>
</html>

<!-- OPERATOR -->
 <!-- ARITMATIKA (+ - * / % -->
 <?php
    $x = 10;
    $y = 20;
    echo $x * $y;
?>
<br>
<br>
<!-- PENGGABUNG STRING/CONCATENATION/CONCAT (.) dengan spasi-->
<?php
 $nama_depan = "Rizki Amalia";
 $nama_belakang = "Kadir";
 echo $nama_depan . " " . $nama_belakang;
?>
<br>
<br>
<!-- ASSIGNMENT/PENUGASAN (=, +=, -=, /=, %=, .=) -->
<?php
  $x = 10;
  $x = 20;
  echo $x;
//   yang angka 10 ditimpa dengan 20
?>
<br>
<?php
  $x = 10;
  $x += 20;
  echo $x;
?>
<br>
<?php
  $x = 10;
  $x -= 20;
  echo $x;
?>
<br>
<?php
    $nama = "Rizki";
    $nama .= " ";
    $nama .= "Kadir";
    echo $nama;
?>
<br>
<br>
<!-- PERBANDINGAN (>,<,<=,>=,==, !=-->
 <?php
//  untuk mengecek apakah 1 < 5 maka muncul boolean true/false
 var_dump(1<5);
 var_dump(1>5);
 var_dump(1==5);
 var_dump(1=="1");
 ?>
<br>
<br>
 <!-- IDENTITAS (===,!===) tidak hanya mengecek nilai tapi juga tipe data-->
<?php
var_dump(1==="1");
?>
<br>
<br>
<!-- LOGIKA (AND &&, OR ||, NOTE !  ) -->
<?php
$x = 10;
// apakah x < 20 dan bilangan genap yang dibagi 2 = 0? DAN untuk pengkondisian keduanya harus benar
 var_dump($x < 20 && $x % 2 == 0);
 $y = 30;
// apakah y < 20 atau bilangan genap yang dibagi 2 = 0? OR untuk pengkondisian salah satu harus benar
 var_dump($y < 20 && $y % 2 == 0);
 ?>