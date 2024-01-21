<?php

    require_once "../../../config/conn.php";
    require_once "../../../helper/alert.php";

    $a = $_GET['id'];

    $query = mysqli_query($conn, "UPDATE appoinment SET status='1' WHERE id='$a' ");

    if($query){
        echo"
        <script>
            location.href = '../view.php' ;
        </script>
        ";
    }

    else{
        gagal("Failed to be Done", "../view.php");
    }


?>