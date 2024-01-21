<?php

    require_once "../config/conn.php";
    require_once "../helper/alert.php";

    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['pesan'];

    if(!empty($a) && !empty($b) && !empty($c)){

        $query = mysqli_query($conn, "INSERT INTO message VALUES ('', '$a', '$b', '$c') ");

        if(!$query){
            gagal("Message failed to send",  "../index.php");
        }

        else{
            sukses("Messages has been sent",  "../index.php");
        }
    }

    else{
        warning("Input form should not empty",  "../index.php");
    }

?>