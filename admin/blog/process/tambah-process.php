<?php

    include "../../../config/conn.php";
    require_once "../../../helper/alert.php"

    $judul = $_POST['judul'];
    $gambar = $_FILES['gambar']['name'];
    $tgl = date('Y-m-d');

    $isi = $_POST['isi'];
    $pecah = explode("\r\n\r\n", $isi);
    $text = "";

    for($i; $i<=count($pecah)-1; $i++){
        $part = str_replace($pecah[$i],"<p>".$pecah[$i]."</p>",$pecah[$i]);
        $text .= $part;
    }

    move_uploaded_file($_FILES['gambar']['tmp_name'], "../gambar/".$gambar);

    $query = mysqli_query($conn, "INSERT INTO berita VALUES ('', '$gambar', '$judul', '$text', '$tgl')");

    if($query){
        sukses("Success to add News", "../view.php");
    }

    else{
        gagal("Failed to add News", "../view.php");
    }

?>