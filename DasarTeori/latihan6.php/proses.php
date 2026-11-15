<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$nama = trim($_POST["nama"] ?? "");
if ($nama === "") {
echo "Nama wajib diisi.";
} else {
echo "Halo, " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8");
}
}
?>