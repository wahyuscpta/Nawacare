<?php

    require_once "../../../config/conn.php";
    require_once "../../../helper/alert.php";

    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $gambar = $_FILES['gambar']['name'];

    if(!empty($gambar)){

        move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$gambar);
        $query = mysqli_query($conn, "UPDATE berita SET gambar = '$gambar' WHERE id = '$id' ");

    }

    $query = mysqli_query($conn, "UPDATE berita set judul = '$judul', isi='$isi' WHERE id = '$id' ");

    if(!$query){
        gagal("Failed to Edit data", "../view.php");
    }

    else{
        gagal("Data has been changed", "../view.php");
    }

?>