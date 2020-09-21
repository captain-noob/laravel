@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>

    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/facilities.css">
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

<body style="font-family: 'Raleway', sans-serif;">
    <section class="courses spad bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-title">
                        <h2 class="text-center font-weight-bold p-5" style="color: #0C2B4B;">Facilities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/course-1.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="300">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Library</h5>
                        <p>Well set library with appropriate study materials is available for reference and exam
                            preparation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/course-4.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="400">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Air-conditioned Section wise
                            classrooms</h5>
                        <p>Student can focus on learning without disturbance of noise and interference.</p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right" data-aos-delay="200">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/course-3.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="500">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Audio-Visual aids</h5>
                        <p>Coaching is supported by audio-visual aids to enhance and speedup the learning process. </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/course-5.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="300">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Conference Hall</h5>
                        <p>Available for student’s extra curriculum activities & inter-cultural events. </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/course-2.jpg" alt=""  style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="300">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Lab</h5>
                        <p>Well equipped lab to provide limitless opportunities for the students<!-- to learn the language.
                            Students can improve their knowledge on listening, reading, writing and speaking.--></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right" data-aos-delay="200">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/course-6.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="300">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Exam Hall</h5>
                        <p>Where student can attend the exam without any disturbance.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/friend.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="300">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Student supportive and friendly
                            environment</h5>
                        <p>There is close coordination between teachers and the students. The institution celebrates
                            birthdays, festivals, cultural events and extra curriculum activities. </p>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right" data-aos-delay="100">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/hostel.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="300">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Hostel</h5>
                        <p>People interested to join our courses at AIFL can stay at the hostels nearby our institution
                            on payment. Institution arranges
                            hostel/ P.G with accommodation and homely food.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-4" data-aos="fade-right" data-aos-delay="200">
                    <div class="course__item shadow p-3" style="border-radius:15px;">
                        <img src="assets/img/courses/college.jpg" alt="" style="width:100%;border-radius:10px;" data-aos="zoom-in" data-aos-delay="300">
                        <h5 class="font-weight-bold pt-3" style="color: #0C2B4B;">Other facilities</h5>
                        <p>First Aid box, sick room, staff room, administrative office, Water cooler, coffee-shop etc are also made available
                            to students.
                        </p>
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

    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>

</html>
</html>
@endsection