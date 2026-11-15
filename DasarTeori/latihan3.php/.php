<?php
$nilai = 78;
if ($nilai >= 85) {
$predikat = "A";
} elseif ($nilai >= 75) {
$predikat = "B";
} elseif ($nilai >= 60) {
$predikat = "C";
} else {
$predikat = "D";
}
echo "Predikat: " . $predikat;
?>