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

    
    $poster = upload();
    if( !$poster ){
        return false;
    }

    $query = "INSERT INTO list_film (judul, durasi, genre, sutradara, rilis, poster) VALUES('$judul','$durasi','$genre','$sutradara','$rilis','$poster')";
    mysqli_query($conn,$query); 

    return mysqli_affected_rows($conn);

}

function upload(){
    $namaFile = $_FILES['poster']['name'];
    $ukuranFile = $_FILES['poster']['size'];
    $error = $_FILES['poster']['error'];
    $tempName = $_FILES['poster']['tmp_name'];

    // cek apakah tidak ada file yang di upload 
    if ($error === 4){
        echo "<script>
        alert('Silahkan tambahkan gambar')
        </script>";
        return false;
    }

    //cek apakah gambar yang diupload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        echo "<script>
        alert('Harus upload gambar')
        </script>";
    }

    //cek ukuran apakah terlalu besar
    if($ukuranFile > 2 * 1024 *1024 ){
        echo "<script>
        alert('Ukuran Gambar terlalu besar (MAX 2MB)')
        </script>";
        return false;
    }
    //gambar bisa di upload
    //generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;  

    move_uploaded_file($tempName, '../img/' . $namaFileBaru);
    return $namaFileBaru;
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
    $posterLama = htmlspecialchars($data["posterLama"]);
    
    //cek apakah user pilih gambar baru atau tidak
    if($_FILES['poster']['error']===4){
        $poster = $posterLama;
    }else{
        
        $poster = upload();
    }

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

function cari($keyword){
    $query = "SELECT * FROM list_film 
    WHERE
     judul LIKE '$keyword%' OR
     durasi LIKE '$keyword%' OR
     genre LIKE '$keyword%' OR
     sutradara LIKE '$keyword%' OR
     rilis LIKE '$keyword%' 
     ";
return query($query);
}