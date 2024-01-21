<?php

    require_once "../../../config/conn.php";

    $a = $_POST['id'];
    $b = $_POST['subjek'];
    $c = $_POST['pesan'];

    $query = mysqli_query($conn, "SELECT * FROM message WHERE id = '$a' ");
    $fetch = mysqli_fetch_assoc($query);

    $email_user = $fetch['email'];

    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $from = "crincekronis@gmail.com";
    $to = $email_user;
    $subject = $b;
    $message = $c;
    $headers = "FROM:" . $from;

    $email = @mail($to,$subject,$message,$headers);

    var_dump($email);die;

    if($email){
        echo"
            <script>
                alert('Berhasil');
                location.href='../view.php';
            </script>
        ";
    }
    else{
        echo"
            <script>
                alert('Gagal');
                location.href='../view.php';
            </script>
        ";
    }

?>