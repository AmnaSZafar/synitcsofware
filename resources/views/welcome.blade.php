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

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ secure_asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ secure_asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <!-- bootstrap5 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Template Main CSS File -->
  <link href="{{ secure_asset('assets/css/style.css') }}" rel="stylesheet">
  <style>
    .body {
      color: rgba(55, 64, 85, 0.9) !important;
    }
  </style>

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <h2 class="logo"><a href="/"> <img src="{{ secure_asset('assets/img/logo.png') }}" alt="logo"> Syntics Software</a></h2>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="/#portfolio">Projects</a></li>
          {{-- <li><a class="nav-link scrollto" href="#team">Team</a></li> --}}
          {{-- <li><a class="nav-link scrollto" href="#pricing">Courses</a></li> --}}
          <li class="dropdown"><a class="nav-link scrollto" href="#pricing"><span>Study-Internship Program</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{ route('apply.index') }}">Apply</a></li>
              
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      {{-- <hr class="bg-white container"> --}}
      <h1>We provide custom digital solutions for our clients and trainings for enthusiasts</h1>
      {{-- <h2 style="font-style: bold">Introducing Training for young enthusiasts</h2> --}}
      {{-- <hr class="bg-white container"> --}}
      <h2 style="font-style:bold">International Certifications By <a href="https://www.bcs.org/" target="_blank">BCS.ORG <img src="{{ secure_asset('assets/img/clients/client-1.png') }}" height="60px" width="auto" alt=""></a>  |<span class="font-weight-bold" style="color:#ffc107;"> Scholarships for Toppers (No Certification Fee) <br>Remote Course Internship Access for Outstationed candidates, Graduate Students, Working Professionals & Females</span></h2>
      
      {{-- <hr class="bg-white container"> --}}
      {{-- <a href="#about" class="btn-get-started scrollto">Get Started</a> --}}
      <a href="https://youtu.be/TF3tLr33v2M" class="btn-get-started scrollto"><i class="fas fa-play-circle"></i> Get to know us better</a>

    </div>
  </section><!-- End Hero -->

  <main id="main">
    
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients section-bg" style="background-color: rgba(55, 64, 85, 0.9)">
      <div class="container">

        <div class="row">
         

          <div class="col-lg-3 col-md-3 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ secure_asset('assets/img/clients/client-2.png') }}" class="img-fluid" alt="">
          </div>
      
          <div class="col-lg-3 col-md-3 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ secure_asset('assets/img/clients/client-3.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-3 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ secure_asset('assets/img/clients/client-4.png') }}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-3 col-md-3 col-6 d-flex align-items-center justify-content-center">
            <img src="{{ secure_asset('assets/img/clients/client-5.png') }}" class="img-fluid" alt="">
          </div>
        


        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        {{-- <div class="row d-flex justify-content-center">
          <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
              <video controls class="embed-responsive-item">
                <source src="{{ secure_asset('assets/main-video.mp4') }}" type="video/mp4">
              </video>
            </div>
          </div>
        </div>
       
        <br><br> --}}
        <div class="row">
          <div class="col-lg-6">
            <img src="assets/img/p2.jpeg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>We build Customized Software Solutions</h3>
            <p>
                We take pride in our strong capability for designing and engineering robust software using mobile, web, and cloud based technologies. Specializing in custom web applications, intuitive mobile apps, and robust data mining techniques, our team creates digital solutions that impact millions of lives.
            </p>
            <div class="row">
              <div class="col-md-4">
                <i class="fas fa-code-branch"></i>
                <h4>WEB</h4>
                <p>Our web development team creates intuitive user experiences wrapped up in beautiful designs. Everything we create is custom and precisely made to your specification.</p>
              </div>
              <div class="col-md-4">
                <i class="fas fa-brain"></i>
                <h4>AI</h4>
                <p>We have an exceptional team of Artificial Intelligence developers. We have members from all over the world. We follow international standards.</p>
              </div>
              <div class="col-md-4">
                <i class="fas fa-dice-d20"></i>
                <h4>GAMES</h4>
                <p>Our expert team of developers, develop exceptional and customized games as per our client's requests. We have built award-winning games and are waiting to break the records again.</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row counters">

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Clients</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
            <p>Projects</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="24" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="115" data-purecounter-duration="1" class="purecounter"></span>
            <p>Our Students</p>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

     <!-- ======= Services Section ======= -->
     <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2 style="color: rgba(55, 64, 85, 0.9) !important; font-size: 40px;">Services</h2>
            <p>We offer a full range of engineering services that your company needs</p>
          </div>
  
          <div class="row gy-4">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-blue">
                <div class="icon">
                  
                  <i class="fas fa-laptop-code"></i>
                </div>
                <h4><a href="">Web Development</a></h4>
                <p>We create beautifully designed web apps precisely tailored to your situation. From providing Software as a Service to creating custom software to support your customers, our Web App team will get you up and running.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-orange ">
                <div class="icon">
                  
                  <i class="fas fa-mobile"></i>
                </div>
                <h4><a href="">Mobile App Development</a></h4>
                <p>US consumers spend nearly a quarter of their day on their mobile phone – and 92% of that time is spent using apps. Your app needs to be brilliantly designed and intuitive to have a shot at getting anyone’s attention.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-pink">
                <div class="icon">
                  
                  <i class="fab fa-uncharted"></i>
                </div>
                <h4><a href="">Enterprise Software Development</a></h4>
                <p>We provide full range of custom software development services to bring your ideas to life. Our turnkey solutions are custom-designed to fit into your enterprise software ecosystem. Anything you can dream up, from a custom desktop application to a global app, we can build it.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon-box iconbox-yellow">
                <div class="icon">
                 
                  <i class="bx bx-layer"></i>
                </div>
                <h4><a href="">Mern Stack</a></h4>
                <p>We provide digital solutions for clients, which are developed in the latest technology stacks</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon-box iconbox-red">
                <div class="icon">
                 
                  <i class="fas fa-vial"></i>
                </div>
                <h4><a href="">QA & Software Testing Solutions</a></h4>
                <p>A software team is only as good as the quality of the work it produces. That’s why we value excellence over success, and provide specialized QA & testing as a separate service–as well as baked right into every project we take up. No shortcuts.</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon-box iconbox-teal">
                <div class="icon">
                  
                  <i class="fas fa-code-branch"></i>
                </div>
                <h4><a href="">AI Solutions</a></h4>
                <p>We integrate our systems with Artificial Intelligence. We make sure that our product stands out.</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section><!-- End Services Section -->
  

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="text-center">
          <h3>Syntics</h3>
          <p>We build unique and completely customized products designed to impress and satisfy the requiremnets of our clients!</p>
           <a class="cta-btn" target="_blank" href="https://api.whatsapp.com/send?phone=923084339423"><i class="fab fa-whatsapp"></i></i><span>&nbsp; &nbsp;Connect with us</span></a>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section> --}}
    <!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 style="color: rgba(55, 64, 85, 0.9) !important; font-size: 40px;">Commercial Projects that we are working on!</h2>
          {{-- <p>We offer a full range of engineering services that your company needs</p> --}}
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>International Payment Gateway | Digital Banking (Canada)</h4>
              <p>Our Team at Syntics is working on creating an International Payment System that would modernize the lives of the people.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>Hosting & Domain Service Provider (Canada)</h4>
              <p>Optimal Hosting service is essential, that is why our Team at Syntics Hosting Service Provider is working to create a hosting service suitable for all.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>Home & Commercial Security with AI (Pakistan)</h4>
              <p>Having a fool-proof & affordable security system  is essential. Our Team at Syntics is working to create security systems that are affordable and easy to install.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>Advanded Medical Facilities with AI (Pakistan)</h4>
              <p>Safe medical assistance is extremely important for Syntics. Syntics Health assistance is coming soon.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>A Project of Analytics (an E.R.P) (Canada)</h4>
              <p>Syntics is branching out into multiple sectors. Analytics is another branch is Syntics which is coming soon.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>FMCG (Fast Moving Consumer Goods) Delivery System (Pakistan)</h4>
              <p>Syntics has brought it all, food, Grocery, and other consumable goods. Syntics Delivery is coming soon in Pakistan.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>Online Job Portal</h4>
              <p>Syntics is developing an International Job portal which would allow easy access, premium job offers and much more.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>Ecommerce Digital Webshop</h4>
              <p>Syntics is developing an International ecommerce digital portal. Coming Soon Internationally.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                  
                <i class="fas fa-laptop-code"></i>
              </div>
              <h4>Advanced Courier System (Pakistan)</h4>
              <p>Our aim at Syntics is to optimize Courier system in Pakistan. Our project is coming out soon.</p>
            
             </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Instructors</h2>
          {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
        </div>

        <div class="row">
          <div class="col-lg-2"></div>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="{{ secure_asset('assets/img/instructor-1.png') }}" class="img-fluid" alt="">
                <div class="social">
                  {{-- <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a> --}}
                  React | Linux | BlockChain | AI
                </div>
              </div>
              <div class="member-info">
                <h4>Shahid Qureshi</h4>
                <span>IT Manager</span>
              </div>
            </div>
          </div>
         
          <div class="col-lg-5 col-md-6 d-flex justify-content-center">
            <div class="align-middle">
              {{-- <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div> --}}
              I hod Post Graduate diploma and BSc(Hons) in computing from British universities. After my graduation, I  worked in the IT industry for over 9 years in the UK. At the tail-end of 2019, I moved down to Dubai where I worked as an IT Manager. I have worked with wide variety of employers ranging from web hosting companies to charities. I'm a life-long learner and always keep myself abreast with latest technologies. I have completed many online courses during past 5 years. The list of courses includes Linux, React, Artificial intelligence, bloackchain and many more. I have been graduated from a  highly selective and very intense AI mastercamp called Strive school based in Germany, entirely remote and backed by YCombinator.
            </div>
          </div>
{{-- 
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div> --}}

        </div>

      </div>
    </section>
    <!-- End Team Section -->

          <!-- ======= Pricing Section ======= -->
          <section id="pricing" class="pricing section-bg">
            <div class="container" data-aos="fade-up">
      
              <div class="section-title">
                <h2 style="color: rgba(55, 64, 85, 0.9) !important; font-size: 40px;">Trainings</h2>
                <p>We offer One Year courses which are specially designed for young enthusiasts. We offer market-competitve trainings and internship opportunities.</p>
              </div>
              <div class="container my-5 justify-content-center d-flex">
                  <img src="{{ secure_asset('/assets/img/Internships.png') }}" alt="We offer Internship opportunities" class="img-fluid">
              </div>
              
              <div class="row">
      
                {{-- <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="box">
                    <p><h3>Market</h3><span>Full-stack web development</span></p>
                    <h4><sup>PKR</sup>10000+<span> / month</span></h4>
                    <ul>
                      <li class="na">One year <i class="fas fa-times text-danger"></i></li>
                      <li><i class="fab fa-html5"></i> Html <i class="fas fa-check"></i></li>
                      <li><i class="fab fa-css3-alt"></i> Css <i class="fas fa-check"></i></li>
                      <li><i class="fab fa-bootstrap"></i> Bootstrap <i class="fas fa-check"></i></li>
                      <li><i class="fab fa-php"></i> PHP <i class="fas fa-check"></i></li>
                      <li><i class="fab fa-node-js"></i> Javascript <i class="fas fa-check"></i></li>
                      <li><i class="fas fa-database"></i> Mysql <i class="fas fa-check"></i></li>
                      <li class="na"><i class="fab fa-node"></i> NodeJs <i class="fas fa-times text-danger"></i></li>
                      <li class="na"><i class="fab fa-laravel"></i> Laravel <i class="fas fa-times text-danger"></i></li>
                      <li class="na"><i class="fas fa-server"></i> MongoDB <i class="fas fa-times text-danger"></i></li>
                      <li class="na"><i class="fab fa-react"></i> ReactJs <i class="fas fa-times text-danger"></i></li>
                      <li class="na"><i class="fab fa-vuejs"></i> VueJs <i class="fas fa-times text-danger"></i></li>
                      <li class="na"><i class="fas fa-briefcase"></i> <b>INTERNSHIP</b> <i class="fas fa-times danger"></i></li>
                      <li class="na">Pharetra massa</li>
                      <li class="na">Massa ultricies mi</li>
                      <li></li>
                    </ul>
                  </div>
                </div> --}}
      
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
                  <div class="box featured">
                      <span class="advanced">Advanced</span>
                      <p><h3>What We Offer</h3> <br> <small>One Year Course</small> <br>
                         Full-stack web development</p>
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
                        {{-- <li class="na">Pharetra massa</li> --}}
                        {{-- <li class="na">Massa ultricies mi</li> --}}
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
                <div class="col-lg-4 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                  <div class="box featured">
                      <span class="advanced">Advanced</span>
                      <p><h3>What We Offer</h3> <br> <small>One Year Course</small> <br>
                         Artificial Intelligence (Machine Learning & Deep Learning)</p>
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
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="box featured">
                    <span class="advanced">Advanced</span>
                    <p><h3>What We Offer</h3> <br> <small>One Year Course</small> <br>
                        Game Development</p>
                    <h4>Coming soon<span> (2022) </span></h4>
                    <ul>
                      <li><i class="fas fa-biking"></i> Game development life-cycle <i class="fas fa-check"></i></li>
                      
                      <li><i class="fas fa-cubes"></i>  3D game systems and coordinates<i class="fas fa-check"></i></li>
                      <li><i class="fab fa-unity"></i> Unity <i class="fas fa-check"></i></li>
                      <li><i class="fas fa-globe-africa"></i> Environment & terrain drawing <i class="fas fa-check"></i></li>
                      <li><i class="fab fa-hive"></i> Unity assets <i class="fas fa-check"></i></li>
                      <li><i class="fas fa-dna"></i> Game physics <i class="fas fa-check"></i></li>
                      <li><i class="fas fa-project-diagram"></i> Game optimization <i class="fas fa-check"></i></li>
                      <li><i class="fas fa-laptop-code"></i> Publishing & Monitizing Games <i class="fas fa-check"></i></li>
                      <li><i class="fas fa-code-branch"></i> Building humanoids <i class="fas fa-check"></i></li>
                      <li><i class="fab fa-codepen"></i> Mega Game development Projects <i class="fas fa-check"></i></li>
                      <li><i class="fas fa-briefcase"></i> <b>INTERNSHIP</b> <i class="fas fa-check"></i></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      
                      {{-- <li class="na">Pharetra massa</li> --}}
                      {{-- <li class="na">Massa ultricies mi</li> --}}
                    </ul>
                    {{-- <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div> --}}
                  </div>
                </div>
      
                {{-- <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                  <div class="box">
                      <span class="advanced">Advanced</span>
                    <h3>Developer</h3>
                    <h4><sup>$</sup>29<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li>Pharetra massa</li>
                      <li>Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div>
      
                <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                  <div class="box">
                    
                    <h3>Ultimate</h3>
                    <h4><sup>$</sup>49<span> / month</span></h4>
                    <ul>
                      <li>Aida dere</li>
                      <li>Nec feugiat nisl</li>
                      <li>Nulla at volutpat dola</li>
                      <li>Pharetra massa</li>
                      <li>Massa ultricies mi</li>
                    </ul>
                    <div class="btn-wrap">
                      <a href="#" class="btn-buy">Buy Now</a>
                    </div>
                  </div>
                </div> --}}
      
              </div>
      
            </div>
            
            <div class="container my-5 justify-content-center d-flex">
              <button class="p-3 border-0 bg-transparent shadow-lg" style="border-radius: 20px; font-size:20px"><a href="{{ route('apply.index') }}"> <b>Apply NOW</b></a></button>
            </div>
          </section>
          <!-- End Pricing Section -->

    <!-- ======= Pricing Section ======= -->
    
    {{-- <section id="pricing" class="pricing">
      <div class="container">

        <div class="section-title">
          <h2>Pricing</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> --}}
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section> --}}
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 style="color: rgba(55, 64, 85, 0.9) !important; font-size: 40px;">Contact</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-12">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3 style="color: rgba(55, 64, 85, 0.9) !important;">Our Address</h3>
                  <p style="color: rgba(55, 64, 85, 0.9) !important;">Ferozpur Road, Lahore, Pakistan</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3 style="color: rgba(55, 64, 85, 0.9) !important;">Email Us</h3>
                  <p style="color: rgba(55, 64, 85, 0.9) !important;">amna@syntics.co<br>azlan@syntics.co</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3 style="color: rgba(55, 64, 85, 0.9) !important;">Call Us</h3>
                  <p style="color: rgba(55, 64, 85, 0.9) !important;">+923084339423<br> &nbsp;</p>
                </div>
              </div>
            </div>

          </div>

          {{-- <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
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
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div> --}}

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-2 footer-contact">
            <h3>Syntics Software</h3>
            <p>
              Ferozpur Road, Lahore<br>
              Pakistan <br>
              <strong>Email:</strong> <br> amna@syntics.co<br>azlan@syntics.co <br>faizan@syntics.co
            </p>
          </div>

          <div class="col-md-2 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#home">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li> --}}
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> --}}
            </ul>
          </div>

          <div class="col-md-2 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">App Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">QA Testing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">AI Solutions</a></li>
            </ul>
          </div>

          <div class="col-md-2 footer-links">
            <h4>Our Trainings</h4>
            <ul>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li> --}}
              <li><i class="bx bx-chevron-right"></i> <a href="/#pricing">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#pricing">AI</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#pricing">Game Development</a></li>
              {{-- <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
            </ul>
          </div>
          <div class="col-md-2">
            <h4>Our License</h4>
            <img src="{{ secure_asset('assets/img/license.png') }}" class="img-fluid" alt="License">
          </div>
        </div>
      </div>
    </div>
    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright" style="color: rgba(55, 64, 85, 0.9) !important;">
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