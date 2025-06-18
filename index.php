<?php
// Simulasi data dari ID (dalam aplikasi nyata, data diambil dari database)
$data = [
    "407043644449" => [
        "nama" => "Andi Saputra",
        "nisn" => "1234567890",
        "asal_sekolah" => "SMP Negeri 1 Jakarta",
        "foto" => "foto_kjp.jpg"
    ]
];

$id = $_GET['id'] ?? null;
$info = $data[$id] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Verifikasi KJP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <h1>Verifikasi KJP</h1>
    <?php if ($info): ?>
        <img src="assets/<?= $info['foto'] ?>" alt="Foto Siswa" class="foto">
        <table>
            <tr><th>Nama</th><td><?= $info['nama'] ?></td></tr>
            <tr><th>NISN</th><td><?= $info['nisn'] ?></td></tr>
            <tr><th>Asal Sekolah</th><td><?= $info['asal_sekolah'] ?></td></tr>
        </table>
    <?php else: ?>
        <p>ID tidak ditemukan.</p>
    <?php endif; ?>
</div>
</body>
</html>
