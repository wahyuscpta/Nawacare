<?php

    require_once "config/conn.php";

    $query = mysqli_query($conn, "SELECT * FROM dokter");

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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/about.css">
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
                <h1><span>This is Our</span> <br> Experted Doctors</h1>
                <p>Our team of physicians treats patients all ages, from infants to senior.</p>
                <a href="#" class="btn btn-outline-success btn-sm mt-3">Learn More</a>
            </div>

            <div class="app">
                <form action="process/appoinment-process.php" method="POST">

                    <div class="row align-items-center">

                        <div class="col-12 col-md">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Nama" name="name">
                            </div>
                        </div>

                        <div class="col-6 col-md">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email" name="email">
                            </div>
                        </div>

                        <div class="col-6 col-md">
                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="No Telepon" name="number">
                            </div>
                        </div>

                        <div class="col-6 col-md">
                            <div class="form-group">
                                <select class="form-control" id="speciality" name="spesialis">
                                    <option value="Dentist">Dentist</option>
                                    <option value="Pediatrican">Pediatrican</option>
                                    <option value="ENT">ENT</option>
                                    <option value="Orthopaedic">Orthopaedic</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-6 col-md-2">
                            <div class="form-group">
                                <input type="date" class="form-control" placeholder="Tanggal" name="date">
                            </div>
                        </div>

                        <div class="col">
                            <button type="submit" name="btn-submit" class="btn btn-sm btn-success text-uppercase tombol">Appoinment</button>
                        </div>

                    </div>

                </form>
            </div>

        </div>

    </div>

    <div class="bg-about mt-5 mb-5">

        <div class="container">
            <div class="row">

                <div class="col-md-5">
                    <div class="img-about">
                        <img src="images/doctor/1.png" alt="">
                    </div>
                </div>

                <div class="col-md-7">
                    <div class="text-about">
                        <h1>About Us</h1>
                        <p>Our main long-term goal is always achieving complex results for your health. But in the process, we also keep the focus on giving you the best customer service. We're always making our clinic office as safe place as possible!</p>
                        <a href="#" class="mt-3 btn btn-sm btn-outline-success">Discover More</a>
                    </div>
                </div>

                <img src="images/bg/plus.png" alt="" class="plus">

            </div>
        </div>
        
    </div>

    <div class="bg-doctor">
        <div class="container">
            <div class="row">

                <div class="col-12">
                    <div class="title mb-5">
                        <h1>Our Best Doctor</h1>
                    </div>
                </div>

            <?php foreach ($query as $sql):?>

                <div class="col col-md-6 col-lg">
                    <div class="doctor">

                        <div class="rate">
                            <i class="fas fa-star"></i>  <span>4.5</span>
                        </div>

                        <img src="admin/dokter/gambar/<?=$sql['gambar']?>" alt="">
                        <h5><?=$sql['nama']?></h5>
                        <p class="from"><?=$sql['alamat']?></p>
                        <p class="poli"><?=$sql['spesialis']?></p>

                        <div class="call">

                            <i class="fab fa-instagram"></i>
                            <i class="fab fa-facebook"></i>
                            <i class="fas fa-phone"></i>

                        </div>

                    </div>
                </div>

            <?php endforeach; ?>

            </div>
        </div>
    </div>

    <div class="bg-testi mt-5">
        <div class="row">

            <div class="col-lg-7">
                <div class="main-carousel">
                    <div class="carousel-cell">
                        <h3>Paul Jackson</h3>
                        <p>The doctors has been working on my problematic for the last 6 months. They is very gentle and caring. The office is very ultra modern and the staff is very friendly. I am so thankful to them.</p>
                    </div>
                
                    <div class="carousel-cell">
                        <h3>Shelina Khaur</h3>
                        <p>I have been coming here since they opened this location! And I really like this dentist and the staff. I love that they have a discussion with you, to explain why how a procedure is done. Thank you for the great job you do!</p>
                    </div>

                    <div class="carousel-cell">
                        <h3>Vanessa Pauls</h3>
                        <p>Global was recommended to me maybe 3 years ago and I've been putting it off and wish I hadn't. For the amount of work needed, it went very well. I am completely satisfied. Pain free visits and I have my smile back. Thank you!</p>
                    </div>

                    <div class="carousel-cell">
                        <h3>Jane Anderson</h3>
                        <p>I wanted to send enormous thanks for the caring service. It was discreet, diverse and helped me in ways I wasn’t expecting. I was very lucky to have been treated by you. Thank you very much!</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="img-testi">

                    <img src="images/testi/1.png" alt="" id="img_1">
                    <img src="images/testi/2.png" alt="" id="img_2">
                    <img src="images/testi/3.png" alt="" id="img_3">
                    <img src="images/testi/4.png" alt="" id="img_4">
                    <img src="images/testi/5.png" alt="" id="img_5">
                    <img src="images/testi/6.png" alt="" id="img_6">
                    <img src="images/testi/7.jpg" alt="" id="img_7">

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
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  <script scrc="js/script.js"></script>

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