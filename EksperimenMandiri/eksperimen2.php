<!-- cari_mahasiswa.php -->
<form method="GET" action="">
    <label for="kata">Cari Nama Mahasiswa: </label>
    <input id="kata" name="kata" type="text">
    <button type="submit">Cari</button>
</form>

<?php
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];

if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . "<br><br>";

    $ditemukan = false;
    foreach ($mahasiswa as $nama) {
        if (stripos($nama, $kata) !== false && $kata !== "") {
            echo "Ditemukan: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
            $ditemukan = true;
        }
    }

    if (!$ditemukan) {
        echo "Data mahasiswa tidak ditemukan.";
    }
}
?>