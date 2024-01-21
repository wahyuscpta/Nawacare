<?php

    require_once "../../../config/conn.php";
    require_once "../../../helper/alert.php"

    $id = $_POST['id'];
    $a = $_FILES['gambar']['name'];
    $b = $_POST['nama'];
    $c = $_POST['spesialis'];
    $d = $_POST['jk'];
    $e = $_POST['alamat'];

    if(!empty($a)){

        move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$a);
        $query = mysqli_query($conn, "UPDATE dokter SET gambar = '$a' WHERE id = '$id' ");

    }

    $query = mysqli_query($conn, "UPDATE dokter set nama = '$b', spesialis='$c', alamat='$e', jenis_kelamin='$d' WHERE id = '$id' ");

    if($query){
        sukses("Success to changed", "../view.php");
    }

    else{
        gagal("Failed to edit data", "../view.php");
    }

?>