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
    <link rel="stylesheet" href="css/contact.css">
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
                <h1><span>Call Our</span> <br> Sharing is Caring</h1>
                <p>We provide 24/7 professional help for all clients and all problematic of our clinic.</p>
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

    <div class="bg-call">
        <div class="container">
            <div class="row">

                <div class="col-lg-6">
                    <div class="img-call">
                        <img src="images/blog/1.png" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="text-call">
                        <p class="atas">Emergency Hotline</p>
                        <h1>123 - 456 789</h1>
                        <p>Hubungi nomor tersebut untuk kasus darurat . Kami akan melayani anda dalam 24 jam.</p>
                        <a href="#" class="btn btn-success btn-sm tombol" style="padding: 5px 20px;"> <i class="fas fa-phone"></i> Telepon</a>

                        <img src="images/bg/plus.png" alt="">

                    </div>
                </div>

            </div>
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

                    <form action="process/messages.php" method="POST">

                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nama" name="name">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>

                        <div class="form-group">
                            <textarea cols="30" rows="8" placeholder="Pesan" class="form-control" name="pesan"></textarea>
                        </div>

                        <button type="submit" class="btn btn-rounded btn-success w-50 tombol">SEND</button>

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
