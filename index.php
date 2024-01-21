<?php

    require_once "config/conn.php";

    $query = mysqli_query($conn, "SELECT * FROM berita LIMIT 3");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawacare Clinic</title>
    <link rel="shortcut icon" href="images/bg/plus.png" type="image/x-icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css?v=<?php time() ?>">
</head>
<body>

    <style>
        .text-news h4{
            color: #333;
        }
        .img-news img{
            height: 300px;
        }
        @media(max-width: 320px){
            .img-news img{
                height: 250px;
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
    <div class="bg-banner">

        <div class="btn-banner"><i class="fas fa-sort-down"></i></div>

        <div class="container">
            <div class="text-banner mt-5">
                <h1><span>Your Health</span> <br>Our Main Priority</h1>
                <p>Established since long time ago we have been very trusted in the medical world.</p>
                <a href="#about" class="btn btn-outline-success btn-sm mt-3">Learn More</a>
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

    <div class="bg-about" id="about">

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
                        <a href="about.php" class="mt-3 btn btn-sm btn-outline-success">Discover More</a>
                    </div>
                </div>

                <img src="images/bg/plus.png" alt="" class="plus">

            </div>
        </div>
        
    </div>

    <div class="bg-departement pt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-7 bg-service pt-5">
                    <div class="row">
    
                        <div class="col-md-5">
                            <div class="service ml-5">
                                <i class="fas fa-tooth" style="color: #52d99f;background-color: #c8f4e3;"></i>
                                <h4>Dentist</h4>
                                <p>Serving care and treatment for dental implants, theet whitening, cosmetic dentistry end etc.</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="service ml-5">
                                <i class="fas fa-baby" style="color: #f21e41;background-color: #fee8eb;"></i>
                                <h4>Pediatrician</h4>
                                <p>Is the branch of medicine that involves the medical care of infants, children, and adolescents.</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="service">
                                <i class="fas fa-assistive-listening-systems" style="color: #fa9158;background-color: #fee4d5;"></i>
                                <h4>ENT</h4>
                                <p>Serving care and treatment for diseases and conditions related to ear, nose and throat health.</p>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="service">
                                <i class="fas fa-bone" style="color: #3bd8f5;background-color: #ccf5fd;padding: 15px 13px;"></i>
                                <h4>Orthopaedic</h4>
                                <p>Is the branch of surgery concerned with conditions involving the musculoskeletal system.                                </p>
                            </div>
                        </div>
    
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="text-service">
                        <h1>Departement</h1>
                        <p>In health sector , service excellence is the facility of the hospital as a healthcare.We are ready to assist 24 hours and are experienced to both arrange and do the medical evacuation in a relative short time.</p>
                        <a href="service.php" class="btn btn-sm btn-outline-success">Discover More</a>
                    </div>
                </div>
    
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

    <div class="bg-news">

        <div class="title">
            <h1>Latest  News</h1>
        </div>

        <div class="carousel">

            <?php foreach ($query as $sql) :  ?>

            <div class="carousel-cell">
    
                    <div class="container">
        
                        <div class="row">
        
                            <div class="col-md-8">
                                <div class="text-news">
                                    <div class="text">
                                        <h4><?=$sql['judul']?></h4>
                                        <p class="mb-3 info"> <i class="fas fa-clock"></i> <?=$sql['tanggal']?> </p>
                                        <p><?= substr($sql['isi'],0,150)." . . . ";?></p>
                                        <a href="view.php?id=<?=$sql['id']?>" class="btn btn-sm btn-outline-success mt-3">Read More</a>
                                    </div>
                                </div>
                            </div>
                
                            <div class="col-md-4">
                                <div class="img-news">
                                    <img src="admin/blog/gambar/<?=$sql['gambar']?>" alt="">
                                </div>
                            </div>
                
                        </div>
        
                </div>
            </div>

            <?php endforeach; ?>
            
        </div>

    </div>
   
    <div class="bg-contact mb-5">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-2">
                    <div class="title mb-5 text-left">
                        <h1><span>GETIN</span> TOUCH </h1>
                        <img src="images/bg/plus.png" alt="">
                    </div>
                </div>

                <div class="col-lg-8 col-md-9">
                    <div class="contact">
                        <p>Have any question spesifically ? Contact Us Now !</p>
                        <p class="messages"></p>

                    <form action="process/messages.php" class="form-messages" method="POST">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama" name="name">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>

                        <div class="form-group">
                            <textarea cols="30" rows="8" placeholder="Pesan" class="form-control" name="pesan"></textarea>
                        </div>

                        <button type="submit" class="send btn btn-rounded btn-success w-50 tombol">SEND</button>

                        <div class="maps">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d986.038562827528!2d115.19432652916676!3d-8.67687737385451!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ceaa9b388b%3A0xb3fc1719b0d42fbd!2sJl.%20Pura%20Demak%20No.56%2C%20Pemecutan%20Klod%2C%20Kec.%20Denpasar%20Bar.%2C%20Kota%20Denpasar%2C%20Bali%2080119!5e0!3m2!1sid!2sid!4v1581565500818!5m2!1sid!2sid" width="100%" height="100%" frameborder="0" style="border:0;z-index:99;" allowfullscreen="" ></iframe>
                        </div>

                    </form>

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
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
  
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

    <script>
        $('.carousel').flickity({
            cellAlign: 'left',
            contain: true,
            autoPlay: true,
            pageDots: false
        });
    </script>

  <script>
      $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        pageDots: false,
        autoPlay: true
      });
  </script>
  