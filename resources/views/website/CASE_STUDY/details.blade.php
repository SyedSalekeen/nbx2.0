@extends('website.master.app')
  <link rel="stylesheet" href="{{ asset('website/details.css') }}">
@section('content')
    <style>
        .details {
            background-position: center;
            background-size: 100% 100% !important;
            background: url("public/website/assetsN/WhatsApp\ Image\ 2024-09-04\ at\ 5.58.43\ PM.jpeg");
        }

        .hero-container {
            /* padding: 20px 0; */

        }

        .hero-container {
            padding-top: 0 !important;
            padding-bottom: 0 !important;
        }

        .nav-main .nav-link {
            font-size: 18px !important;
        }



        .bg-transparent {
            z-index: 1;
        }
    </style>
    <div class="details">



        <!-- Hero -->
        <section class="bg-image-container constructHeroBotmCont">
            <!-- hero section -->
            <section class="hero-container hero-container-details">
                <div class="hero-bg">
                    <div class="hero-content hero-content-second">
                        <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                            <h1>DETAILS</h1>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero section End -->
        </section>
        <!-- Hero -->
    </div>

    <div class="details-wrapper">
        <div class="carousel-container">
            <button class="prev-btn"><img src="{{ asset('website/assetsN/Polygon 5.png') }}" /></button>
            <div class="carousel">
                <div class="card">
                    <a href="./caseStudy.html">BACK TO CASE STUDIES</a>
                    <div class="img-container">
                        <img src="{{ asset('website/assetsN/before.png') }}" class="img" />
                    </div>
                </div>


                <div class="card">
                    <p> <img src="{{ asset('website/assetsN/Group 443.png') }}" /> GROSS PROFIT: $37,500</p>
                    <div class="img-container">
                        <img src="{{ asset('website/assetsN/after.png') }}" class="img" />
                    </div>
                </div>

                <div class="card">
                    <p>BACK TO CASE STUDIES</p>
                    <div class="img-container">
                        <img src="{{ asset('website/assetsN/images/3.jpg') }}" class="img" />
                    </div>
                </div>
                <div class="card">
                    <p>BACK TO CASE STUDIES</p>
                    <div class="img-container">
                        <img src="{{ asset('website/assetsN/images/3.jpg') }}" class="img" />
                    </div>
                </div>

                <div class="card">
                    <p> <img src="{{ asset('website/assetsN/Group 443.png') }}" /> GROSS PROFIT: $37,500</p>
                    <div class="img-container">
                        <img src="{{ asset('website/assetsN/images/1.jpg') }}" class="img" />
                    </div>
                </div>
            </div>
            <button class="next-btn"><img src="{{ asset('website/assetsN/Polygon 5.png') }}" /></button>
        </div>


        <diV>
            <h2 class="details-heading">9901 E EVANS AVE UNIT 16A, SKOKIE 80247</h2>
            <div class="details-content">
                <p class="bold-text">PURCHASE PRICE:</p>
                <p class="bold-text">REHAB COST:</p>
                <p class="bold-text">NPO (NETWORK PRICE OPINION):</p>
                <p class="bold-text">SOLD:</p>
                <p class="bold-text">NETWORTH SPECIALIST:</p>
            </div>


        </diV>

        <div class="sales-details">
            <p class="sales-text">FINAL SALE PRICE</p>
            <p class="sales-text">GROSS PROFIT</p>
        </div>
    </div>
@endsection
