@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="assets/css/contact.css">
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
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper">
					
					<div class="row no-gutters" style="border-radius:5px;">
						<div class="col-md-7 col-sm-12" data-aos="fade-right">
							<div class="contact-wrap w-100  p-4">
							@if($message = Session::get('message'))
							<div class='alert alert-success alert-block'>
							<button type="button" class='close' data-dismiss='alert'>x</button>
                            <strong>{{$message}}</strong>
							</div>
							@endif
								<h2 class="mb-4 text-dark font-weight-bold text-center">Get In Touch</h2>
								<form method="POST" action="/contact" id="contactForm" name="contactForm" class="contactForm">
								@csrf
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label class="label font-weight-bold text-dark" for="name">Your Name</label>
												<input type="text" value="{{old('name')}}" class="form-control" name="name" id="name"  placeholder="Name">
												@error('name')
												<p class="alert alert-danger">{{$errors->first('name')}}</p>
												@enderror
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label font-weight-bold text-dark" for="name">Phone number</label>
												<input type="text" class="form-control" name="phone_number" value="{{old('phone_number')}}" id="name" placeholder="phone number">
												@error('phone_number')
												<p class="alert alert-danger">{{$errors->first('phone_number')}}</p>
												@enderror
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label font-weight-bold text-dark" for="subject">Email</label>
												<input type="text" class="form-control" value="{{old('email')}}" name="email" id="subject" placeholder="youremail@gmail.com">
												@error('email')
												<p class="alert alert-danger">{{$errors->first('email')}}</p>
												@enderror
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label font-weight-bold text-dark" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message">{{old('message')}}</textarea>
												@error('message')
												<p class="alert alert-danger">{{$errors->first('message')}}</p>
												@enderror
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Send Message" class="btn col-lg-3 reverse p-2" style="border-radius:50px;">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						    <div class="col-md-5 d-flex align-items-stretch" data-aos="fade-left">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15731.050454612483!2d76.7263471!3d9.7012908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xfacb18c5187e2654!2sAssissi%20Institute%20of%20Foreign%20Languages!5e0!3m2!1sen!2sin!4v1572667057847!5m2!1sen!2sin"
                                     style="border:0;width:100%;" allowfullscreen=""></iframe>  
                            </div>
						</div>
                    </div>
                    

                    <div class="row  mt-5 pt-5">
						<div class="col-md-3" data-aos="fade-up" data-aos-delay="50">
							<div class="dbox w-100 text-center">
		        		        <div class="icon d-flex align-items-center justify-content-center">
		        			        <span class="fa fa-map-marker"></span>
		        		        </div>
		        		        <div class="text">
			                        <p><span>Address:</span> Opposite of St.Alphonsa Church Garden, Bharananganam, Kerala 686578</p>
			                    </div>
		                    </div>
				        </div>
				        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
				        	<div class="dbox w-100 text-center">
		                        <div class="icon d-flex align-items-center justify-content-center">
		                	        <span class="fa fa-phone"></span>
		                        </div>
		                        <div class="text">
			                        <p><span>Phone:</span> <a href="tel://1234567920">099612 46648</a></p>
			                    </div>
		                    </div>
				        </div>
				        <div class="col-md-3" data-aos="fade-up" data-aos-delay="150">
				            <div class="dbox w-100 text-center">
		                    	<div class="icon d-flex align-items-center justify-content-center">
		                    		<span class="fa fa-paper-plane"></span>
		                    	</div>
		                    	<div class="text">
			                      <p><span>Email:</span> <a href="mailto:info@yoursite.com">assisiifl@gmail.com</a></p>
			                    </div>
		                    </div>
				        </div>
				        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
				            <div class="dbox w-100 text-center">
		                    	<div class="icon d-flex align-items-center justify-content-center">
		                    		<span class="fa fa-globe"></span>
		                    	</div>
		                    	<div class="text">
			                      <p><span>Website</span> <a href="#">www.assisiinstitute.org</a></p>
			                    </div>
		                    </div>
						</div>
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