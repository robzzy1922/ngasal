<?php 

// $mahasiswa = [
//     ["Robi Permana", "2305050", "RPL", "robipermana@gmail.com"],
//     ["Vivian Fiorentina", "2303312", "KP", "vivian@gmail.com"],
//     ["Yudi Alfariz", "2304059", "RPL", "yudialfariz@gmail.com"]
// ];

// belajar assosiative array
// definisnya sama seperti array (kalau array biasa indexnya numerik)
// tetapi key-nya kita buat sendiri dengan tipe data string

$mahasiswa = [
    [
    "nama" => "Robi Permana",
    "nim" => "2305050",
    "jurusan" => "RPL",
    "email" => "robipermana@gmail.com",
    "gambar" => "guntur-2.jpg"
    ],
    [
    "nama" => "Yudi Ray Evandi Ingwan",
    "nim" => "2304050",
    "jurusan" => "TI",
    "email" => "RTRTY@gmail.com",
    "gambar" => "pascal-2.jpg"
    ],
    [
    "nama" => "Vivian",
    "nim" => "2304054",
    "jurusan" => "KP",
    "email" => "vivians@gmail.com",
    "gambar" => "robi-1.jpg"
    ],
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
        <!-- <li>
            <img src="img/<?= $mah["gambar"];?>">
        </li> -->
        <li> Nama: <?= $mah["nama"]; ?></li>
        <li> NIM: <?= $mah["nim"]; ?></li>
        <li> Jurusan: <?= $mah["jurusan"]; ?></li>
        <li> Email: <?= $mah["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>

</html>