<?php

$conn = mysqli_connect("localhost","root","","flm");

function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $judul = htmlspecialchars($data["judul"]);
    $durasi = htmlspecialchars($data["durasi"]);
    $genre = htmlspecialchars($data["genre"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $rilis = htmlspecialchars($data["rilis"]);
    $poster = htmlspecialchars($data["poster"]);

    $query = "INSERT INTO list_film (judul, durasi, genre, sutradara, rilis, poster) VALUES('$judul','$durasi','$genre','$sutradara','$rilis','$poster')";
    mysqli_query($conn,$query); 

    return mysqli_affected_rows($conn);

}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM list_film WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $durasi = htmlspecialchars($data["durasi"]);
    $genre = htmlspecialchars($data["genre"]);
    $sutradara = htmlspecialchars($data["sutradara"]);
    $rilis = htmlspecialchars($data["rilis"]);
    $poster = htmlspecialchars($data["poster"]);

    $query = "UPDATE list_film SET
                judul = '$judul',
                durasi = '$durasi',
                genre = '$genre',
                sutradara = '$sutradara',
                rilis = '$rilis',
                poster = '$poster'
                WHERE id = $id;
                ";
    mysqli_query($conn,$query); 

    return mysqli_affected_rows($conn);
}