<?php
require '../function/functions.php';

$id = $_GET["id"];

if(hapus($id) > 0) {
    echo "<script>
    alert('Data berhasil di hapus');
    document.location.href = '../view/index.php';</script>";
}else{
    echo "<script>
    alert('Data berhasil di hapus');
    document.location.href = '../view/index.php';</script>";
}