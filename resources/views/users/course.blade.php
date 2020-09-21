@extends('layouts.headerandfooter')
@section("contents")   
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/css/courses.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <style>
        .logo1 {
            width: 150px !important;
            margin-top: -30px !important;
        }

        @media (max-width: 992px) {
            .logo1 {
                width: 150px !important;
                margin-top: -30px !important;
            }

            @media (max-width: 768px) {
                .logo1 {
                    width: 200px !important;
                    margin-top: -35px !important;
                }

                .logo {
                    height: 150px;
                }

                #header #logo img {
                    max-height: 70px;
                }
            }
        }
        
    </style>
</head>

<body  style="font-family: 'Raleway', sans-serif;">
    <section class="blog spad bg-light">
        <div class="container pt-5">
            <div class="row pt-5">
                <div class="col-lg-12">
                    <div class="blog__large" style="border-radius:5px;">
                        <div class="blog__large__pic" data-aos="fade-right">
                            <img src="assets/img/blog/blog-large.png" alt="">
                        </div>
                        <div class="blog__large__text" >
                            <h4 data-aos="fade-left" data-aos-delay="100">Our Courses</h4>
                            <p data-aos="fade-left" data-aos-delay="150">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                                viverra maecenas accumsan lacus...</p>
                            <a href="register.php" data-aos="fade-left" data-aos-delay="200">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-right">
                    <div class="blog__item"  style="box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">
                        <div class="blog__item__pic" data-aos="zoom-in" data-aos-delay="100">
                            
                                <div class="row col-lg-6 col-md-6 col-sm-6 col-4 py-4 mx-auto">
                                    <img src="assets/img/german.png" alt="">
                                </div>
                            
                        </div>
                        <div class="blog__item__text bg-white blog-p">
                            <h5 data-aos="fade-up"><a href="#" style="text-decoration: none;">German</a></h5>

                            <p data-aos="fade-up">With roughly 100 million native speakers, German is the most widely spoken language of
                                the European Union. German is the official language of Germany, Austria and Switzerland.<!--
                                Being the strongest Economy in Europe and known for scientific and technological
                                achievements, Germany attracts a large number of students and highly qualified
                                professionals from IT, engineering, medicine and paramedical field. We offer German
                                language courses from basic level of A1 to the advanced level of B2 as per Common
                                European Framework of Reference for Languages. Our programs not only build up and
                                broaden language skills but also expose you to the rich culture. Our training methodology
                                 facilitates our students to compete
                                in various German board exams.--></p>
                                <div class="row col-lg-12">
                                    <p data-toggle="modal" data-target="#mymodal" class="btn btn-primary text-center mx-auto text-white pr-2 mt-3 col-lg-6 border-0" style="font-size:15px;border-radius:20px;background-color:#FF7E5F;">Read More</p>
                                </div>
                            <!--<div class="row col-lg-12 mt-2">
                                <button class="btn mx-auto btn1">Know More</button>
                            </div>-->
                            
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-right">
                    <div class="blog__item" style="box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">
                        <div class="blog__item__pic" data-aos="zoom-in" data-aos-delay="150">
                            <div class="row col-lg-6 col-md-6 col-sm-6 col-4 py-4 mx-auto">
                                <img src="assets/img/france.png" alt="">
                            </div>
                        </div>
                        <div class="blog__item__text bg-white blog-p">
                            <h5 data-aos="fade-up"><a href="#" style="text-decoration: none;">French</a></h5>

                            <p data-aos="fade-up">French used widely across four continents in Canada, Europe, Africa and in former French
                                colonies in Asia, is world's second most popular foreign language after English.<!-- We
                                offer French language courses from basic level to advanced levels as per the official
                                guidelines. Our programs not only build up and broaden language skills but also expose
                                you to the rich culture and history of the French-speaking countries. Our training
                                methodology facilitates our students to compete in the French language.Industry specific
                                French language learning classes.French Language classes are conducted by experienced
                                instructors.French Language classes with a variety of learning aids and materials.Our
                                classes unlock the complexities of the French language.--></p>
                                <div class="row col-lg-12">
                                    <p data-toggle="modal" data-target="#mymodal" class="btn btn-primary text-center mx-auto text-white pr-2 mt-3 col-lg-6 border-0" style="font-size:15px;border-radius:20px;background-color:#FF7E5F;">Read More</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-right">
                    <div class="blog__item" style="box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">
                        <div class="blog__item__pic" data-aos="zoom-in" data-aos-delay="200">
                            <div class="row col-lg-6 col-md-6 col-sm-6 col-4 py-4 mx-auto">
                                <img src="assets/img/italy.png" alt="">
                            </div>
                        </div>
                        <div class="blog__item__text bg-white blog-p">
                            <h5 data-aos="fade-up"><a href="#" style="text-decoration: none;">Italian</a></h5>

                            <p data-aos="fade-up"><!--Assisi Institute of Foreign Languages, a right place to learn Italian. We offer Italian
                                language courses ranging from beginners to advanced level with access to a wide range of
                                information and publications. -->In our Italian language course you will learn the four
                                basic skills of speaking, listening, reading and writing in the context of day to day
                                activities and Italian culture. <!--Our programs not only build up and broaden language
                                skills but also expose you to the rich culture and history of the Italian-speaking
                                countries. Our training methodology facilitates our students to compete in the Italian
                                language.Industry specific Italian language learning classes.Italian Language classes
                                are conducted by experienced instructors.Italian Language classes with a variety of
                                learning aids. --></p>
                                <div class="row col-lg-12">
                                    <p data-toggle="modal" data-target="#mymodal" class="btn btn-primary text-center mx-auto text-white pr-2 mt-3 col-lg-6 border-0" style="font-size:15px;border-radius:20px;background-color:#FF7E5F;">Read More</p>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6" data-aos="fade-right">
                    <div class="blog__item" style="box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">
                        <div class="blog__item__pic" data-aos="zoom-in" data-aos-delay="100">
                            <div class="row col-lg-6 col-md-6 col-sm-6 col-4 py-4 mx-auto">
                                <img src="assets/img/flag.png" alt="">
                            </div>
                        </div>
                        <div class="blog__item__text bg-white blog-p">
                            <h5 data-aos="fade-up"><a href="#" style="text-decoration: none;">English</a></h5>

                            <p data-aos="fade-up">Assisi Institute of Foreign Language offers high-quality English language courses in
                                Pala, Kottayam. Our English programs not only build up and broaden language skills but
                                also expose you to the rich culture and history of the English-speaking countries.<!-- Our
                                training methodology facilitates our students to compete in various English Language
                                Skill Testing Exams.Our English language courses are ideal for English language learners
                                who wish to complement their vocabulary and speaking with a greater understanding of
                                grammar in the western way.Attention to four basic language skills Listen, Speak, Read
                                and Write.Language classes are conducted by experienced faculties.Language classes with
                                a variety of learning aids and materials.Our classes unlock the complexities of the
                                English language. --></p>
                                <div class="row col-lg-12">
                                    <p data-toggle="modal" data-target="#mymodal" class="btn btn-primary text-center mx-auto text-white pr-2 mt-3 col-lg-6 border-0" style="font-size:15px;border-radius:20px;background-color:#FF7E5F;">Read More</p>
                                </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>



    <!-- Blog Section End -->
   <modal class="modal" id="mymodal" style="box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold">German</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    With roughly 100 million native speakers, German is the most widely spoken language of
                    the European Union. German is the official language of Germany, Austria and Switzerland.
                    Being the strongest Economy in Europe and known for scientific and technological
                    achievements, Germany attracts a large number of students and highly qualified
                    professionals from IT, engineering, medicine and paramedical field. We offer German
                    language courses from basic level of A1 to the advanced level of B2 as per Common
                    European Framework of Reference for Languages. Our programs not only build up and
                    broaden language skills but also expose you to the rich culture. Our training methodology
                    facilitates our students to compete in various German board exams.
                </div>
                <div class="modal-footer">
                    <a href="register.php" class="btn text-white" style="background-color:#FF7E5F">Enroll Now</a>
                </div>
            </div>
        </div>
    </modal>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    

</body>

</html>
@endsection
