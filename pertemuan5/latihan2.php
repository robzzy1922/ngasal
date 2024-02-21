<?php
// pengulangan pada array
// for / foreach

$angka = [3,12,4,6,23,54,98,98];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar array</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: red;
        text-align: center;
        line-height: 50px;
        color: aqua;
        margin: 3px;
        float: left;
    }

    .clear {
        clear: both;
    }
    </style>
</head>

<body>
    <?php for( $i = 0; $i < count($angka); $i++ ) { ?>
    <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php } 
    // cara 1
    ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a) { ?>
    <div class="kotak"> <?php echo $a; ?></div>
    <?php } 
    // cara 2 (simple)
    ?>

    <div class="clear"></div>

    <?php foreach( $angka as $a) : ?>
    <div class="kotak"> <?= $a; ?></div>
    <?php endforeach 
    // cara 3 (simple dan menggunakan template )
    ?>
</body>

</html>