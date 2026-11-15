<?php
$nama = "Siti";
$tugas = 85;
$uts = 78;
$uas = 90;

// Menghitung rata-rata dari tiga komponen nilai
$rataRata = ($tugas + $uts + $uas) / 3;

if ($rataRata >= 85) {
    $predikat = "A";
} elseif ($rataRata >= 75) {
    $predikat = "B";
} elseif ($rataRata >= 60) {
    $predikat = "C";
} else {
    $predikat = "D";
}

echo "Nama: " . htmlspecialchars($nama) . "<br>";
echo "Nilai Rata-rata: " . number_format($rataRata, 2) . "<br>";
echo "Predikat: " . $predikat;
?>