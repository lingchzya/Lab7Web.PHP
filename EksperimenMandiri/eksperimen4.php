<?php
$data = null;
$error = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") $error[] = "Nama wajib diisi.";

    // Validasi NIM (Eksperimen Mandiri No. 4)
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 9) {
        $error[] = "NIM harus berupa angka dan terdiri dari 9 digit.";
    }

    if ($prodi === "") $error[] = "Program studi wajib diisi.";

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }

    if (!ctype_digit((string)$semesterInput) || 
        (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    if (!$error) {
        $data = compact("nama", "nim", "prodi", "email");
        $data["semester"] = (int)$semesterInput;
    }
}
?>

<form method="POST" action="">
    <label>Nama: <input type="text" name="nama" required></label><br><br>
    <label>NIM (9 digit angka): <input type="text" name="nim" required></label><br><br>
    <label>Program Studi: <input type="text" name="prodi" required></label><br><br>
    <label>Semester: <input type="number" name="semester" min="1" max="14" required></label><br><br>
    <label>Email: <input type="email" name="email" required></label><br><br>
    <button type="submit">Kirim</button>
</form>

<?php
if ($error) {
    echo "<h3>Pesan Kesalahan:</h3><ul>";
    foreach ($error as $pesan) {
        echo "<li>" . htmlspecialchars($pesan, ENT_QUOTES, "UTF-8") . "</li>";
    }
    echo "</ul>";
} elseif ($data) {
    echo "<h3>Ringkasan Data Mahasiswa</h3>";
    echo "Nama: " . htmlspecialchars($data["nama"], ENT_QUOTES, "UTF-8") . "<br>";
    echo "NIM: " . htmlspecialchars($data["nim"], ENT_QUOTES, "UTF-8") . "<br>";
    echo "Program Studi: " . htmlspecialchars($data["prodi"], ENT_QUOTES, "UTF-8") . "<br>";
    echo "Semester: " . htmlspecialchars((string)$data["semester"], ENT_QUOTES, "UTF-8") . "<br>";
    echo "Email: " . htmlspecialchars($data["email"], ENT_QUOTES, "UTF-8") . "<br>";
}
?>