<?php // Pertemuan 2 - PHP DASAR 
// sintax PHP

// standar output
/* 
bisa menggunakan echo 
bisa menggunakan print
bisa menggunakan print_r (untuk array) untuk debug
bisa menggunakan var_dump untuk debug
*/

// penulisan sintaks PHP:
// 1. PHP didalam HTML
// 2. HTML didalam PHP

// Variabel dan tipe data
// Variabel
$nama = "Robi Permana";

// Operator penggabung string menggunakan (.)
$namdep = "Robi";
$nambel = "GGWP";

echo $namdep . " " . $nambel;
?>


<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>
<body>
  <h1>Saya adalah <?php echo $nama ?></h1>
  <p>Saya adalah <?php echo "robi permana" ?></p>
  
</body>
</html>