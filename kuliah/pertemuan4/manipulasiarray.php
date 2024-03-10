<?php
$hari = ["Senin","Selasa","Rabu","Kamis"];
$angka = ["1","5","9","12"];
echo "Array Awal : ";
print_r($hari);
echo "<hr>";

echo "array setelah di pop";
$hasil = array_pop($hari);
print_r ($hari);
echo "<br> Elemen Yanng Di Pop : $hasil <hr>";