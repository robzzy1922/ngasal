<?php 
// BELAJAR FUNCTION 
// 1. date : untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// 2. time
// UNIX timestamp 
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l, d-M-Y",time()+60*60*24*10000);

// 3. mktime
// membuat detik sendiri
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l",mktime(0,0,0,3,5,2006));

// 4. strtotime
// echo date("l",strtotime("5 march 2006"));