<?php
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

$hargaBarang = 150000;
echo "Harga barang: " . formatRupiah($hargaBarang);
?>