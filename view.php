<?php

    require_once "config/conn.php";

    $id = $_GET['id'];

    if(!isset($id)) {header('location: news.php');}

    $query = mysqli_query($conn, "SELECT * FROM berita WHERE id = '$id' ");

    $query2 = mysqli_query($conn, "SELECT * FROM berita WHERE id != '$id' ORDER BY id DESC LIMIT 3 ");

    $query3 = mysqli_query($conn, "SELECT * FROM berita LIMIT 3 ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawacare Clinic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

    <style>
        .navbar{
            box-shadow: 0px 1px 5px rgba(0,0,0,.16);
        }
        .nav-item{
            color: #333 !important;
        }
        @media(min-width: 991px){
            .bg-blog{
                margin-top: 150px;
            }
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-light sticky-top">

        <div class="container">
          <a class="navbar-brand" href="#">Nawacare</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
              <a class="nav-item nav-link active" href="index.php">Home</a>
              <a class="nav-item nav-link" href="service.php">Service</a>
              <a class="nav-item nav-link" href="about.php">About Us</a>
              <a class="nav-item nav-link" href="news.php">Latest News</a>
              <a class="nav-item nav-link" href="contact.php">Contact</a>
            </div>
          </div>
        </div>
    
    </nav>

<div class="section">
    <div class="bg-blog">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="left-post view-post">
                        <div class="row">

                        <?php foreach($query as $sql) : ?>

                            <div class="col-lg-12">
                                <div class="title-view">
                                    <h1><?=$sql['judul']?></h1>
                                    <p class="date"> <i class="fas fa-clock mr-1"></i><?= date("F, d Y", strtotime($sql['tanggal'])) ?></p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="img-view">
                                    <img src="admin/blog/gambar/<?=$sql['gambar']?>" alt="">
                                </div>
                            </div>

                            <div class="col lg-12">
                                <div class="text-view text-justify">
                                    <p><?=$sql['isi']?></p>
                                </div>
                            </div>

                            <?php endforeach; ?>

                            <div class="col-12">
                                <div class="title-post"><h5>More News</h5></div>
                            </div>

                            <?php foreach ($query2 as $sql) : ?>
                                
                            <div class="post">
                                <div class="row">
                                    <div class="col-md-4 col-lg-4">
                                        <div class="img-post">
                                            <img src="admin/blog/gambar/<?=$sql['gambar']?>" alt="">
                                        </div>
                                    </div>

                                    <div class="col-md-8 col-lg-8">
                                        <div class="text-post">
                                            <h2><a href="view.php?id=<?=$sql['id']?>"><?=$sql['judul']?></a></h2>
                                            <p><?=substr($sql['isi'],0,100)." . . . ";?></p>
                                            <p class="date"><i class="fas fa-clock"></i><?= date("F, d Y", strtotime($sql['tanggal'])) ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="right-post">
                        <div class="row">

                            <div class="col-12">
                                <div class="sosmed">
                                    <i class="fab fa-instagram"></i>
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-google-plus"></i>
                                    <i class="fab fa-pinterest"></i>
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-blogger"></i>
                                    <i class="fab fa-wordpress"></i>
                                  </div>
                            </div>

                            <div class="col-12">
                                <div class="title-post mb-4"><h5>Berita Populer</h5></div>
                            </div>

                            <?php foreach ($query3 as $sql) : ?>

                                <div class="post">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="img-post">
                                                <img src="admin/blog/gambar/<?=$sql['gambar']?>" alt="">
                                            </div>
                                        </div>

                                        <div class="col-7">
                                            <div class="text-post">
                                                <p><a href="view.php?id=<?=$sql['id']?>"><?=$sql['judul']?></a></p>
                                                <p class="date"><i class="fas fa-clock"></i><?= date("F, d Y", strtotime($sql['tanggal'])) ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php endforeach; ?>

                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div class="bg-footer pt-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4 left">
                    <h5>Nawacare</h5>
                    <p>Established since long time ago we have been very trusted in the medical world.</p>
                    <ul>
                        <li style="padding-left: 0px;"><i class="fab fa-facebook"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-instagram"></i></li>
                        <li><i class="fab fa-google-plus"></i></li>
                    </ul>
                </div>

                <div class="col-lg col-md-2 left-center">
                    <h5>Navigation</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg col-md-2">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="#">Doctors</a></li>
                        <li><a href="#">Pediatrican</a></li>
                        <li><a href="#">Dentist</a></li>
                        <li><a href="#">ENT</a></li>
                        <li><a href="#">Orthopaedic</a></li>
                    </ul>
                </div>

                <div class="col right">
                    <h5>Contact Us</h5>
                    <ul>
                        <li><p><i class="fas fa-phone"></i> (0361) 234 567 </p></li>
                        <li><p><i class="fas fa-envelope"></i> clinic@gmail.com </p></li>
                        <li><p><i class="fas fa-home"></i> Bali, Indonesia </p></li>
                    </ul>
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

  <script>
    $(document).ready(function(){
      
      $(window).on("scroll", function(){
        if($(window).scrollTop()){
          $('nav').addClass("black");
        }
        else{
          $('nav').removeClass("black");
        }
      });

    });
  </script>
