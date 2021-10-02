<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Syntics Software.</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- font awesome 5 -->
  <script src="https://kit.fontawesome.com/e2d4df4492.js" crossorigin="anonymous"></script>
              
  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <style>
        body {
            color: #453d72;
        }

        #regForm {
            /* background-color: #ffffff; */
            margin: 0px auto;
            font-family: Raleway;
            padding: 40px;
            border-radius: 10px
        }

        #register {
            color: #453d72;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
            border-radius: 10px;
            -webkit-appearance: none
        }

        .tab input:focus {
            border: 1px solid #453d72 !important;
            outline: none
        }

        input.invalid {
            border: 1px solid #e03a0666
        }

        .tab {
            display: none
        }

        button {
            background-color: #453d72;
            color: #ffffff;
            border: none;
            border-radius: 10%;
            padding: 10px 20px;
            font-size: 17px;
            font-family: Raleway;
            cursor: pointer
        }

        button:hover {
            opacity: 0.8
        }

        button:focus {
            outline: none !important
        }

        #prevBtn {
            background-color: #bbbbbb
        }

        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px;
            width: 100%;
            display: inline-flex;
            justify-content: center
        }

        .step {
            height: 40px;
            width: 40px;
            margin: 0 2px;
            background-color: #453d72;
            border: none;
            border-radius: 10%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 15px;
            color: #ffffff;
            opacity: 0.5
        }

        .step.active {
            opacity: 1
        }

        .step.finish {
            color: #fff;
            background: #453d72;
            opacity: 1
        }

        .all-steps {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 30px
        }

        .thanks-message {
            display: none
        }
    </style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/"> <img src="{{ asset('assets/img/logo.png') }}" alt="logo"> Syntics Software</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="/#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/#about">About</a></li>
          <li><a class="nav-link scrollto" href="/#services">Services</a></li>
          {{-- <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="/#pricing">Courses</a></li> --}}
          <li class="dropdown"><a href=""><span>Study-Internship Program</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('apply.index') }}">Apply</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="/#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
 <main id="main">
     
         <br><br><br><br>
         
         <div class="container mt-5">
             <img src="{{ asset('assets/img/apply.png') }}" alt="apply banner" class="img-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-md-8 shadow-sm">
                    <form id="regForm" action="{{ route('apply.store') }}" method="POST">
                        @csrf
                        <h1 id="register">Application Form</h1>
                        @if ($errors->any())
                        <div class="text-danger text-center align-middle shadow-sm">
                            
                                @foreach ($errors->all() as $error)
                                   <h3>{{ $error }}</h3> <br>
                                @endforeach
                            
                        </div>
                    @endif
                        <div class="all-steps" id="all-steps"> <span class="step"><i class="fa fa-user"></i></span> <span class="step"><i class="fa fa-map-marker"></i></span> <span class="step"><i class="fas fa-envelope-open"></i></span> <span class="step"><i class="fas fa-book-open"></i></span> <span class="step"><i class="fas fa-clock"></i></span> <span class="step"><i class="fa fa-mobile-phone"></i></span> </div>
                        <div class="tab">
                            <h6>What's your name?</h6>
                            <p> <input class="shadow-sm" placeholder="Name" type="text" required oninput="this.className = ''" name="name"></p>
                        </div>
                        <div class="tab">
                            <h6>What's your city?</h6>
                            <p><input placeholder="City" type="text" required oninput="this.className = ''" name="city"></p>
                        </div>
                        <div class="tab">
                            <h6>What's your email?</h6>
                            <p><input placeholder="Email" type="email" required oninput="this.className = ''" name="email"></p>
                        </div>
                        <div class="tab">
                            <h6>Which Study-Internship Program would you like to take?</h6>
                            <p><select name="program" id="" required class="form-control">
                                <option value="">Select</option>
                                <option value="ai">(One Year) Artificial Intelligence (Machine Learning & Deep Learning)</option>
                                <option value="web">(One Year) Full-Stack Website Development</option>
                                <option value="both">Both</option>
                            </select>
                                {{-- <input placeholder="Favourite car" oninput="this.className = ''" name="uname"></p> --}}
                        </p>
                        </div>
                        <div class="tab">
                            <h6>Timings</h6>
                            <p><select name="shift" id="" required class="form-control">
                                <option value="">Select</option>
                                <option value="morning">Morning</option>
                                <option value="evening">Evening</option>
                            </select></p>
                        </div>
                        <div class="tab">
                            <h6>What's your Phone number?</h6>
                            <p><input placeholder="Your phone Number" oninput="this.className = ''" name="phone"></p>
                        </div>
                        <div class="tab text-center">
                            <h3>Thank you for filling the form! </h3> <span>Click below to submit your form.</span><br>
                            <button class="button-sm rounded shadow-sm btn mt-4" type="submit"><b>SUBMIT</b></button>
                        </div>
                        <div style="overflow:auto;" id="nextprevious">
                            <div style="float:right;"> <button type="button" id="prevBtn" onclick="nextPrev(-1)"><i class="fa fa-angle-double-left"></i></button> <button type="button" id="nextBtn" onclick="nextPrev(1)"><i class="fa fa-angle-double-right"></i></button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br>
                <!-- ======= Pricing Section ======= -->
                <section id="pricing" class="pricing section-bg">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title">
                      <h2>Study-Internship Program Details</h2>
                      <p>We offer One Year courses which are specially designed for young enthusiasts. We offer market-competitve trainings and internship opportunities.</p>
                    </div>
                    
                    
                    <div class="row">
            
                      
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="box featured">
                            <span class="advanced">Advanced</span>
                            <p><h3>Full-stack web development</h3> <br> <small>One Year Course</small> <br>
                               </p>
                            <h4><sup>PKR</sup>7000<span> / month</span></h4>
                            <ul>
                              <li><i class="fab fa-html5"></i> Html <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-css3-alt"></i> Css <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-bootstrap"></i> Bootstrap <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-php"></i> PHP <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-node-js"></i> Javascript <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-database"></i> Mysql <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-node"></i> NodeJs <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-laravel"></i> Laravel <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-server"></i> MongoDB <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-react"></i> ReactJs <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-vuejs"></i> VueJs <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-briefcase"></i> <b>INTERNSHIP</b> <i class="fas fa-check"></i></li>
                              {{-- <li class="na">Pharetra massa</li> --}}
                              {{-- <li class="na">Massa ultricies mi</li> --}}
                            </ul>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <span class="advanced">Advanced</span>
                            <p><h3>Artificial Intelligence (Machine Learning & Deep Learning)</h3> <br> <small>One Year Course</small> <br>
                               </p>
                            <h4><sup>PKR</sup>7500<span> / month</span></h4>
                            <ul>
                              
                              <li><i class="fas fa-calculator"></i> Math Foundations <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-python"></i> Python <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-database"></i> Data-structures <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-hive"></i> Intro to Artificial Intelligence <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-trade-federation"></i> Advanced Python Libraries <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-project-diagram"></i> AI projects <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-laptop-code"></i> Machine Learning <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-code-branch"></i> Machine Learning Projects <i class="fas fa-check"></i></li>
                              <li><i class="fab fa-codepen"></i> Deep Learning <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-code-branch"></i> Deep Learning Projects <i class="fas fa-check"></i></li>
                              <li><i class="fas fa-briefcase"></i> <b>INTERNSHIP</b> <i class="fas fa-check"></i></li>
                              <li></li>
                              {{-- <li class="na">Pharetra massa</li> --}}
                              {{-- <li class="na">Massa ultricies mi</li> --}}
                            </ul>
                        </div>
                      </div>
                      
                    </div>
            
                  </div>
                </section>
                <!-- End Pricing Section -->  
      </main>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Syntics</span></strong>. All Rights Reserved
        </div>
        
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
      var currentTab = 0;
document.addEventListener("DOMContentLoaded", function(event) {


showTab(currentTab);

});

function showTab(n) {
var x = document.getElementsByClassName("tab");
x[n].style.display = "block";
if (n == 0) {
document.getElementById("prevBtn").style.display = "none";
} else {
document.getElementById("prevBtn").style.display = "inline";
}
if (n == (x.length - 1)) {
document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
} else {
document.getElementById("nextBtn").innerHTML = '<i class="fa fa-angle-double-right"></i>';
}
fixStepIndicator(n)
}

function nextPrev(n) {
var x = document.getElementsByClassName("tab");
if (n == 1 && !validateForm()) return false;
x[currentTab].style.display = "none";
currentTab = currentTab + n;
if (currentTab >= x.length) {

document.getElementById("nextprevious").style.display = "none";
document.getElementById("all-steps").style.display = "none";
document.getElementById("register").style.display = "none";
document.getElementById("text-message").style.display = "block";




}
showTab(currentTab);
}

function validateForm() {
var x, y, i, valid = true;
x = document.getElementsByClassName("tab");
y = x[currentTab].getElementsByTagName("input");
for (i = 0; i < y.length; i++) { if (y[i].value=="" ) { y[i].className +=" invalid" ; valid=false; } } if (valid) { document.getElementsByClassName("step")[currentTab].className +=" finish" ; } return valid; } function fixStepIndicator(n) { var i, x=document.getElementsByClassName("step"); for (i=0; i < x.length; i++) { x[i].className=x[i].className.replace(" active", "" ); } x[n].className +=" active" ; }
  </script>

</body>

</html>