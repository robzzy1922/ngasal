<?php
$films =[
[
"judul" => "<b>Ancika: Dia yang bersamaku 1995</b>",
"durasi" => "100 menit",
"genre" => "drama romantis",
"sutradara" => "Benni Setiawan",
"rilis" => "2024",
"poster" => "Poster_Ancika_-_Dia_yang_Bersamaku_1995_(2024).jpg"
],
[
"judul" => "<b>Godzilla vs Kong</b>",
"durasi" => "113 menit",
"genre" => "Monster",
"sutradara" => "Adam Windgard",
"rilis" => "2021",
"poster" => "Godzilla_vs._Kong.png"
],
[
"judul" => "<b>Spider-Man: No Way Home</b>",
"durasi" => "148 menit",
"genre" => "Action",
"sutradara" => "Jon Watts",
"rilis" => "2021",
"poster" => "Poster_Spider-Man_No_Way_Home.jpg"
],
[
"judul" => "<b>Doctor Strange in the Multiverse of Madness</b>",
"durasi" => "126 menit",
"genre" => "Action",
"sutradara" => "Sam Raimi",
"rilis" => "2022",
"poster" => "Doctor_Strange_in_the_Multiverse_of_Madness_poster.jpg"
],
[
"judul" => "<b>Evil Dead Rise</b>",
"durasi" => "97 menit",
"genre" => "Horor",
"sutradara" => "Leo Cronin",
"rilis" => "2023",
"poster" => "poster_EDR.jpg"
],
[
"judul" => "<b>The Super Mario Bros. Movie</b>",
"durasi" => "92 menit",
"genre" => "drama romantis",
"sutradara" => "Aaron Horvath and Michael Jelenic",
"rilis" => "2023",
"poster" => "The_Super_Mario_Bros._Movie_poster.jpg"
],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>film</title>
    <style>
    .back {
        text-align: end;

    }
    </style>
</head>

<body>
    <a href="index.php" class="back">Kembali</a>
    <h1>DETAIL FILM</h1>


    <ul>
        <li>Judul: <?= $_GET["judul"];?> </li>
        <li>Durasi: <?= $_GET["durasi"];?> </li>
        <li>Gendre: <?= $_GET["genre"];?> </li>
        <li>Sutradara:<?= $_GET["sutradara"];?> </li>
        <li>Rilis: <?= $_GET["rilis"];?> </li>
        <li> <img src="img/<?= $_GET["poster"];?>"></li>
    </ul>

</body>

</html>