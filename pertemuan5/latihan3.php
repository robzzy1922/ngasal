<?php 

$mahasiswa = [
    ["Robi Permana", "2305050", "RPL", "robipermana@gmail.com"],
    ["Vivian Fiorentina", "2303312", "KP", "vivian@gmail.com"],
    ["Yudi Alfariz", "2304059", "RPL", "yudialfariz@gmail.com"]
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>
    <?php foreach ($mahasiswa as $mah) : ?>
    <ul>
        <li> Nama: <?= $mah[0]; ?></li>
        <li> NIM: <?= $mah[1]; ?></li>
        <li> Jurusan: <?= $mah[2]; ?></li>
        <li> Email: <?= $mah[3]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>