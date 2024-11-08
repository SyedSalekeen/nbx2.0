@extends('website.master.app')

@section('content')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
<!-- Bebas Neue -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .cards-section {
            display: flex;
            justify-content: space-between;
            margin: 40px auto;
            max-width: 1200px;
            padding: 20px;
            flex-wrap: wrap;
            /* Allow cards to wrap onto new lines */
        }

        .card-description {
            min-height: 140px;
        }

        .card {
            background-image: linear-gradient(#f0f0f0, lightgray);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        /* Large devices: 3 cards per row */
        @media (min-width: 1200px) {
            .card {
                width: calc(33.33% - 20px);
                /* 3 cards per row with spacing */
                margin-bottom: 20px;
                /* Add some space below each card */
            }
        }

        /* Medium devices: 2 cards per row */
        @media (min-width: 768px) and (max-width: 1199px) {
            .card {
                width: calc(50% - 20px);
                /* 2 cards per row with spacing */
                margin-bottom: 20px;
                /* Add some space below each card */
            }
        }

        /* Small devices: 1 card per row */
        @media (max-width: 767px) {
            .card {
                width: calc(100% - 20px);
                /* 1 card per row with spacing */
                margin-bottom: 20px;
                /* Add some space below each card */
            }
        }

        .card-button {
            text-align: right;
            display: flex;
            width: 100%;
            align-items: end;
            justify-content: end;
        }

        .card-button a {
            display: inline-block;
            background: rgb(246, 246, 246);
            background: linear-gradient(180deg, rgba(246, 246, 246, 1) 0%, rgba(214, 208, 208, 1) 100%);
            border: 1px solid #8f8b8b;
            border-radius: 30px;
            padding: 3px 10px;
            text-decoration: none;
            color: #333;
        }

        .cards-section .card-icon img {
            height: 70px;
            width: auto;
            max-width: auto !important;
        }

        /* .hero-container {
            background: url('./assets/images/const/Group\ 649.png');
            background-size: 100% 100%;
        } */

        footer {
            background: none;
        }

        .logo-container img {
            max-width: 100px;
        }

        .hero {
            background: url('public/website/assets/images/const/Group\ 649.png') !important;
            background-position: center !important;
            background-size: 100% 100% !important;
        }
    </style>

<section class="bg-image-container hero">
    <div class="hero-container container">
        <div class="hero-bg">
            <div class="hero-content hero-content-second">
                <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                    <h1>Construction </h1>
                </div>
            </div>
        </div>
    </div>
</section>
    <div class="cards-section">
        <div class="card">
            <div class="card-icon">
                <img class="img-fluid" src="{{ asset('website/assets/images/const/1.png') }}" alt="Choose Date">
            </div>
            <h3 class="card-title text-uppercase">GENERAL CONTRACTING</h3>
            <p class="card-description">From remodeling to building a new home from the ground up, NBX Capital
                Investment. is passionate about creating a rewarding construction experience for our clients, our
                designers and trade partners, and our team..</p>
            <div class="text-end card-button"><a href="generalContracting.html">Contact us</a></div>
        </div>

        <div class="card">
            <div class="card-icon">
                <img class="img-fluid" src="{{ asset('website/assets/images/const/22.png') }}" alt="Choose Date">
            </div>
            <h3 class="card-title text-uppercase">CUSTOM HOME BUILDING </h3>
            <p class="card-description">The team at NBX Capital Investments possess a powerful understanding of the
                design process, and the creativity to synthesize it with construction planning.</p>
            <div class="text-end card-button"><a href="customHome.html">Contact us</a></div>
        </div>

        <div class="card">
            <div class="card-icon">
                <img class="img-fluid" src="{{ asset('website/assets/images/const/3.png') }}" alt="Close & Get Paid">
            </div>
            <h3 class="card-title text-uppercase">KITCHEN REMODELING</h3>
            <p class="card-description">Remodeling the kitchen is a great way to give a home a facelift. Working within
                the client’s budget, NBX Capital Investment. provides the best service and return on investment..</p>
            <div class="text-end card-button"><a href="kitchenRemodeling.html">Contact us</a></div>
        </div>

        <div class="card">
            <div class="card-icon">
                <img class="img-fluid" src="{{ asset('website/assets/images/const/4.png') }}" alt="Choose Date">
            </div>
            <h3 class="card-title text-uppercase">BATHROOM REMODELING </h3>
            <p class="card-description">NBX Capital Investments can transform any bathroom into a desirable retreat ⁠—
                bringing the vision of the homeowner to life by redesigning and remodeling their old bathrooms and
                transforming them into a dream space..</p>
            <div class="text-end card-button"><a href="bathroomRemodeling.html">Contact us</a></div>
        </div>



        <div class="card">
            <div class="card-icon">
                <img class="img-fluid" src="{{ asset('website/assets/images/const/22.png') }}" alt="Choose Date">
            </div>
            <p class="card-title text-uppercase">Room addtion </p>
            <p class="card-description">Adding additional rooms is an important job and is best left to an experienced
                room addition contractor. NBX Capital Investments provides renditions of the general and specific areas
                of the home to present the best plan of action for the new addition..</p>
            <div class="text-end card-button"><a href="roomAdditions.html">Contact us</a></div>
        </div>

        <div class="card">
            <div class="card-icon">
                <img class="img-fluid" src="{{ asset('website/assets/images/const/6.png') }}" alt="Close & Get Paid">
            </div>
            <p class="card-title text-uppercase">Commercial construction </p>
            <p class="card-description">Adding additional rooms is an important job and is best left to an experienced
                room addition contractor. NBX Capital Investments provides renditions of the general and specific areas
                of the home to present the best plan of action for the new addition.</p>
            <div class="text-end card-button"><a href="commericalConstruction.html">Contact us</a></div>
        </div>
    </div>

    </div>
    <section class="container-bg mt-0">
        <div class="contact-container text-center">
            <h2 data-aos="fade-up" data-aos-duration="800" class="aos-init aos-animate">Visiualize Construction
                Project
                with us</h2>
            <p data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">

                Walk through your new space before we pick up a hammer! Our design department brings life to traditional
                blueprints, giving you a clear view of your new build, allowing you to make truly informed decisions.
            </p>
            <div class="contact-form d-flex justify-content-center">
                <button data-aos="fade-up" data-aos-duration="1100" class="gbl-button-white aos-init aos-animate">
                    Contact Us </button>
            </div>
        </div>
    </section>



    <!-- VIPER SLIDER  -->
    <div class="wrappar">
        <div class="before">
            <img class="content-image" src="{{ asset('website/assets/images/viper2.jpg') }}" draggable="false" />
        </div>
        <div class="after">
            <img class="content-image" src="{{ asset('website/assets/images/viper1.jpg') }}" draggable="false" />
        </div>
        <div class="scroller">
            <svg class="scroller__thumb" xmlns="http://www.w3.org/2000/svg" width="100" height="100"
                viewBox="0 0 100 100">
                <polygon points="0 50 37 68 37 32 0 50" style="fill:#fff" />
                <polygon points="100 50 64 32 64 68 100 50" style="fill:#fff" />
            </svg>
        </div>
    </div>
    <!-- VIPER SLIDER  -->


    <!-- > Our landmarks -->
    <section class="w-100">
        <div class="our-advantage-container contPageFootUp">
            <div class="landmark-continer contLandmark-continer">
                <div class="landmark-box boxx-1">
                    <div class="landmark-content" data-aos="zoom-in" data-aos-duration="800">
                        <h6>Your project in 3d</h6>
                        <p>It can be a challenge to imagine what a future remodel will look like. We build 3D models of
                            the your project that help guide you through each step of developing a design. Choose to
                            visit our office, meet online or through VR headsets. We offer 3D tours of rendered models
                            that allow you to see exactly what you are investing in – from the initial layout to the
                            product selections..</p>
                    </div>
                    <div class="landmark-img" data-aos="fade-up" data-aos-duration="800" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img width="100%" height="100%" style="border-radius: 20px;"
                            src="{{ asset('website/assets/images/const/902 exterior final render image.png') }}" alt="Image">
                    </div>
                </div>
                <div class="landmark-box boxx-2">
                    <div class="landmark-img" data-aos="fade-up" data-aos-duration="800" data-aos="fade-up"
                        data-aos-duration="1200">
                        <img width="100%" height="100%" style="border-radius: 20px;"
                            src="{{ asset('website/assets/images/const/2.png') }}" alt="Image">
                    </div>
                    <div class="landmark-content" data-aos="zoom-in" data-aos-duration="900">
                        <h6>Remodel with confidence</h6>
                        <p>Our ultimate pursuit is visualization. Make more informed decisions of finished materials and
                            many other design elements. Experiencing your new space in 3D!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- > Our landmarks End -->
    <button data-aos="fade-up" data-aos-duration="1100" class="gbl-button-white" style="border-radius: 20px;">
        Contact
        Us </button>
@endsection
