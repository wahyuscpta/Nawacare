<?php

    include "../config/conn.php";
    require_once "../helper/alert.php";

    $a = $_POST['name'];
    $b = $_POST['email'];
    $c = $_POST['number'];
    $d = $_POST['spesialis'];
    $e = $_POST['date'];

    if (!isset($_POST['btn-submit'])) { header("location: indx.php"); }

    if($e <= date('Y-m-d')){
        warning("Please make an appoinment 1 day before",  "../index.php");
    }

    else{

        $jumlah = mysqli_query($conn, "SELECT * FROM appoinment WHERE spesialis = '$d' and tanggal = '$e' ");
        $jumlah_data = mysqli_num_rows($jumlah);
    
        if($jumlah_data == 50){
            warning("Sorry, daily appoinment has been fulfilled",  "../index.php");
        }   
    
        else{
            
            $query2 = mysqli_query($conn, "SELECT max(no_antrian) as no_antrian FROM `appoinment` WHERE `tanggal` = '$e' AND `spesialis` = '$d' ");
    
            $data = mysqli_fetch_assoc($query2);
            $no = $data['no_antrian'] + 1; 
    
            $query = mysqli_query($conn, "INSERT INTO appoinment VALUES ('', '$no', '$a', '$b', '$c', '$d', '$e', '0') ");
    
            if(!$query){
                gagal("Failed to make appoinment",  "../index.php");
            }
        
            else{
                session_start();
                $sql = mysqli_query($conn, "SELECT * FROM appoinment WHERE no_antrian = '$no' ");
                $sql_1 = mysqli_fetch_assoc($sql);
                $_SESSION['id'] = $sql_1['id'];

                sukses("Appoinment has been made",  "../nota.php");
            }

        }

    } 


?>