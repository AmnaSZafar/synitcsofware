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
  <link href="{{ secure_asset('assets/img/logo.png') }}" rel="icon">
  <link href="{{ secure_asset('assets/img/logo.png') }}" rel="apple-touch-icon">

  <!-- bootstrap5 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet">
  <style>
    .body {
      color: rgba(55, 64, 85, 0.9) !important;
    }

.get-in-touch {
  max-width: 800px;
  margin: 50px auto;
  position: relative;

}
.get-in-touch .title {
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 3.2em;
  line-height: 48px;
  padding-bottom: 48px;
     color: rgba(55, 64, 85, 0.9);
    background: rgba(55, 64, 85, 0.9);
    background: -moz-linear-gradient(left,rgba(121, 134, 165, 0.9)  0%,rgba(55, 64, 85, 0.9) 100%) !important;
    background: -webkit-linear-gradient(left,rgba(121, 134, 165, 0.9)  0%,rgba(55, 64, 85, 0.9) 100%) !important;
    background: linear-gradient(to right,rgba(121, 134, 165, 0.9)  0%,rgba(55, 64, 85, 0.9)  100%) !important;
    -webkit-background-clip: text !important;
    -webkit-text-fill-color: transparent !important;
}

.contact-form .form-field {
  position: relative;
  margin: 32px 0;
}
.contact-form .input-text {
  display: block;
  width: 100%;
  height: 36px;
  border-width: 0 0 2px 0;
  border-color: rgba(55, 64, 85, 0.9);
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
}
.contact-form .input-text:focus {
  outline: none;
}
.contact-form .input-text:focus + .label,
.contact-form .input-text.not-empty + .label {
  -webkit-transform: translateY(-24px);
          transform: translateY(-24px);
}
.contact-form .label {
  position: absolute;
  left: 20px;
  bottom: 15px;
  font-size: 18px;
  line-height: 26px;
  font-weight: 400;
  color: rgba(55, 64, 85, 0.9);
  cursor: text;
  transition: -webkit-transform .2s ease-in-out;
  transition: transform .2s ease-in-out;
  transition: transform .2s ease-in-out, 
  -webkit-transform .2s ease-in-out;
}
.contact-form .submit-btn {
  display: inline-block;
  background-color: #000;
   background-image: linear-gradient(125deg,rgba(121, 134, 165, 0.9),rgba(55, 64, 85, 0.9));
  color: #fff;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-size: 16px;
  padding: 8px 16px;
  border: none;
  width:200px;
  cursor: pointer;
}


  </style>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/"> <img src="{{ secure_asset('assets/img/logo.png') }}" alt="logo"> Syntics Software</a></h1>
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
             <img src="{{ secure_asset('assets/img/apply.png') }}" alt="apply banner" class="img-fluid">
            <div class="row d-flex justify-content-center align-items-center">
                {{-- <div class="col-md-6 mt-5 mx-5 shadow-sm bg-transparent">
                    <form style="color: rgba(55, 64, 85, 0.9) !important;" id="regForm" action="{{ route('apply.store') }}" method="POST">
                      @csrf
                      
                      <h1 class="text-center">Application Form</h1>
                      @if ($errors->any())
                        <div class="text-danger text-center align-middle shadow-sm">
                            
                                @foreach ($errors->all() as $error)
                                  <h3>{{ $error }}</h3> <br>
                                @endforeach
                        </div>
                      @endif
                      <input class="shadow-sm form-control" placeholder="Name" type="text" required name="name">
                      <br>
                      <input class="shadow-sm form-control" placeholder="City" type="text" required name="city">
                      <br>
                      <input class="shadow-sm form-control" placeholder="Email" type="email" required name="email">
                      <br>
                      <h6>Which Study-Internship Program would you like to take?</h6>
                      <br>
                      <select class="shadow-sm form-control" name="program" id="" required class="form-control">
                          <option value="">Select</option>
                          <option value="ai">(One Year) Artificial Intelligence (Machine Learning & Deep Learning)</option>
                          <option value="web">(One Year) Full-Stack Website Development</option>
                          <option value="both">Both</option>
                      </select>
                      <br>
                      <h6>Timings</h6>
                      <br>
                      <select class="shadow-sm form-control" name="shift" id="" required class="form-control">
                          <option value="">Select</option>
                          <option value="morning">Morning</option>
                          <option value="evening">Evening</option>
                      </select>
                      <br>
                      <h6>What is your education level?</h6>
                      <br>
                      <select class="shadow-sm form-control" name="education" id="" required class="form-control">
                        <option value="">Select</option>
                        <option value="interStudent">I am a student doing O/A Levels or Intermediate</option>
                        <option value="interComplete">I have just completed my O/A Levels or Intermediate</option>
                        <option value="bachelorStudent">I am a student doing a Bachelor's degree</option>
                        <option value="bachelorComplete">I have just completed Bachelor's degree</option>
                        <option value="other">Other</option>
                      </select>  
                      <br>
                      <h6>What's your Phone number?</h6>
                      <br>
                      <input class="shadow-sm form-control" placeholder="Your phone Number" name="phone">
                      <br>
                      <div class="text-center">
                          
                          <button class="button-sm rounded shadow-sm btn mt-4" type="submit"><b>SUBMIT</b></button>
                      </div>
                      <br><br>
                    </form>
                </div> --}}
                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScbgDl8rI8WsqPnXEBJlzMVwqt3LkbWN5Qak5FxW25zEXXVew/viewform?embedded=true" width="640" height="1700" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
            </div>
        </div>
        <br>
        {{-- <section class="get-in-touch">
          <h1 class="title">Application Form</h1>
          <form class="contact-form row" action="{{ route('apply.store') }}" method="POST">
            @csrf
            @if ($errors->any())
              <div class="text-danger text-center align-middle shadow-sm">
                  
                      @foreach ($errors->all() as $error)
                        <h3>{{ $error }}</h3> <br>
                      @endforeach
              </div>
            @endif
             <div class="form-field col-lg-6">
                <input id="name" class="input-text js-input" type="text" required name="name">
                <label class="label" for="name">Name</label>
             </div>
             <div class="form-field col-lg-6 ">
                <input id="email" class="input-text js-input" type="email" required name="email">
                <label class="label" for="email">E-mail</label>
             </div>
             <div class="form-field col-lg-6 ">
                <input id="company" class="input-text js-input" type="text" required name="city">
                <label class="label" for="company">City</label>
             </div>
             <div class="form-field col-lg-6">
              <select class="input-text js-input" name="program" id="program" required>
                <option value="">&nbsp;</option>
                <option value="ai">(One Year) Artificial Intelligence (Machine Learning & Deep Learning)</option>
                <option value="web">(One Year) Full-Stack Website Development</option>
                <option value="both">Both</option>
              </select>
              <label class="label" for="program">Study-Internship Program</label>
             </div>
             <div class="form-field col-lg-6">
              <select class="input-text js-input" name="shift" id="shift" required>
                <option value="">&nbsp;</option>
                <option value="morning">Morning</option>
                <option value="evening">Evening</option>
              </select>
              <label class="label" for="shift">Timings</label>
             </div>
             <div class="form-field col-lg-6">
              <select class="input-text js-input" name="education" id="education" required>
                <option value="">&nbsp;</option>
                <option value="interStudent">I am a student doing O/A Levels or Intermediate</option>
                <option value="interComplete">I have just completed my O/A Levels or Intermediate</option>
                <option value="bachelorStudent">I am a student doing a Bachelor's degree</option>
                <option value="bachelorComplete">I have just completed Bachelor's degree</option>
                <option value="other">Other</option>
              </select>
              <label class="label" for="education">Your Education Level</label>
             </div>
              <div class="form-field col-lg-6 ">
                <input id="phone" name="phone" class="input-text js-input" type="text" required>
                <label class="label" for="phone">Contact Number</label>
             </div>
             
             <div class="form-field col-lg-12">
                <input class="submit-btn" type="submit" value="Submit">
             </div>
          </form>
       </section> --}}
                <!-- ======= Pricing Section ======= -->
                <section id="pricing" class="pricing section-bg">
                  <div class="container" data-aos="fade-up">
            
                    <div class="section-title" style="color: rgba(55, 64, 85, 0.9) !important;">
                      <h2>Study-Internship Program Details</h2>
                      <hr>
                      <h2>Cost-Effective | 25% More Learning-Content | Market-Competitive </h2>
                      <p>We offer One Year courses which are specially designed for young enthusiasts. We offer market-competitve trainings and internship opportunities.</p>
                      
                    </div>
                    
                    
                    <div class="row">
            
                      
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
                        <div class="box featured">
                            <span class="advanced">Advanced</span>
                            <p><h3>Full-stack web development</h3> <br> <small>One Year Course</small> <br>
                               </p>
                            <h4><sup>PKR</sup>6,667<span> / month</span></h4>
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
                              <p>
                                <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                  Read More
                                </button>
                              </p>
                              <div class="collapse" id="collapseExample">
                                <div class="card card-body">
                                  During the course of ONE YEAR, students will have to pass multiple levels.
                                  <b>Level 1</b>
                                    Understanding Data Structures <br>
                                    Algorithmic Exercises <br>
                                    Understanding Big-O & optimized algorithms <br>
                                  <b>Level 2</b>
                                    Front-end Basics: <br>
                                    HTML <br>
                                    CSS <br>
                                    Bootstrap <br>
                                    Tailwind CSS <br>
                                    PHP <br>
                                    Javascript <br>
                                    <b>Level 2</b>
                                    Back-end Basics:
                                    SQL/MYSQL/POSTGRE SQL <br>
                                    Api<br>
                                    Nodejs <br>
                                    Laravel <br>
                                    Implement relational databases and schemas <br>
                                    <b>Level 3</b>
                                    React<br>
                                    Redux<br>
                                    Express js <br>
                                    start building portfolio projects <br>
                                    <b>Level 4</b>
                                    LAMP STACK <br>
                                    MERN STACK <br>
                                    <b>Level 5</b>
                                    Internships <br>
                                    Freelancing portal access by Syntics <br>  
                                
                                </div>
                              </div>
                            </ul>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <span class="advanced">Advanced</span>
                            <p><h3>Artificial Intelligence (Machine Learning & Deep Learning)</h3> <br> <small>One Year Course</small> <br>
                               </p>
                               
                            <h4><sup>PKR</sup>7,100<span> / month</span></h4>
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
                              <li></li>
                              <p>
                                <button class="btn btn-outline-secondary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                                  Read More
                                </button>
                              </p>
                              <div class="collapse" id="collapseExample2">
                                <div class="card card-body">
                                  During the course of ONE YEAR, students will have to pass multiple levels.
                                  <b>Level 1</b>
                                    Math Foundations: <br>
                                    Discrete Mathematics <br>
                                    Data Structures <br>
                                    Programming Basics in python (Part 1) <br>
                                    Programming Basics in python (Part 2) <br>
                                    Artificial Intelligence Basics <br>
                                    <b>Level 2</b>
                                    Artificial Intelligence Branches <br>
                                    Advanced Mathematics <br>
                                    Neural Networks Basics<br>
                                    Neural Network Projects <br>
                                    <b>Level 3</b>
                                    What is Machine Learning <br>
                                    Advanced Python Libraries like Tensorflow, numpy, pandas... <br>
                            
                                    Machine Learning Projects using databases<br>
                                    <b>Level 4</b>
                                    What is Deep Learning <br>
                                    Advanced Python Libraries like Keras <br>
                                    Deep Learning Projects using databases<br>
                                    <b>Level 5</b>
                                    Internships <br>
                                    Freelancing portal access by Syntics <br>
                                    
                                </div>
                              </div>
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
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Syntics Software</h3>
            <p>
              Ferozpur Road, Lahore<br>
              Pakistan <br>
              <strong>Email:</strong> <br> amna@syntics.co<br>azlan@syntics.co <br>faizan@syntics.co
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> --}}
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">App Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">QA Testing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">AI Solutions</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Our Trainings</h4>
            <ul>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="/#pricing">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#pricing">AI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#pricing">Game Development</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
            </ul>
          </div>

        </div>
      </div>
    </div>
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>