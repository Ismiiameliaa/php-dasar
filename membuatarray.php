<!-- variabel yang bisa menampung lebih dari 1 nilai 2 cara-->
<!-- pasangan antara key dan value, di manan key nya adalah indeks yang dimulai dari 0 -->

<!-- cara lama -->
<?php
$hari = array("Senin","Selasa", "Rabu");
?>
<br><br>


<!-- cara baru yang digunakan saja kurung siku-->
<?php
$bulan = ["Januari", "Februari", "Maret"];
?>
<br><br>


<!-- menaggabung tipe data berbeda seperti string, integer, boolean -->
<?php
$arr1 = [123, "Februari", false];
?>

<!-- cara menampilkan array > 1 elemen tidak sama dengan cara menampilkan variabel menggunakan ECHO -->
 <!-- tapi gunakan var_dump atau print_r versi debugging-->
<!-- <?php
var_dump($hari);
echo "<br>";
print_r($bulan);
?>
<br><br> -->


<!-- menampilkan hanya 1 elemen pada array bisa menggunakan ECHO, ingat indeks dimulai dari 0-->
<!-- <?php
echo $arr1[0];
echo "<br>";
echo $bulan[1];
?>
<br><br> -->

<!-- menambahkan elemen baru pada array sebelumnya-->
 <?php
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);
 ?>