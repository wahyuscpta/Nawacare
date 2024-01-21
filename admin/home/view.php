<?php

    require_once "../../config/conn.php";

    session_start();

    if(!isset($_SESSION['username'])) {header('location: ../index.php');}

    $date =  date('Y-m-d');

    $a = 'Dentist';
    $b = 'Pediatrican';
    $c = 'ENT';
    $d = "Orthopaedic";

    if(isset($_GET['search'])){

        $e = $_GET['keyword'];

        $dentist = mysqli_query($conn, "SELECT * FROM appoinment WHERE no_antrian LIKE '%$e%' OR nama LIKE '%$e%' OR email LIKE '%$e%' OR no_telp LIKE '%$e%' HAVING spesialis = '$a' AND tanggal = '$date' AND status = '0' ");
        $pedia = mysqli_query($conn, "SELECT * FROM appoinment WHERE no_antrian LIKE '%$e%' OR nama LIKE '%$e%' OR email LIKE '%$e%' OR no_telp LIKE '%$e%' HAVING spesialis = '$b' AND tanggal = '$date' AND status = '0' ");
        $ent = mysqli_query($conn, "SELECT * FROM appoinment WHERE no_antrian LIKE '%$e%' OR nama LIKE '%$e%' OR email LIKE '%$e%' OR no_telp LIKE '%$e%' HAVING spesialis = '$c' AND tanggal = '$date' AND status = '0' ");
        $ortho = mysqli_query($conn, "SELECT * FROM appoinment WHERE no_antrian LIKE '%$e%' OR nama LIKE '%$e%' OR email LIKE '%$e%' OR no_telp LIKE '%$e%' HAVING spesialis = '$d' AND tanggal = '$date' AND status = '0' ");
    }

    else{
        $dentist = mysqli_query($conn, "SELECT * FROM appoinment WHERE spesialis = '$a' AND tanggal = '$date' AND status = '0' ");
        $pedia = mysqli_query($conn, "SELECT * FROM appoinment WHERE spesialis = '$b' AND tanggal = '$date' AND status = '0' ");
        $ent = mysqli_query($conn, "SELECT * FROM appoinment WHERE spesialis = '$c' AND tanggal = '$date' AND status = '0' ");
        $ortho = mysqli_query($conn, "SELECT * FROM appoinment WHERE spesialis = '$d' AND tanggal = '$date' AND status = '0' ");
    }

    $total_dentist = mysqli_num_rows($dentist);
    $total_pedia = mysqli_num_rows($pedia);
    $total_ent = mysqli_num_rows($ent);
    $total_ortho = mysqli_num_rows($ortho);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../fontawesome/css/all.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <style>
        body{padding: 3px 5px;}
        @media(min-width:991px){
            .navbar{border-radius:10px;}.navbar-nav .btn:hover{box-shadow:none;}}
    </style>

    <div class="dashboard">
        <div class="row">

            <div class="col-12 col-lg-2">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">

                    <a class="navbar-brand brand-one" href="#">Nawacare</a>
            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
            
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="navbar-brand brand-two" href="#">Nawacare</a>
                            <a class="nav-item nav-link active" href="indx.html">Today</a>
                            <a class="nav-item nav-link" href="../app/view.php">Appointment</a>
                            <a class="nav-item nav-link" href="../history/view.php">History</a>
                            <a class="nav-item nav-link" href="../dokter/view.php">Doctor</a>
                            <a class="nav-item nav-link" href="../pesan/view.php">Messages</a>
                            <a class="nav-item nav-link" href="../blog/view.php">Blog</a>
                            <a class="nav-item nav-link logout btn tombol" href="../process/logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                        </div>
                    </div>
                
                </nav>
            </div>

            <div class="bg col-12 col-lg-10 pl-5">

                <div class="bg-header pt-4 mb-4">
                    <div class="container">
                        <div class="row">
            
                            <div class="col">
                                <h3>Dashboard</h3>
                            </div>
                
                            <div class="col">
                                <form action="">

                                    <div class="input-group mb-3">
                                        <input type="text" name="keyword" class="form-control w-50" placeholder="Search">
                                        <div class="input-group-append">
                                            <button name="search" class="btn input-group-text"><i class="fas fa-search"></i></span></button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-content">

                        <div class="table-responsive" id="tampil">

                            <a href="" class="btn btn-block btn-sm btn-success tombol mb-3">Dentist</a>

                            <?php if($total_dentist <= 0){ ?>

                            <h6 class="text-center mt-5">NO APPOINMENT</h6>

                            <?php } else {?>

                            <table class="table table-hover table-bordered">

                                <thead align="center">
                                    <td>No Entry</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Spesialist</td>
                                    <td>Tanggal</td>
                                    <td>Aksi</td>
                                </th>

                                <?php foreach ($dentist as $sql) : ?>

                                <tbody align="center">
                                    <td><?= sprintf('%03d', $sql['no_antrian']) ?></td>
                                    <td><?= $sql['nama'] ?></td>
                                    <td><?= $sql['email'] ?></td>
                                    <td><?= $sql['no_telp'] ?></td>
                                    <td><?= $sql['spesialis'] ?></td>
                                    <td><?= $sql['tanggal'] ?></td>
                                    <td><a href="process/done.php?id=<?=$sql['id']?>" class="btn btn-primary btn-sm">DONE</a>
                                        <a href="process/delete.php?id=<?=$sql['id']?>" class="btn btn-danger btn-sm">DELETE</a>
                                    </td>
                                </tbody>

                                <?php endforeach; ?>

                                <?php }?>

                            </table>     
                        </div>     

                        <div class="table-responsive" id="tampil"> 

                            <a href="" class="btn btn-block btn-sm btn-success tombol mb-3 mt-5">Pediatrican</a>

                            <?php if($total_pedia <= 0){ ?>

                            <h6 class="text-center mt-5">NO APPOINMENT</h6>

                            <?php } else {?>                       

                            <table class="table table-hover table-bordered">

                                <thead align="center">
                                    <td>No Entry</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Spesialist</td>
                                    <td>Tanggal</td>
                                    <td>Aksi</td>
                                </th>

                                <?php foreach ($pedia as $sql) : ?>

                                <tbody align="center">
                                    <td><?= sprintf('%03d', $sql['no_antrian']) ?></td>
                                    <td><?= $sql['nama'] ?></td>
                                    <td><?= $sql['email'] ?></td>
                                    <td><?= $sql['no_telp'] ?></td>
                                    <td><?= $sql['spesialis'] ?></td>
                                    <td><?= $sql['tanggal'] ?></td>
                                    <td><a href="process/done.php?id=<?=$sql['id']?>" class="btn btn-primary btn-sm">DONE</a>
                                        <a onclick="return confirm('Yakin Ingin Menghapus Data Ini ?')" href="process/delete.php?id=<?=$sql['id']?>" class="btn btn-danger btn-sm">DELETE</a>
                                    </td>
                                </tbody>

                                <?php endforeach; ?>

                                <?php }?>

                            </table>
                        </div>

                        <div class="table-responsive" id="tampil">

                            <a href="" class="btn btn-block btn-sm btn-success tombol mb-3 mt-5">ENT</a>

                            <?php if($total_ent <= 0){ ?>

                            <h6 class="text-center mt-5">NO APPOINMENT</h6>

                            <?php } else {?>

                            <table class="table table-hover table-bordered">

                                <thead align="center">
                                    <td>No Entry</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Spesialist</td>
                                    <td>Tanggal</td>
                                    <td>Aksi</td>
                                </th>

                                <?php foreach ($ent as $sql) : ?>

                                <tbody align="center">
                                    <td><?= sprintf('%03d', $sql['no_antrian']) ?></td>
                                    <td><?= $sql['nama'] ?></td>
                                    <td><?= $sql['email'] ?></td>
                                    <td><?= $sql['no_telp'] ?></td>
                                    <td><?= $sql['spesialis'] ?></td>
                                    <td><?= $sql['tanggal'] ?></td>
                                    <td><a href="process/done.php?id=<?=$sql['id']?>" class="btn btn-primary btn-sm">DONE</a>
                                        <a href="process/delete.php?id=<?=$sql['id']?>" class="btn btn-danger btn-sm">DELETE</a>
                                    </td>
                                </tbody>

                                <?php endforeach; ?>

                                <?php }?>

                            </table> 
                        </div>

                        <div class="table-responsive" id="tampil">   

                            <a href="" class="btn btn-block btn-sm btn-success tombol mb-3 mt-5">Orthopaedic</a> 

                            <?php if($total_ortho <= 0){ ?>

                            <h6 class="text-center mt-5">NO APPOINMENT</h6>

                            <?php } else {?>                                                 

                            <table class="table table-hover table-bordered">

                                <thead align="center">
                                    <td>No Entry</td>
                                    <td>Nama</td>
                                    <td>Email</td>
                                    <td>Phone</td>
                                    <td>Spesialist</td>
                                    <td>Tanggal</td>
                                    <td>Aksi</td>
                                </th>

                                <?php foreach ($ortho as $sql) : ?>

                                <tbody align="center">
                                    <td><?= sprintf('%03d', $sql['no_antrian']) ?></td>
                                    <td><?= $sql['nama'] ?></td>
                                    <td><?= $sql['email'] ?></td>
                                    <td><?= $sql['no_telp'] ?></td>
                                    <td><?= $sql['spesialis'] ?></td>
                                    <td><?= $sql['tanggal'] ?></td>
                                    <td><a href="process/done.php?id=<?=$sql['id']?>" class="btn btn-primary btn-sm">DONE</a>
                                        <a href="process/delete.php?id=<?=$sql['id']?>" class="btn btn-danger btn-sm">DELETE</a>
                                    </td>
                                </tbody>

                                <?php endforeach; ?>

                                <?php }?>

                            </table>                               
                        </div>                           

                    </div>
                </div>

            </div>

        </div>
    </div>


</body>
</html>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
