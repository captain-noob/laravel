@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendor/bootstrap/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/assets/vendor/animate.css/animated.css">
    <link rel="stylesheet" href="/assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="/assets/vendor/ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="/assets/css/about.css">
</head>
<body>
    <section class="ftco-services pt-5 bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-4 ftco-animate pt-5 mb-5 nav-link-wrap ">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link px-4 active" id="v-pills-master-tab" data-toggle="pill"
                            href="#v-pills-master" role="tab" aria-controls="v-pills-master" aria-selected="true" data-aos="fade-right" data-aos-delay="100"><span
                                class="mr-3"><i class="fab fa-galactic-senate"></i></span> Assisi IFL</a>

                        <a class="nav-link px-4" id="v-pills-buffet-tab" data-toggle="pill" href="#v-pills-buffet"
                            role="tab" aria-controls="v-pills-buffet" aria-selected="false" data-aos="fade-right" data-aos-delay="150"><span class="mr-3"><i
                                    class="fa fa-bullseye"></i></span> Our Inspiration</a>

                        <a class="nav-link px-4" id="v-pills-fitness-tab" data-toggle="pill" href="#v-pills-fitness"
                            role="tab" aria-controls="v-pills-fitness" aria-selected="false" data-aos="fade-right" data-aos-delay="200"><span class="mr-3"><i
                                    class="fa fa-eye"></i></span> Our Vission</a>

                        <a class="nav-link px-4" id="v-pills-reception-tab" data-toggle="pill" href="#v-pills-reception"
                            role="tab" aria-controls="v-pills-reception" aria-selected="false" data-aos="fade-right" data-aos-delay="250"><span class="mr-3"><i
                                    class="fas fa-spa"></i></span> Our Mission</a>

                        <a class="nav-link px-4" id="v-pills-sea-tab" data-toggle="pill" href="#v-pills-sea" role="tab"
                            aria-controls="v-pills-sea" aria-selected="false" data-aos="fade-right" data-aos-delay="300"><span class="mr-3"><i
                                    class="fab fa-hubspot"></i></span>
                            Culture and Philosophy</a>

                        <a class="nav-link px-4 pb-5" id="v-pills-spa-tab" data-toggle="pill" href="#v-pills-spa"
                            role="tab" aria-controls="v-pills-spa" aria-selected="false" data-aos="fade-right" data-aos-delay="350"><span class="mr-3"><i
                                    class="fa fa-globe-americas"></i></span> Location and Environment</a>
                    </div>
                </div>
                <div class="col-md-8 ftco-animate p-mds-5 d-flex align-items-center ">

                    <div class="tab-content pl-md-5 " id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-master" role="tabpanel"
                            aria-labelledby="v-pills-master-tab" data-aos="fade-left">
                            <h2 class="mb-4 pl-3" style="border-left:5px solid #FF7E5F;"><b> ASSISI Institute of Foreign Languages (AIFL)</b></h2>


                            <p style="font-size:16px;">ASSISI Institute of Foreign Languages (AIFL) is providing German language coaching
                                in Bharananganam, Kottayam District of Kerala State since September 2016. AIFL functions
                                under Capuchin Charitable and Educational Society (CCES). The institution aims at
                                creating a situation of borderlessness by going beyond one’s linguistic boarders.
                            </p>
                            <p style="font-size:16px;">Though AIFL began as a small venture, now it has been blessed with a good number of
                                students, a well-trained faculty from India and abroad. Being among the leading
                                foreign language institutes in Kerala, our institute offers specially designed
                                foreign language courses in a friendly learning environment.
                            </p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-buffet" role="tabpanel"
                            aria-labelledby="v-pills-buffet-tab">
                            <h2 class="mb-4 pl-3" style="border-left:5px solid #FF7E5F;"><b>Our Inspiration</b></h2>
                            <p style="font-size:16px;">Assisi Institute of Foreign Languages is named after St Francis of Assisi and is
                                a humble venture in the memory of REV. Dr. K .Luke OFM.Cap (1927-2010), a member of
                                Capuchin order, Theologian, Exegete, Philologist and a well-known linguist in India.
                                Dr. K .Luke was proficient in 45 languages, inspiration of AIFL.</p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-fitness" role="tabpanel"
                            aria-labelledby="v-pills-fitness-tab">

                            <h2 class="mb-4 pl-3" style="border-left:5px solid #FF7E5F;"><b>Our Vision</b></h2>
                            <p style="font-size:16px;">The Institute is a role model and pioneer among language institutes keeping the golden
                                standard of excellence in curriculum design promoting cross cultural understanding.</p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-reception" role="tabpanel"
                            aria-labelledby="v-pills-reception-tab">
                            <h2 class="mb-4 pl-3" style="border-left:5px solid #FF7E5F;"><b>Our Mission</b></h2>
                            <p style="font-size:16px;"><i class="fa fa-angle-double-right"></i> To lead our students towards achieving
                                measurable progress
                                in communicative competence.
                            </p>
                            <p style="font-size:16px;"><i class="fa fa-angle-double-right"></i> To ensure quality in establishing Language
                                Excellence.</p>
                            <p style="font-size:16px;"><i class="fa fa-angle-double-right"></i> To foster a climate of trust, peace and
                                solidarity for
                                enhancing the leaning experience
                                of all students that they can cherish.</p>
                            <p style="font-size:16px;"><i class="fa fa-angle-double-right"></i> To constantly renew the team spirit and
                                supportive attitude
                                among all the members of AIFL
                                family.</p>
                            <p style="font-size:16px;"><i class="fa fa-angle-double-right"></i> To enrich the capacity of individuals to become
                                competitive
                                in foreign languages at
                                global level.</p>
                            <p style="font-size:16px;"><i class="fa fa-angle-double-right"></i> To attain language skill through interactive
                                sessions by
                                teachers whose mother tongue is
                                German/Italian/French to
                                capacitate migrating professionals</p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-sea" role="tabpanel" aria-labelledby="v-pills-sea-tab">
                            <h2 class="mb-4 pl-3" style="border-left:5px solid #FF7E5F;"><b>Culture and Philosophy</b></h2>
                            <p style="font-size:16px;">Institution has highly professional teachers including volunteers from Germany. ASSISI
                                Institution has strong collaboration with Capuchin Province, Educational Institutions
                                and exam centres in Germany. The institution is governed by professional religious
                                leaders of ASSISI Ashram, Bharananganam.
                            </p>
                            <p style="font-size:16px;">The Institute provides quality teaching at affordable price to the youths who strive to
                                learn German language and ambitious to work in Germany. The Institute works with a
                                belief
                                "cent percent dedication in our work paves way towards a meaningful cross cultural
                                exchange of knowledge and skills."
                            </p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-spa" role="tabpanel" aria-labelledby="v-pills-spa-tab">
                            <h2 class="mb-4 pl-3" style="border-left:5px solid #FF7E5F;"><b>Location and Enviroment</b></h2>
                            <p style="font-size:16px;">AIFL is placed in the heart of Bharanganam, 5 kilometres away from Pala town of Kottayam
                                District, Kerala. Bharananganam is a pilgrim centre surrounded by lots of hills blessed
                                with different species of flora and fauna. The Institute is located right opposite to
                                St. Alphonsa’s shrine. The place is connected with national highway by public
                                transportation. All types of services are available in the area, required by language
                                students.
                            </p>
                            <p style="font-size:16px;">The Institute reflects the dreams of its students. We have friendly and family atmosphere
                                in the institution. People of any age are welcome to the institution to learn the
                                language. Students of all age groups are treated with mutual respect. Teaching and
                                management faculty members ensure that the students achieve their dream within the
                                short duration of the course. Hence they spend quality time with students even after
                                the class time.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <script src="/assets/vendor/jquery/jquery.min.js"></script>
    <script src="/assets/vendor/jquery/jquery-migrate-3.0.1.min.js"></script>
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="/assets/vendor/jquery/jquery.stellar.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/scrollax.min.js"></script>
    
    

    <script src="/assets/vendor/wow/wow.min.js"></script>
    <script src="/assets/vendor/superfish/superfish.min.js"></script>
    <script src="/assets/js/about.js"></script>
</body>
</html>
@endsection