<?php
$nama_depan = "Danny";
$nama_belakang = "Lukman";

for ($d = 1; $d <= 100; $d++) {
    if ($d % 3 == 0 && $d % 5 == 0) {
         echo "$nama_depan" . " " . "$nama_belakang<br>";
    } elseif ($d % 5 == 0) {
         echo "$nama_belakang<br>";
    } elseif ($d % 3 == 0) {
         echo "$nama_depan<br>";
    } else {
         echo "$d<br>";
    }
}

?>