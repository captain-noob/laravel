@extends('layouts.headerandfooter')
@section("contents") 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albums</title>
    <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/vendor/aos/aos.css">
    <link rel="stylesheet" href="/assets/vendor/Magnific-Popup/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/album.css">
    <link rel="stylesheet" href="/assets/css/style.css">
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
    <!--================ Gallery section Start =================-->
  <section class="section-padding--large gallery-area bg-light">
    <div class="container pt-5">

      <div class="row no-gutters mt-5 pb-5">
      @foreach($data as $gallery)
        <div class="col-sm-6 col-md-4" data-aos="fade-up" data-aos-delay="50">
            <div class="p-3">
                <a href="{{asset('image/gallery/'.$gallery->image)}}" class="img-gal">
                  <div class="single-imgs relative p-3" style="border-radius:10px;box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);">				
                    <img class="card-img" src="{{asset('image/gallery/'.$gallery->image)}}" alt="" style="border-top-radius:10px;">		
                    <div class="overlay">
                      <div class="overlay-content">
                        <div class="overlay-icon">
                          <i class="fa fa-search"></i>
                        </div>
                      </div>
                    </div>
                    <p class="text-left pt-3 font-weight-bold mb-2" style="color:#163269">{{$gallery->body}}</p>
                  </div>
                </a>
            </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
    
    
    <script src="/assets/vendor/jquery/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="/assets/vendor/wow/wow.min.js"></script>
    <script src="/assets/vendor/aos/aos.js"></script>
    <script src="/assets/vendor/superfish/superfish.min.js"></script>
    <script src="/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="/assets/vendor/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    

    <script src="/assets/js/album.js"></script>

    <script src="/assets/js/script.js"></script>
</body>
</html>
@endsection