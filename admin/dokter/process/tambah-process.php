<?php

    include "../../../config/conn.php";
    require_once "../../../helper/alert.php";

    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['spesialis'];
    $d = $_POST['jk'];
    $e = $_POST['alamat'];

    move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);

    $query = mysqli_query($conn, "INSERT INTO dokter VALUES ('', '$a', '$b', '$c', '$e', '$d')");

    if($query){
        sukses("Success to add Doctor", "../view.php");
    }

    else{
        gagal("Failed to add Doctor", "../view.php");
    }

?>