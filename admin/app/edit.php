<?php

    require_once "../../config/conn.php";

    session_start();

    if(!isset($_SESSION['username'])) {header('location: ../index.php');}

    $id = $_GET['id'];

    if(!isset($id)) {header('location: view.php');}

    $query = mysqli_query($conn, "SELECT * FROM appoinment WHERE id = '$id' ");

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
            .navbar{border-radius:10px;}.navbar-nav .btn:hover{box-shadow:none;}.navbar-nav{margin-top: -320px}}
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
                            <a class="navbar-brand brand-two" href="../home/view.php">Nawacare</a>
                            <a class="nav-item nav-link active" href="view.php">Appointment</a>
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
                                <h3>Edit Data</h3>
                            </div>

                            <div class="col">
                                <a href="home.html" class="btn btn-success text-uppercase tombol btn-sm float-right">Back To List</a>
                            </div>
                
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="bg-content edit">
                        
                        <form action="process/edit-process.php" method="POST">

                        <div class="row align-items-center">

                            <?php foreach($query as $sql) :?>

                            <div class="col-12">
                                <div class="no-entry">
                                    <h5><?=sprintf('%03d', $sql['no_antrian'])?></h5>
                                </div>
                            </div>

                            <input type="hidden" name="id" value="<?=$sql['id']?>">

                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Nama" value="<?=$sql['nama']?>">
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?=$sql['email']?>">
                                </div>
                            </div>
    
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="number" name="no_telp" class="form-control" placeholder="No Telepon"value="<?=$sql['no_telp']?>">
                                </div>
                            </div>
    
                            <div class="col-6">
                                <div class="form-group">
                                    <select name="spesialis" class="form-control" id="speciality" style="padding-top: 5px;padding-bottom: 5px;" value="<?=$sql['spesialis']?>">
                                        <option>Dentist</option>
                                        <option>Pediatrican</option>
                                        <option>ENT</option>
                                        <option>Orthopaedic</option>
                                    </select>
                                </div>
                            </div>
    
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" value="<?=$sql['tanggal']?>">
                                </div>
                            </div>
    
                            <div class="col-12">
                                <button type="submit" class="btn mt-5 w-100 btn-rounded btn-success text-uppercase tombol">Save</button>
                            </div>

                            <?php endforeach; ?>

                            </div>

                        </form>

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
  <script src="Flickity v2.2/Flickity/flickity.pkgd.min.js"></script>