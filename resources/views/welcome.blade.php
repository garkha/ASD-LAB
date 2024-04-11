<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Welcome to A-sharma Diagnostics (ASD)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!--Time Picker ka cdn-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.css" integrity="sha512-GgUcFJ5lgRdt/8m5A0d0qEnsoi8cDoF0d6q+RirBPtL423Qsj5cI9OxQ5hWvPi5jjvTLM/YhaaFuIeWCLi6lyQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-timepicker/1.13.18/jquery.timepicker.js" integrity="sha512-17lKwKi7MLRVxOz4ttjSYkwp92tbZNNr2iFyEd22hSZpQr/OnPopmgH8ayN4kkSqHlqMmefHmQU43sjeJDWGKg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
  <!--End Time Picker ka cdn-->
  <!--Datepicker ka cdn-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <!--End Datepicker ka cdn-->
  

  <!-- Favicons -->
  <link href={{ asset('assets/img/logo.png') }} rel="icon">
  <link href={{ asset('assets/img/logo.png') }} rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href={{ asset('assets/vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet">
  <link href={{ asset('assets/vendor/animate.css/animate.min.css') }} rel="stylesheet">
  <link href={{ asset('assets/vendor/aos/aos.css') }} rel="stylesheet">
  <link href={{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">
  <link href={{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }} rel="stylesheet">
  <link href={{ asset('assets/vendor/boxicons/css/boxicons.min.css') }} rel="stylesheet">
  <link href={{ asset('assets/vendor/glightbox/css/glightbox.min.css') }} rel="stylesheet">
  <link href={{ asset('assets/vendor/swiper/swiper-bundle.min.css') }} rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
  <style>
        input[type=number]::-webkit-inner-spin-button,input[type=number]::-webkit-outer-spin-button{
           -webkit-appearance: none;
           margin:0;
        }
        #hero h2{
            color:#951818cf;
            
        }
        ##hero p {
          color: #951818cf;
          font-size: inherit;
          font-family: inherit;
          color: seashell;
        }
        
        
      #file_select{
        text-align:center;
        
        border:thin solid black;
      }

      #inputTag{
        display: none;
      }
      #file_lable{
        cursor:pointer;
      }
      #imageName{
        color:green;
      }
      #customers {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }

      #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #customers tr:nth-child(even){background-color: #f2f2f2;}

      #customers tr:hover {background-color: #ddd;}

      #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #0f858e;
        color: white;
      }

      .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
        background-color: #fefefe;
        margin: 10% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
        border: 1px solid #888;
        width: 50%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: red;
          cursor: pointer;
        }
        /* Add Zoom Animation */
        .animate {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
        }
          
        @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 750px) {
          span.psw {
            display: block;
            float: none;
          }
          .cancelbtn {
            width: 100%;
          }
          .modal-content {
            width: 80%; 
          }
          
        }
        @media only screen and (max-width: 600px) {
            #patient{
                width:100%;
            }
            #customers{
                width:1100px;
            }
            .ls{
                width:130px;
            }
        }
      
     
  </style>
</head>

<body>
 

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i>Monday to Sunday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i>Call us now : &nbsp;
        <a href="tel:+91 8920871162" style="color:white;"> 8920871162 </a>&nbsp;&nbsp;
        <a href="tel:+91 8882335434" style="color:white;"> 8882335434</a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a class="logo me-auto"><img src="assets/img/logo.png" alt="logo"></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Dashboard</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          <li><a class="nav-link scrollto" href="#reports">Download Reports</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
          <li><a class="nav-link scrollto" href={{ url('login') }}>Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/myslide-1.jpg)">
          <div class="container">
            <h2 style="color:#68140b;">Welcome to A-sharma Diagnostics Laboratory</h2>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/myslide-2.jpg)">
          <div class="container">
              <h2 style="color:#16525e;">Fast is fine but Accuracy is everything.</h2>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/myslide-3.jpg)">
          <div class="container">
            <p></p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>
        
         <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/myslide-4.jpg)">
          <div class="container">
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>
         <!-- Slide 5 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/myslide-5.jpg)">
          <div class="container">
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>
         <!-- Slide 6 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/myslide-6.jpg)">
          <div class="container">
            <p></p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>


      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bi bi-geo-alt"></i></div>
              <h4 class="title"><a href="#contact">Book-A-Test By your Smartphone</a></h4>
              <img src="assets/img/features/mobile.jpg" class="img-fluid border border-info rounded-circle">
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bi bi-house-door"></i></div>
              <h4 class="title"><a href="#contact"">Sample collection at your Home</a></h4>
               <img src="assets/img/features/home-collection.jpg" class="img-fluid border border-info rounded-circle">
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-thermometer"></i></div>
              <h4 class="title"><a href="#">Testing and Processing in ASD Laboratory</a></h4>
              <img src="assets/img/features/blood-test.jpg" class="img-fluid border border-info rounded-circle">
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bi bi-file-earmark-pdf-fill"></i></div>
              <h4 class="title"><a href="#reports">Online Access to reports anytime and anywhere</a></h4>
              <img src="assets/img/features/report.jpg" class="img-fluid border border-info rounded-circle">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>In an emergency? Need help now? Call at this Numbers</h3>
          <i class="bi bi-telephone-forward">&nbsp;&nbsp; +91 8920871162, +91 8510074787, +91 8882335434</i>
          <p>Any query please Contact-us</p>
          <a class="cta-btn scrollto" href="#contact">Contact Us</a>
          <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
        </div>

      </div>
    </section><!-- End Cta Section -->
    
    

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>
          <p>ASD Diagnostics has been at the forefront of quality diagnosis and accurate reports. At ASD Diagnostics, we believe in transparency. Nothing matters to us more than an accurate quality report that helps clinicians take the right treatment decisions.</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src={{ asset('assets/img/about.jpg') }} class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" style="padding:50px;">
            <h3>Fast is fine but Accuracy is everything.</h3>
            <ul>
              <li><i class="bi bi-check-circle"></i> The common denominator in Diagnostic industry is a need for the highest standard of accuracy, and that’s what we strive to provide.</li>
              <li><i class="bi bi-check-circle"></i> At ASD Diagnostics, we insist that Accuracy Matters in every step of Healthcare and Diagnostic Industry.</li>
              <li><i class="bi bi-check-circle"></i> We offer a comprehensive test and Health Packages, tailored to your needs.</li>
              <li><i class="bi bi-check-circle"></i> Well qualified professionals -Pathologist, Biochemists, Technologists and quality control personnel.</li>
              <li><i class="bi bi-check-circle"></i>Our state of the art diagnostic facility is equipped with the most advanced and high end equipments which deliver the best results at lesser time and gives the confidence of correct reporting to our doctors.</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="doctors section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Services</h2>
                <p>We provide accurate & qulity diagnosis services.</p>
            </div>
            <div class="row">
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/blood-cells.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Department of Haematology & Coagulation</h4>
                         </div>
                      </div>
                 </div>
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/Molecular.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Department of Molecular Biology</h4>
                         </div>
                      </div>
                 </div>
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/b1.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Department of Biochemistry and Immunoassay</h4>
                         </div>
                      </div>
                 </div>
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/m1.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Department of Microbiology</h4>
                         </div>
                      </div>
                 </div>
            </div>
            
            <div class="row">
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/p1.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Department of Clinical Pathology</h4>
                         </div>
                      </div>
                 </div>
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/serilogy.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Department of Serology</h4>
                         </div>
                      </div>
                 </div>
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/h1.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Department of Histopathology & Cytopathology</h4>
                         </div>
                      </div>
                 </div>
                 <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                     <div class="member" data-aos="fade-up" data-aos-delay="100">
                         <div class="member-img">
                             <img src="assets/img/services/radiology.jpg" class="img-fluid" alt="">
                         </div>
                         <div class="member-info">
                             <h4>Radiology</h4>
                         </div>
                      </div>
                 </div>
            </div>
       </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
              <div class="my-3">
                    @if (session('appointment_status'))
                        <div class="alert alert-success" role="alert">{{ session('appointment_status')}}</div>
                    @endif
              </div>
        </div>

        <form action="book_appointment" method="post" enctype="multipart/form-data" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          @csrf
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Your Mobile Number" maxlength="10" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"  required>
            </div>
          </div>
          
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="date" class="form-control" id="datepicker" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <input type="text" name="time" class="form-control" id="timepicker" placeholder="Select Time" required>
            </div>
            <div class="col-md-4 form-group mt-3">
               <div class="form-control" id="file_select">
                   <label for="inputTag" id="file_lable">Select Image / Doctor Prescription 
                        <i class="bi bi-camera"></i>
                        <input id="inputTag" type="file" name="Doctor_prescription"/>
                        <br/>
                       <span id="imageName"></span>
                   </label>
               </div>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
    
    <!-- ======= Report Section ======= -->
    <section id="reports" class="about">
      <div class="container" data-aos="fade-up" style="min-height: 400px;">
            <div class="section-title">
              <h2>Download Reports</h2>
              <p>Online Access to reports anytime and anywhere.</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="number" class="form-control" name="patient" id="patient" placeholder="Mobile number or patient id..." />
                </div>
                <div class="col-md-12">
                    <button type="button" id="Confirm_identity" class="btn btn-primary mt-2" style="width:100%;">Confirm identity</button>
                </div>
            </div>
            <div class="row mt-2">
              <div class="col-md-12" id="patient_result" style="overflow-x:auto;"></div>
            </div>
      </div>
    </section>
    <!-- End Doctors Section -->




    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Dr. S. Laskar <br> <span style="font-size: 20px;">MBBS MAMC - MD</span></h2>
          <p style="color: rgb(0, 0, 0); font-size:20px;"><span style="color: rgb(4, 37, 37); font-size:28px;">Experties in</span>....</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Diabetes Diseases</h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Heart Diseases</h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Chest Diseases</h4>
                
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <h4>Colds and Flu</h4>
                
              </div>
            </div>
          </div>

        </div>
        <p style="color: rgb(0, 0, 0); font-size:24px; font-family: Times New Roman;">
          <span style="color: rgb(14, 125, 125); font-size:28px;">Clinic Address :</span>
          H3/30 Mahavir Enclave, Bengali Colony, West Delhi, Delhi Pincode - 110059.
        </p>
        <p style="font-family: Times New Roman; color: rgb(0, 0, 0); font-size:24px;">Phone No: 9899101015</p>
        <p style="font-family: Times New Roman; color: rgb(0, 0, 0); font-size:24px;">Kindly call or drop a message on the phone number above mentioned.</p>
        <a href="#appointment" class="btn btn-outline-info">Make an appointment</a>
        
        

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Gallery</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-1.jpg"><img src="assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-2.jpg"><img src="assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-3.jpg"><img src="assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-4.jpg"><img src="assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-5.jpg"><img src="assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-6.jpg"><img src="assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-7.jpg"><img src="assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/gallery/gallery-8.jpg"><img src="assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" >
      <div class="container" style="margin-top: -50px;">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
      </div>

      <div class="container" style="margin-top: -80px;">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A-sharma Diagnostics (ASD) , Street No-36, Mahavir Enclave Part-3, New Delhi, Pincode-110059</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@asdlabs.online<br>a.sharmadiagnostic@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 8920871162<br>+91 8882335434</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="contact_us_form" method="post" role="form" class="php-email-form">
              @csrf
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group">
                  <input type="number" class="form-control" name="mobile" id="email" maxlength="10" minlength="10" placeholder="Your Mobile Number" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                @if (session('message_status'))
                 <div class="alert alert-success" role="alert">{{ session('message_status')}}</div>
                @endif
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

     <!-- ======= ALERT BOX ======= -->
     @if (session('message_status'))
      <div id="id01" class="modal" style="display: block;">
        <div class="modal-content animate" style="height: 200px;">
          <div class="alert alert-success" role="alert">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            Message Status!.
          </div>
          <div style="padding-left:20px;">
              <p>{{ session('message_status') }}</p>
          </div>
          
        </div>
      </div>
     @endif
    
    <!-- ======= ALERT BOX ======= -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>ASD</h3>
              <p>
                A-sharma Diagnostics<br>
                Street No-36, Mahavir Enclave Part-3,New Delhi, Pincode-110059<br><br>
                <strong>Mobile:</strong> +91 892087 1162<br>
                <strong>Email:</strong> info@asdlabs.online<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Dashboard</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Contac Us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">All Blood Tests.</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Home Based Blood Sample Collection.</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Book an Appointment For Blood Collection and CT Scan, MRI, X-Rays.</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">CBC,LFT,KFT,HIV,BLOOD GROUP,Thyroid</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Full body checkup</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe for all new updates and health packages</p>
            <form action="/subscribe" method="post">
                @csrf
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ASD Laboratory</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">ASD Laboratory</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<script>
        let input = document.getElementById("inputTag");
        let imageName = document.getElementById("imageName")

        input.addEventListener("change", ()=>{
            let inputImage = document.querySelector("input[type=file]").files[0];
            imageName.innerText = inputImage.name;
        })
    </script>
<!--time picker js cdn-->
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>
<!--End time picker js cdn-->
<script type="text/javascript">
$(document).ready(function(){
     
    $('#datepicker').datepicker({
      dateFormat: "dd-mm-yy"
       //beforeShowDay: $.datepicker.noWeekends
    });
    $('#timepicker').timepicker();

    $('#patient').focus(function(){
      $(this).css('border','');
    });
    

    $('#Confirm_identity').click(function(){
      $patient_id = $('#patient').val()
      if ($patient_id != "") {
        if (($patient_id.length)===10) {
          
          $.ajax({
            url : "{{ route('download_online_reports_mobile')}}",
            type: 'GET',
            data: {'patient_id':$patient_id},
            success: function(data){
              $('#patient_result').html(data);
            }
          });

        } else if(($patient_id.length)===8) {
          
          $.ajax({
            url : "{{ route('download_online_reports')}}",
            type: 'GET',
            data: {'patient_id':$patient_id},
            success: function(data){
              $('#patient_result').html(data);
            }
          });

        }else{
          $('#patient').css('color','red');
          $('#patient').css('border','1px solid red');
          $('#patient_result').html("<p style='text-align:center; color:red;'>Please enter 8 digit of patient ID or 10 digit of mobile number.</p>");
        }
        

      } else {
        $('#patient').css('border', '1px solid red');
      }
    });
    
});
</script>
  <!-- Vendor JS Files -->
  <script src={{ asset('assets/vendor/purecounter/purecounter.js') }}></script>
  <script src={{ asset('assets/vendor/aos/aos.js') }}></script>
  <script src={{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>
  <script src={{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}></script>
  <script src={{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}></script>
  {{--<script src="assets/vendor/php-email-form/validate.js"></script>--}}

  <!-- Template Main JS File -->
  <script src={{ asset('assets/js/main.js') }}></script>

</body>
</html>