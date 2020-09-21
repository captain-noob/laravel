@extends('layouts.headerandfooter')
@section("contents")   
    <!-- ======= Hero Section ======= -->
    <body style="font-family: 'Raleway', sans-serif;">
    <section id="hero">
        <div class="hero-container">
            <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

                <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

                <div class="carousel-inner" role="listbox">

                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('assets/img/bg-1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown type-font">Assisi Institute of Foreign
                                        Languages</span></h2>
                                <div class="container text-white">
                                    <h6 class="text-center hde font-weight-bold" style="letter-spacing:2px" data-aos="fade-up">The most promising language school in Kerala<br>
                                    <br>Run by Capuchin Fathers<br></h6>
                                </div>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">Contact Us <i class="fa fa-phone"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started  btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">Our Programs <i class="fa fa-flash"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started  btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                style="cursor: pointer;">Upcoming Batches <i class="fab fa-linode"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started  btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">WhatsApp <i class="fab fa-whatsapp"></i></a>
                                
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item" style="background-image: url('assets/img/hero_bg_2.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">Join us <span>and Emphasize your Career</span></h2>
                                <!--<div class="container text-white">
                                    <h6 class="text-center hde">India’s Best & Exclusive Foreign Language
                                        Institute<br><br>Taught By Experienced Lectures</h6>
                                </div>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started animated fadeInUp scrollto"
                                    style="cursor: pointer;">Contact Us</a>
                                <a href="#about" class="btn-get-started bg-danger animated fadeInUp scrollto">Register
                                    Now</a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started animated fadeInUp scrollto"
                                    style="cursor: pointer;">WhatsApp Us</a>-->
                                <div class="container text-white">
                                <h6 class="text-center hde font-weight-bold animated fadeInUp" style="letter-spacing:2px" data-aos="fade-up">The most promising language school in Kerala<br>
                                <br>Run by Capuchin Fathers<br></h6>
                                </div>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">Contact Us <i class="fa fa-phone"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">Our Programs <i class="fa fa-flash"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                style="cursor: pointer;">Upcoming Batches <i class="fab fa-linode"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">WhatsApp <i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item" style="background-image: url('assets/img/hero_bg_1.jpg');">
                        <div class="carousel-container">
                            <div class="carousel-content container">
                                <h2 class="animated fadeInDown">Admission Started for new <span>Batches</span></h2>
                                <!--<div class="container text-white">
                                    <h6 class="text-center hde">Best batches available<br><br>Taught By Experienced
                                        Lectures</h6>
                                </div>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto"
                                    style="background-color: #FF9C00;">Fixed Regular Batches</a>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto"
                                    style="background-color: #FF6F01;">Flexible Regular Batches</a>
                                <a href="#about" class="btn-get-started animated fadeInUp scrollto"
                                    style="background-color: #FF2500;">Fast Track Dynamic Batches</a>-->
                                <div class="container text-white">
                                <h6 class="text-center hde font-weight-bold animated fadeInUp" style="letter-spacing:2px" data-aos="fade-up">The most promising language school in Kerala<br>
                                <br>Run by Capuchin Fathers<br></h6>
                                </div>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">Contact Us <i class="fa fa-phone"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">Our Programs <i class="fa fa-flash"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                style="cursor: pointer;">Upcoming Batches <i class="fab fa-linode"></i></a>
                                <a onclick="window.scrollTo(0, 600);" class="btn-get-started btn btn-lg col-lg-3 animated fadeInUp scrollto"
                                    style="cursor: pointer;">WhatsApp <i class="fab fa-whatsapp"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="carousel-control-prev" href="#heroCarousel" data-aos="fade-right" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-scroll-bubble-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" data-aos="fade-left" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-scroll-bubble-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>


            </div>
        </div>
    </section><!-- End Hero -->
    <div class="col panl" >
        <a href="#" data-aos="fade-up" class="btn text-white" data-toggle="modal" data-target="#mymodal" style="background-color:#4045AE;">More <i class="fab fa-superpowers"></i></a>
        <a href="#" data-aos="fade-up" class="btn text-white float-right"style="background-color:#4045AE;"><i class="fab fa-wpexplorer"></i> View</a>
    </div>

    <!--<marquee behavior="" direction="left" class="text-danger pt-3"><span><img src="assets/img/logo/new.GIF"
                alt=""></span> Admissions
        for 2020-21 batches
        started. Register Now. <span><img src="assets/img/logo/new.GIF" alt=""></span> Admissions
        for 2020-21 batches
        started. Register Now.
    </marquee>-->

    <div class="container mt-5 " data-aos="fade-up">
        <div id="slider2" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li class="active ind" data-target="#slider2" data-slide-to="0">
                    <li class="ind" data-target="#slider2" data-slide-to="1"></li>
                    <li class="ind" data-target="#slider2" data-slide-to="2"></li>
                </li>
            </ol>
            <div class="carousel-inner shadow radius">
                <div class="carousel-item active p-3 radius mpb mp1">
                    <div class="row p-2">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ml-2 mx-auto">
                            <div>
                                <p class="text-white pt-1 text-center" style="line-height:35px;"><span><i class="fas fa-user-graduate fa-2x p-2"></i></span>
                                 Admissions for 2020-21 batches started. 
								 <a class="ml-2" href="/register"><span class=" btn btn-light btn-rounded" style="border-radius:15px;">Register Now <i class="fa fa-user-plus text-danger"></i> </span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item p-3 radius mpb mp2" >
                    <div class="row p-2">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ml-2 mx-auto">
                            <div>
                                <p class="text-white pt-1 text-center" style="line-height:35px;"><span><i class="fas fa-user-graduate fa-2x p-2"></i></span>
                                Admissions for 2020-21 batches started. 
								<a class="ml-2" href="/register"><span class=" btn btn-light btn-rounded" style="border-radius:15px;">Register Now <i class="fa fa-user-plus text-danger"></i> </span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item  p-3 radius mpb mp3">
                    <div class="row p-2">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ml-2 mx-auto">
                            <div>
                                <p class="text-white pt-1 text-center" style="line-height:35px;"><span><i class="fas fa-user-graduate fa-2x p-2"></i></span>
                                Admissions for 2020-21 batches started. 
								<a class="ml-2" href="/register"><span class=" btn btn-light btn-rounded" style="border-radius:15px;">Register Now <i class="fa fa-user-plus text-danger"></i> </span></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--<section id="why-us" class="why-us pt-5 pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-group"></i>
                                    <h4 style="color: #2C234D;">People</h4>
                                    <p class="text-col1">Our experienced staffs are dedicated to equip you with
                                        necessary linguistic
                                        skills to become successful migrating professionls by leveraging their skills
                                        experience and knowledge.</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-cube-alt"></i>
                                    <h4 style="color: #2C234D;">Environment</h4>
                                    <p class="text-col1">A splendid location at the heart of the educational hub in
                                        Kottayam with
                                        picturesque environs, well equipped labs and libraries with student centric
                                        environment makes AIFL the perfect destination for all those seeking to learn.
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="bx bx-selection"></i>
                                    <h4 style="color: #2C234D;">Values</h4>
                                    <p class="text-col1">Our christian identity blended with elements of popular modern
                                        culture spurs you
                                        on to explore the vastness of learning foreign languages beyond the horizon.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section> --> <!-- End Why Us Section -->

    <section id="about" class="site-section element-animate ">
        <div class="container ">
            <div class="row">
                <div class="col-md-12 col-lg-6 order-md-1 mb-3">
                    <div class="block-15 radius pl-4 pt-3 pb-2" data-aos="fade-right" data-aos-delay="50" style="height:100%" >
                    <!-- <div class="block-15 " data-aos="fade-right"> -->
                        <div class="heading pt-3">
                            <h2 style="color: #2C234D;"><b>Welcome to Our Institute</b></h2>
                        </div>
                        <div class="mb-2 pr-4 ">
                            <p class="tex-col">ASSISI Institute of Foreign Languages (AIFL) is providing German language
                                coaching in Bharananganam, Kottayam District of Kerala State since September 2016. AIFL functions
                                under Capuchin Charitable and Educational Society (CCES). The institution aims at
                                creating a situation of borderlessness by going beyond one’s linguistic boarders. </p>
                        </div>
                        <p data-aos="fade-right">
                            <a href="#" class="btn reverse py-2 mb-5 mt-3 px-4">
                                MORE ABOUT US <i class="fa fa-long-arrow-right"></i></a>
                        </p>
                    </div>
                </div>

                <div class="col-md-12 col-lg-6 col-sm-12 order-md-2">
                    <div class="block-15  shadow radius pt-4 pl-4 pb-5 pr-4" data-aos="fade-left" data-aos-delay="100" >
                        <div class="heading pt-3">
                            <h2 style="color: #2C234D;"><b>Our Achievers</b></h2>
                        </div>
                        
                        <div id="slider3" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active ind" style="background-color: #11CBD7 !important;" data-target="#slider3" data-slide-to="0">
                                    <li class="ind" style="background-color: #11CBD7 !important;" data-target="#slider3" data-slide-to="1"></li>
                                    <li class="ind" style="background-color: #11CBD7 !important;" data-target="#slider3" data-slide-to="2"></li>
                                </li>
                            </ol>
                            <div class="carousel-inner radius">
                                <div class="carousel-item active p-3 radius"  style="border:1px solid rgba(10, 10, 226, 0.171);border-radius:5px;">
                                    <div class="row p-2">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ml-2 mx-auto">
                                            <p class="text-center font-weight-bold text-dark">A2 Winners <i class="fa fa-trophy text-primary"></i></p>
                                            <hr style="margin-top:-5px;">
                                            <div class="row portfolio-container mt-4" data-aos="fade-up" data-aos-delay="100">
                                
                                
                                                <!--first row-->
                                                @foreach($galleryA2 as $gallery)
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="{{asset('image/gallery/'.$gallery->image)}}" class="img-fluid" alt="">
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">{{$gallery->body}}</p>
                                                </div>
                                                @endforeach
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="assets/img/testimonials/avatar.jpg" class="img-fluid" alt="">
                                                    
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">You</p>
                                                </div>
												
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
												<a href="/gallery/album/1">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="assets/img/testimonials/plus.png" class="img-fluid" alt="">
                                                    
                                                  </div>
												  
													<p class="text-center text-dark pt-2" style="font-size:12px;">More</p>
												 </a>
                                                </div>
												 
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item p-3 radius"  style="border:1px solid rgba(10, 10, 226, 0.171);border-radius:5px;">
                                    <div class="row p-2">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ml-2 mx-auto">
                                            <p class="text-center font-weight-bold text-dark">B2 Winners <i class="fa fa-trophy text-primary"></i></p>
                                            <hr style="margin-top:-5px;">
                                            <div class="row portfolio-container mt-4" data-aos="fade-up" data-aos-delay="100">
                                                <!--first row-->
                                                @foreach($galleryB2 as $gallery)
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="{{asset('image/gallery/'.$gallery->image)}}" class="img-fluid" alt="">
                                                    
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">{{$gallery->body}}</p>
                                                </div>
                                                @endforeach
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="assets/img/testimonials/avatar.jpg" class="img-fluid" alt="">
                                                    
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">You</p>
                                                </div>
                
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
												<a href="/gallery/album/2">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="assets/img/testimonials/plus.png" class="img-fluid" alt="">
                                                   
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">More</p>
												  </a>
                                                </div>
                                            </div>



                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item  p-3 radius"  style="border:1px solid rgba(10, 10, 226, 0.171);border-radius:5px;">
                                    <div class="row p-2">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-12 ml-2 mx-auto">
                                            <p class="text-center font-weight-bold text-dark">C2 Winners <i class="fa fa-trophy text-primary"></i></p>
                                            <hr style="margin-top:-5px;">
                                            <div class="row portfolio-container mt-4" data-aos="fade-up" data-aos-delay="100">
                                                <!--first row-->
                                                @foreach($galleryC2 as $gallery)
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="{{asset('image/gallery/'.$gallery->image)}}" class="img-fluid" alt="">
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">{{$gallery->body}}</p>
                                                </div>
                                                @endforeach
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="assets/img/testimonials/avatar.jpg" class="img-fluid" alt="">
                                                    
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">You</p>
                                                </div>
                
                                                <div class="col-lg-2 col-md-2 col-sm-2 col-3 portfolio-item filter-app">
												<a href="/gallery/album/3">
                                                  <div class="portfolio-wrap" style="border-radius:50%">
                                                    <img src="assets/img/testimonials/plus.png" class="img-fluid" alt="">
                                                    
                                                  </div>
                                                  <p class="text-center text-dark pt-2" style="font-size:12px;">More</p>
												  </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!--<div class="container" style="background-color:#E3E1FF;border-top-right-radius:15px">
                            <div class="row" data-aos="fade-left"  style="background-color:#E1F0FA;border-top-right-radius:15px;">
                                <div class="col-lg-12 col-md-12 col-sm-12 d-flex">
                                  <ul id="portfolio-flters">
                                    <li style="border-right:1px solid white;">A2 Winners</li>
                                    <li style="border-right:1px solid white;">B2 Winners</li>
                                    <li>C2 Winners</li>
                                  </ul>
                                </div>
                            </div>
                            <div class="row portfolio-container mt-4" data-aos="fade-up" data-aos-delay="100">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 portfolio-item filter-app">
                                  <div class="portfolio-wrap">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                      <a href="assets/img/testimonials/testimonials-5.jpg" data-gall="portfolioGallery" class="venobox py-2"
                                        title="App 1">Albin Francis</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 portfolio-item filter-web">
                                  <div class="portfolio-wrap">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                      <a href="assets/img/testimonials/testimonials-5.jpg" data-gall="portfolioGallery" class="venobox py-2"
                                        title="Web 3">Noel Francis</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 portfolio-item filter-app">
                                  <div class="portfolio-wrap">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                      <a href="assets/img/testimonials/testimonials-5.jpg" data-gall="portfolioGallery" class="venobox py-2"
                                        title="App 2">Noel Francis</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 portfolio-item filter-app">
                                  <div class="portfolio-wrap">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                      <a href="assets/img/testimonials/testimonials-5.jpg" data-gall="portfolioGallery" class="venobox py-2"
                                        title="App 2">Noel Francis</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 portfolio-item filter-app">
                                  <div class="portfolio-wrap">
                                    <img src="assets/img/testimonials/avatar.jpg" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                      <a href="assets/img/testimonials/avatar.jpg" data-gall="portfolioGallery" class="venobox py-2"
                                        title="App 2">You</a>
                                    </div>
                                  </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-4 portfolio-item filter-app">
                                  <div class="portfolio-wrap">
                                    <img src="assets/img/testimonials/plus.png" class="img-fluid" alt="">
                                    <div class="portfolio-links">
                                      <a href="assets/img/testimonials/plus.png" data-gall="portfolioGallery" class="venobox py-2"
                                        title="App 2">View More</a>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======= Courses Section ======= -->
    <section id="courses" class="services pb-5">
        <div class="container mb-5">

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center" style="color: #2C234D;"><b>Courses</b></h2>
                <p class="text-center" style="color: #2C234D;">What We Can Offer For You</p>
            </div>

            <div class="row">

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                        <div class="icon  icon2"></div>
                        <h4 class="title"><a href="">German</a></h4>
                        <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                            dolore</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon icon3"></div>
                        <h4 class="title"><a href="">French</a></h4>
                        <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                        <div class="icon icon4"></div>
                        <h4 class="title"><a href="">Italian</a></h4>
                        <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon icon1"></div>
                        <h4 class="title"><a href="">English</a></h4>
                        <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Courses Section -->

    <section class=" p-5" style="background-color:#E1F0FA;">
      <div class="container">
          <div class="row">
            <div class="wants-wrapper col-lg-6 pb-5 bvr">
                <div class="row align-items-center justify-content-between">
                  <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-right">
                      <div class="wantToWork-caption wantToWork-caption2">
                          <h2 class="font-weight-bold" style="color:#2C234D">Download our Newsletter</h2>
                          <p style="color:#2C234D">Our success story depends on the students who learn from us by enlightning their knowledge. </p>
                      </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-right">
                      <a href="newsletter/download" class="btn btt text-white px-5 py-3">Download <i class="fa fa-download"></i></a>
                  </div>
                </div>
            </div>
            <div class="wants-wrapper col-lg-6 pl-lg-5 pl-md-0 pl-sm-0">
                <div class="row align-items-center justify-content-between">
                  <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-right">
                      <div class="wantToWork-caption wantToWork-caption2">
                          <h2 class="font-weight-bold" style="color:#2C234D">Download our Brochure</h2>
                          <p style="color:#2C234D">Our success story depends on the students who learn from us by enlightning their knowledge. </p>
                      </div>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12" data-aos="fade-right">
                      <a href="newsletter/download" class="btn btt text-white px-5 py-3">Download <i class="fa fa-download"></i></a>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </section>



    <!-- Team Section Begin -->
    <section class="team spad bg-light pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title" data-aos="fade-up">
                        <h2 class="text-center" style="color: #2C234D;"><b>Our Instructors</b></h2>
                        <p class="text-center" style="color: #2C234D;">Our Skilled & Highly Qualified Faculty</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-5 mx-auto" data-aos="fade-up" data-aos-delay="100">
                    <div class="team__item bg-white" style="border-radius:5px;">
                        <div class="team__item__img row col-lg-12 ml-1">
                            <img class="img-staff mx-auto" src="assets/img/testimonials/testimonials-5.jpg" alt="" class="mx-auto row" style="width:150px;border-radius:5px;">
                            <div class="team__item__text">
                            <h5 class="text-center pt-3">DAVID WARNER</h5>
                            <span class="text-center">Instructor</span>
                            <p class="text-center">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="team__item bg-white " style="border-radius:5px;">
                        <div class="team__item__img row">
                            <img class="img-staff mx-auto" src="assets/img/testimonials/testimonials-5.jpg" alt="" style="border-radius:5px;">
                        </div>
                        <div class="team__item__text">
                            <h6 class="font-weight-bold v1">DAVID WARNER</h6>
                            <span class="v1">Instructor</span>
                            <p class="v1">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                            <!--<div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="team__item bg-white" style="border-radius:5px;">
                        <div class="team__item__img row">
                            <img class="img-staff mx-auto" src="assets/img/testimonials/testimonials-5.jpg" alt="" style="border-radius:5px;">
                        </div>
                        <div class="team__item__text">
                            <h6 class="font-weight-bold v1">DAVID WARNER</h6>
                            <span class="v1">Instructor</span>
                            <p class="v1">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="50">
                    <div class="team__item bg-white" style="border-radius:5px;">
                        <div class="team__item__img row">
                            <img class="img-staff mx-auto" src="assets/img/testimonials/testimonials-5.jpg" alt="" style="border-radius:5px;">
                        </div>
                        <div class="team__item__text">
                            <h6 class="font-weight-bold v1">DAVID WARNER</h6>
                            <span class="v1">Instructor</span>
                            <p class="v1">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <div class="team__item bg-white" style="border-radius:5px;">
                        <div class="team__item__img row">
                            <img class="img-staff mx-auto" src="assets/img/testimonials/testimonials-5.jpg" alt="" style="border-radius:5px;">
                        </div>
                        <div class="team__item__text">
                            <h6 class="font-weight-bold v1">DAVID WARNER</h6>
                            <span class="v1">Instructor</span>
                            <p class="v1">Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor.</p>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!--batches-->
    <!-- <div class="container pb-5 pt-5 mb-5">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="section-title" data-aos="fade-up">
                    <h2 class="text-center" style="color: #2C234D;"><b>Batches</b></h2>
                    <p class="text-center" style="color: #2C234D;">Various batches available</p>
                </div>
            </div>
        </div>
        <div class="row ml-2 mr-2">
            <div class="bytn1 col-lg-3 col-md-3 col-sm-3 mx-auto text-center btn p-3 mb-3" data-aos="fade-right" data-aos-delay="50">
                <b>Fixed Regular</b>
            </div>
            <div class="bytn2 col-lg-3 col-md-3 col-sm-3 mx-auto text-center btn p-3 mb-3" data-aos="fade-right" data-aos-delay="100">
                <b>Flexible Regular</b>
            </div>
            <div class="bytn3 col-lg-3 col-md-3 col-sm-3 mx-auto text-center btn p-3 mb-3" data-aos="fade-right" data-aos-delay="150">
                <b>Fast Track Dynamic</b>
            </div>
        </div>
    </div> -->
    <!--end batches-->


    <!-- ======= Facts Section ======= -->
    <section id="facts" class="wow fadeIn pb-5">
      <div class="container">

        <div class="row counters mb-5 pt-2 radius" data-aos="fade-up" style="background-color:#020996be">

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" class="text-white">2740</span>
            <p class="font-weight-bold"> <i class="fa fa-bar-chart"></i> Placed</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" class="text-white">4210</span>
            <p class="font-weight-bold"> <i class="fa fa-graduation-cap"></i> Qualified</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" class="text-white">1,364</span>
            <p class="font-weight-bold"> <i class="fa fa-trophy"></i> B2 Winners</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up" class="text-white">1800</span>
            <p class="font-weight-bold"> <i class="fa fa-university"></i> Instructors</p>
          </div>

        </div>

        <div class="facts-img">
            <div class="block-16">
                <figure data-aos="fade-up">
                    <a href="https://www.youtube.com/watch?v=ENuXoebX2os"  class="play-button popup-vimeo"><span
                            class="ion-ios-play"></span></a>
                    <!-- <a href="https://vimeo.com/45830194" class="button popup-vimeo" data-aos="fade-right" data-aos-delay="700"><span class="ion-ios-play"></span></a> -->
                </figure>
            </div>
        </div>
        <div class="container mt-5">
            <h5 class="text-center text-dark font-weight-bold pt-5">Assisi Video</h5>
            <p class="text-center" style="line-height:30px;color:#2C234D">A comprehensive program facilitated by Assisi focuses on learning Foreign Languages which makes the 
                aspirants equipped with all the strategies required to attempt the test and get success.
            </p>
        </div>
      </div>
    </section><!-- End Facts Section -->
    

        
    <div class="site-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 element-animate">
                <div class="col-md-7 text-center section-heading">
                    <h2 class="text-center" data-aos="fade-up" style="color: #2C234D;"><b>Latest News</b></h2>
                </div>
            </div>
            <div class="row element-animate">

                <div class="col-md-12 mb-5 mb-lg-0 col-lg-6">
                @foreach($new as $news)

                    <div class="block-20 radius" data-aos="fade-right">
                        <figure>
                            <a href="#"><img src="{{asset('image/news/'.$news->image)}}" alt="" class="img-fluid"></a>
                        </figure>
                        <div class="text pb-4 pt-4">
                            <h3 class="heading"><a href="#">{{$news->body}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="ion-android-calendar"></span> {{$news->created_at}}</a></div>
                                <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                                <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach
                <div class="col-md-12 col-lg-6">
@foreach($data as $image)
                    <div class="block-21 d-flex mb-4" data-aos="fade-up" data-aos-delay="150">
                        <figure class="mr-3">
                            <a href="#"><img src="{{asset('image/news/'.$image->image)}}" alt="" class="img-fluid"></a>
                        </figure>
                        <div class="text">
                            <h3 class="heading"><a href="#">{{$image->body}}</a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="ion-android-calendar"></span>{{$image->created_at}}</a></div>
                                <div><a href="#"><span class="ion-android-person"></span> Admin</a></div>
                                <div><a href="#"><span class="ion-chatbubble"></span> 19</a></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--Other links-->
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2 class="text-center" data-aos="fade-right"  style="color: #2C234D;"><b>Miscellaneous</b></h2>
                </div>
            </div>
            <div class="row border-responsive">
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="50">
                    <div class="text-center">
                        <span class="icofont-telephone display-4 d-block mb-3"></span>
                        <h4 class="titled"><a href="#">Telephone Directory</a></h4>
                        <p class="description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="100">
                    <div class="text-center">
                        <span class="icofont-video-cam display-4 d-block mb-3"></span>
                        <h4 class="titled"><a href="#">Video Gallery</a></h4>
                        <p class="description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0 border-right" data-aos="fade-up" data-aos-delay="150">
                    <div class="text-center">
                        <span class="icofont-news display-4 d-block mb-3"></span>
                        <h4 class="titled"><a href="#">News Portal</a></h4>
                        <p class="description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="text-center">
                        <span class="icofont-graduate display-4 d-block mb-3"></span>
                        <h4 class="titled"><a href="#">Scholarships</a></h4>
                        <p class="description1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nobis?
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg bg-light pt-5 pb-5">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2 class="text-center pt-3" style="color: #2C234D;"> <b>Testimonials</b></h2>
            </div>

            <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">
            @foreach($testimonial as $key => $data)

                <div class="testimonial-wrap py-2 pr-3 radius" style="background-color:#FFFFFF">
                    <div class="testimonial-item">
                        <img src="{{asset('image/testimonial/'.$data->image)}}" class="testimonial-img" alt="">
                        <h3>{{$data->name}}</h3>
                        <h4>{{$data->designation}} </h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>{{$data->body}}
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap pt-4 py-2" style="background-color:#FFFFFF">
                    <div class="col-md-12 order-md-2">
                    <div class="block-16">
                        <figure>
                          <iframe width="420" height="280" style="border-radius:5px;"
                              src="{{$youtube[$key]->youtubelink}}">
                          </iframe> 
                        </figure>
                    </div>
                    </div>
                </div>
                @endforeach
                
                <!--<div class="testimonial-wrap  py-2" style="background-color:#FFFFFF">
                    <div class="testimonial-item">
                        <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                        <h3>Joel Sunny George</h3>
                        <h4>Designer</h4>
                        <p>
                            <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                            Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum
                            eram malis
                            quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                            <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>-->

            </div>

        </div>
    </section><!-- End Testimonials Section -->
   <!-- <section class="container-fluid ftco-no-pt ftco-no-pb" style="background-color: #11CBD7;">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 col-md-8 col-sm-8 py-4">
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 d-flex align-items-center">
                            <h2 class="mb-0 pb-2" data-aos="fade-right" data-aos-delay="50" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                            <form action="#" class="subscribe-form">
                                <div class="form-group d-flex">
                                    <input type="email" class="form-control" placeholder="Enter email address">
                                    <input type="submit" value="Subscribe" class="submit px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

 @endsection
