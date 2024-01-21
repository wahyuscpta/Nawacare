<?php

    require_once "config/conn.php";

    if(isset($_GET['search'])){

        $a = $_GET['keyword'];

        $query = mysqli_query($conn, "SELECT * FROM berita WHERE judul LIKE '%$a%' ORDER BY id DESC LIMIT 5");
        $query2 = mysqli_query($conn, "SELECT * FROM berita LIMIT 3");
        
    }
    
    else if(isset($_POST['show-more'])){
        
        $query = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC ");
        $query2 = mysqli_query($conn, "SELECT * FROM berita LIMIT 3");        
    }

    else{
        $query = mysqli_query($conn, "SELECT * FROM berita ORDER BY id DESC LIMIT 5");
        $query2 = mysqli_query($conn, "SELECT * FROM berita LIMIT 3");
    }



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawacare Clinic</title>
    <link rel="shortcut icon" href="images/bg/plus.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/blog.css">
</head>
<body>

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
    <div class="bg-banner">

        <div class="btn-banner"><i class="fas fa-sort-down"></i></div>

        <div class="container">
            <div class="text-banner mt-5">
                <h1><span>Latest News</span> <br> About Medicality</h1>
                <p>We will provide interesting facts about the world of health from all over the world.</p>
                <a href="#" class="btn btn-outline-success btn-sm mt-3">Learn More</a>
            </div>

            <div class="app">
                <form action="" method="POST">

                    <div class="row align-items-center">

                        <form action="">

                        <div class="col-7 col-md-9">
                            <div class="form-group">
                                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="Search News">
                            </div>
                        </div>

                        <div class="col-5 col-md-3">
                            <button type="submit" id="search" name="search" class="btn btn-sm btn-success btn-block text-uppercase tombol">Search</a>
                        </div>

                        </form>

                    </div>

                </form>
            </div>

        </div>

    </div>

    <div class="bg-blog">
        <div class="container">
            <div class="row">

                <div class="col-lg-8">
                    <div class="left-post">
                        <div class="row">

                            <div class="col-12">
                                <div class="title-post"><h5>Berita Terbaru</h5></div>
                            </div>

                            <div id="tampil">
                            
                            <?php foreach($query as $sql):?>

                                <div class="post">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="img-post">
                                                <img src="admin/blog/gambar/<?=$sql['gambar']?>" alt="">
                                            </div>
                                        </div>

                                        <div class="col-lg-8">
                                            <div class="text-post">
                                                <h2><a href="view.php?id=<?=$sql['id']?>"><?=$sql['judul']?></a></h2>
                                                <p><?= substr($sql['isi'],0,150)." . . . ";?></p>
                                                <p class="date"><i class="fas fa-clock"></i> <?= date("F, d Y", strtotime($sql['tanggal'])) ?> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php endforeach;?>

                            </div>

                            <div class="col-12">
                                <form action="" method="POST">
                                    <button type="submit" name="show-more" class="btn btn-success btn-block tombol">Show More</a>
                                </form>
                            </div>

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

                        <?php foreach ($query2 as $sql) : ?>

                            <div class="post">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="img-post">
                                            <img src="admin/blog/gambar/<?=$sql['gambar']?>" alt="">
                                        </div>
                                    </div>
        
                                    <div class="col-7">
                                        <div class="text-post">
                                            <p><a href="view.php?id=<?=$sql['id']?>"><?=$sql['judul']?>.</a></p>
                                            <p class="date"><i class="fas fa-clock"></i> <?= date("F, d Y", strtotime($sql['tanggal'])) ?> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <?php endforeach;?>

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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="service.php">Service</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="news.php">Latest News</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>

                <div class="col-lg col-md-2">
                    <h5>Services</h5>
                    <ul>
                        <li><a href="service.php">Doctors</a></li>
                        <li><a href="service.php">Pediatrican</a></li>
                        <li><a href="service.php">Dentist</a></li>
                        <li><a href="service.php">ENT</a></li>
                        <li><a href="service.php">Orthopaedic</a></li>
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
    var keyword = document.getElementById('keyword');
    var tampil = document.getElementById('tampil');
    var search = document.getElementById('search');

    keyword.addEventListener('keyup', function(){
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if(xhr.readyState == 4 && xhr.status == 200){
                tampil.innerHTML = xhr.responseText;
            }
        }

        xhr.open('GET', 'process/search.php?keyword=' + keyword.value, true);
        xhr.send();

    });                        

  </script>

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
