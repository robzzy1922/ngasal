<?php 
// SUPERGLOBALS
// variabel global milik PHP
// merupakan array assosiarive



// $_GET


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
    <title>GET</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>
    <ul>
        <?php foreach ($mahasiswa as $mah) : ?>
        <li>
            <a
                href="latihan2.php?nama=<?= $mah ["nama"];?>&nim=<?= $mah["nim"];?>&jurusan=<?= $mah["jurusan"];?>&email=<?= $mah["email"];?>&gambar=<?= $mah["gambar"];?>">
                <?= $mah["nama"];?> </a>
        </li>

        <?php endforeach; ?>
    </ul>

</body>

</html>