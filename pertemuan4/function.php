<?php
function selamat($nama){
    $waktu = date("H:i");
    $pagi = "01:00";
    $siang = "11:00";
    $malam = "16:00";

    if ($waktu >= $pagi && $waktu <=$siang){
        $waktu_selamat = "Pagi";
    }elseif($waktu >= $siang && $waktu <= $malam){
        $waktu_selamat = "Siang";
    }else {
        $waktu_selamat = "malam";
    }

    return "Selamat $waktu_selamat, $nama";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funtion</title>
</head>

<body>
    <h1>
        <?= selamat("robi"); ?>
    </h1>
</body>

</html>