<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nawacare Clinic</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/service.css">
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
                <h1><span>One Stop</span> <br> Medical Services</h1>
                <p>In health sector , service excellence is the facility of the hospital as a healthcare..</p>
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
                        <a href="#" class="btn btn-sm btn-outline-success">Discover More</a>
                    </div>
                </div>
    
            </div>
        </div>
    </div>

    <div class="bg-faq">
        <div class="container">
            <div class="row">

                <div class="col-12 mb-5 pb-3">
                    <div class="title">
                        <h1>Frequently Asked Question</h1>
                        <p>If there are more specific questions please contact our call center or fill out our contact form.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="question">
                        <h6> <i class="fas fa-question tanya"></i> What is the obstetrical examination every day ? </h6>
                        <p class="answer">Our KIA Poly is open every Monday & Thursday at 07.00 - 14.00 WITA.</p>
                    </div> 
                </div>
                    
                <div class="col-md-6">
                    <div class="question">
                        <h6> <i class="fas fa-question tanya"></i> Do Dental Practice open every day ?</h6>
                        <p class="answer">Our dental practice is open every day from 07.30 - 21.30 WITA (except for Nyepi).</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="question">
                        <h6> <i class="fas fa-question tanya"></i> Does the Clinic have Specialist Doctors ? </h6>
                        <p class="answer">The clinic does not currently provide services by specialist doctors. For this service we will refer according to the applicable procedure.</p>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="question">
                        <h6> <i class="fas fa-question tanya"></i> Does Clinic have maternity services ? </h6>
                        <p class="answer">The clinic does not currently provide delivery services. For these services we will refer in accordance with applicable procedures.</p>
                    </div>
                </div>
        
                <div class="col-md-6">
                    <div class="question">
                        <h6> <i class="fas fa-question tanya"></i> Can making an appointment by other media ?  </h6>
                        <p class="answer">Making an "Appointment" can only on website by clicking the "Appointment" feature.</p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="question">
                      <h6> <i class="fas fa-question tanya"></i> Is there an ultrasound examination service ?  </h6>
                      <p class="answer">The clinic does not currently have an ultrasound examination service available.</p>
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
