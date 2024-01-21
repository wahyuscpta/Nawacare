<?php

    require_once "../../../config/conn.php";
    require_once "../../../helper/alert.php";

    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['no_telp'];
    $d = $_POST['spesialis'];
    $e = $_POST['tanggal'];
    $f = $_POST['id'];

    $query = mysqli_query($conn, "UPDATE appoinment SET nama='$a', email='$b', no_telp='$c', spesialis='$d', tanggal='$e' WHERE id='$f' ");

    if(!$query){
        gagal("Failed to change data", "../view.php");
    }

    else{
        sukses("Data has been changed", "../view.php");
    }

?>