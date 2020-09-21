@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/css/register.css">
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
<!-- Contact Area Start -->
<section class="contact-our-area pb-5 bg-light">
        <div class="container">
            <div class="row">
                <!-- Heading -->
                <div class="col-12">
                    <div class="text-center pt-5">
                        <h2 class="font-weight-bold pb-3" style="color:#163269;" data-aos="fade-right">Registration Form</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between mb-5 ">

                <div class="col-12 col-sm-12">
                    <!-- Contact Form -->
                    <div class="contact_from_area mb-100 clearfix wow fadeInUp" data-wow-delay="300ms" data-aos="fade-up">
                        <div class="contact_form">
                        @if($message=Session::get('message'))
                            <div class="alert alert-success alert-block">
                            <button type='button' class="close" data-dismiss="alert">x</button>
                            <strong> {{$message}}</strong>
                            </div>
                        @endif
                            <form action="/register" method="post" id="main_contact_form">
                            @csrf
                                <div class="contact_input_area">
                                    <div id="success_fail_info"></div>
                                    <div class="row">
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text"  value="{{old('name')}}" class="form-control mb-30 p-4" name="name" id="name" placeholder="Your Name">
                                               @error('name')
                                                <p class="alert alert-danger">{{$errors->first('name')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text"  value="{{old('phone_number')}}" class="form-control mb-30 p-4" name="phone_number" id="phone" placeholder="Phone Number">
                                                @error('phone_number')
                                                <p class="alert alert-danger">{{$errors->first('phone_number')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="email" value="{{old('email')}}" class="form-control mb-30 p-4" name="email" id="email" placeholder="E-mail">
                                                @error('email')
                                                <p class="alert alert-danger">{{$errors->first('email')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="number" value="{{old('age')}}" class="form-control mb-30 p-4" name="age" id="age" placeholder="Age">
                                                @error('age')
                                                <p class="alert alert-danger">{{$errors->first('age')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12">
                                            <div class="form-group">
                                                <textarea name="address" value="{{old('address')}}" class="form-control mb-30" id="address" cols="30" rows="6" placeholder="Address *"></textarea>
                                                @error('address')
                                                <p class="alert alert-danger">{{$errors->first('address')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" value="{{old('qualification')}}" class="form-control mb-30 p-4" name="qualification" id="quali" placeholder="Qualification">
                                                @error('qualification')
                                                <p class="alert alert-danger">{{$errors->first('qualification')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Form Group -->
                                        <div class="col-12 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" value="{{old('language')}}" class="form-control mb-30 p-4" name="language" id="lang" placeholder="Language and Batch">
                                                @error('language')
                                                <p class="alert alert-danger">{{$errors->first('language')}}</p>
                                                @enderror
                                            </div>
                                        </div>
                                        <!-- Button -->
                                        <div class="col-12">
                                            <button type="submit" style="border-radius:50px;" class="btn confer-btn font-weight-bold col-lg-3 p-3">Register <i class="fa fa-long-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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

    <!-- Contact Area End -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/wow/wow.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/superfish/superfish.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/script.js"></script>
</body>
</html>
@endsection