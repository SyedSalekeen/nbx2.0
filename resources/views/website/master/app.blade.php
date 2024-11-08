<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBX Capital Investments</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('website/assets/aos/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('website/style.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('website/assets/style.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="./sstyle.css"> -->

</head>

<body>
    <style>
        .home-services .card .card-image {
            height: 70px;
        }

        .home-services .card .card-image img {
            height: 70px;
            max-width: auto;
            width: auto;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-0 nav-main">
        <div class="container">
            <a class="navbar-brand" href="{{ route('index') }}"><img width="100%" src="{{asset('website/assets/images/logo.svg')}}" alt="Image"
                    style="max-width: 150px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about_us') }}">About Us</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Services
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('construction') }}">Construction</a></li>
                            <li><a class="dropdown-item" href="{{ route('financing') }}">Financing</a></li>
                            <li><a class="dropdown-item" href="{{ route('home_buying') }}">Home Buying and
                                    Selling</a></li>
                            <li><a class="dropdown-item" href="{{ route('home_rehab') }}">Home Rehab</a></li>
                            <li><a class="dropdown-item" href="{{ route('wholesale') }}">REI Wholesale</a></li>
                            <li><a class="dropdown-item" href="{{ route('property_management') }}">Property Management</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('case_studies') }}">Case Studies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                </ul>
                <form class="ml-auto">
                    <div class="nav-contact">
                        <a href="tel:+13105553890">+1 (310) 555 3890</a>
                    </div>
                </form>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="footer-cc col-md-12">
                <div class="footer-head row">
                    <div class="content-sec col-md-8">
                        <h4> > Contact </h4>
                        <h3>Together With You We Can Do More</h3>
                    </div>
                    <div class="col-md-4">
                        <img src="{{asset('website/assets/images/logo.svg')}}" alt="" class="img-fluid footer-logo">
                    </div>
                </div>
                <div class="social-container">
                    <div class="col-md-4">
                        <div class="social-box">
                            <h6>Location</h6>
                            <h4>Chicago, IL, US</h4>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="social-box">
                            <h6>Contact Information</h6>
                            <a href=""></a>
                            <a href="tel:+1815-325-2866">+1 815-325-2866</a>
                            <a href="mailto:nbxcapitalinvestments@gmail.com">nbxcapitalinvestments@gmail.com</a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="social-box">
                            <h6>Social Media</h6>
                            <a href="https://www.instagram.com" target="_blank"> <img
                                    src="{{asset('website/assets/images/icon-insta.png')}}" alt="Image">&nbsp;Instagram</a>
                            <a href="https://www.facebook.com" target="_blank"> <img
                                    src="" alt="Image">&nbsp;facebook</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </footer>

    <!-- jquery -->
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('website/assets/jquery.min.js') }}"></script>
    <script src="{{ asset('website/assets/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('website/assets/popper.js') }}"></script>

    <script src="{{ asset('website/assets/aos/aos.js') }}"></script>
    <!-- scripts -->
    <script src="{{ asset('website/assets/main.js') }}"></script>
    <script src="{{ asset('website/caseStudy.js') }}"></script>


 
</body>

</html>
