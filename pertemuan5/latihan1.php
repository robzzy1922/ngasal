<?php
// ARRAY 
// variabel yang dapat memiliki banyak nilai 
// elemen pada array dapat meiliki tipe data yang berbeda
// adalah pasangan key dan value 
// key-nya adalah index, yang dimulai dari 0

// membuat array
$hari = ["senin","selasa","rabu","kamis","jumat","sabtu"];
$tipe_data = [true, "string", 123];

// menampilkan array
// bisa menggunakan var_dump() atau print_r()

print_r ($hari);
echo "<br>";
var_dump($tipe_data);

// menampilkan 1 elemen array
echo "<br>";
echo $hari[2];  
echo "<br>";

// menambahkan elemen baru
$hari []="minggu";
print_r ($hari);