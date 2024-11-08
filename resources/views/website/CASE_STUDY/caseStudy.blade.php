@extends('website.master.app')

    <link rel="stylesheet" href="{{ asset('website/caseStudy.css') }}">
  
@section('content')
    <style>
        .main {

            background: url('public/website/assetsN/WhatsApp\ Image\ 2024-09-04\ at\ 5.58.43\ PM.jpeg');
            background-position: center;
            background-size: 100% 100%;
            height: 60%;
        }

        .hero {

            background: url("public/website/assetsN/WhatsApp\ Image\ 2024-09-04\ at\ 5.58.43\ PM.jpeg");
        }

        .hero-container {
            /* padding: 20px 0; */

        }





        .bg-transparent {
            z-index: 1;
        }
    </style>
    <section class="bg-image-container bg-image-container">
        <!-- hero section -->
        <div class="main">


        <section class="hero-container ">
            <div class="hero-bg">
                <div class="hero-content hero-content-second">
                    <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                        <h1>CASE STUDIES</h1>
                    </div>
                    <div class=" contact-button">
                        <button data-aos="fade-up" data-aos-duration="1100" class=" gbl-button aos-init aos-animate ">
                            Sign Up
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </div>
        <!-- hero section End -->
    </section>
    <div class="wrapper-2">

        <div class="main-conatiner">
            <div class="b">
                <p class="text-content">

                    Case studies are invaluable tools in understanding real-world scenarios, offering insights into
                    various industries, challenges, and solutions. These in depth analyses delve into specific
                    situations, providing detailed narratives that illuminate complexities and outcomes. From
                    business to healthcare, education to technology, case studies offer a rich tapestry of
                    experiences, highlighting successes, failures, and lessons learned. See More <br /> They serve
                    as educational resources offering students and professionals alike the opportunity to explore
                    theoretical concepts in practical contexts. Moreover case studies are instrumental in decision
                    making processes, providing evidence based guidance for tackling similar challenges. As digital
                    platforms continue to evolve, online case studies have become readily accessible fostering
                    collaboration discussion, and innovation on a global scale. Whether dissecting corporate
                    strategies, medical interventions, or social phenomena case studies remain essential tools for
                    analysis, learning, and progress.
                </p>

            </div>
        </div>


        <div class="card-wrapper">

            <div class="card">
                <div class="img-container">
                    <img src="{{asset('website/assetsN/icons/Capture.png')}}" class="img" />
                </div>
                <div class="card-content">
                    <h4 class="heading">City : <span class="address">BARIDWOOD</span></h4>
                    <P class="bold">Property Name :<span> 921 W BERGERA ROAD</span></P>
                    <P class="bold">Property Price :<span> $270,00</span></P>
                    <P class="bold">NPO (Network Price Opinion)</P>
                    <p class="bold">Est Rehab Cost: <br /> Date Of Close On Property</p>
                    <p class="Profit">Gross Profit:</p>

                    <button data-aos="fade-up" data-aos-duration="1100" class="sign-up-btn aos-init aos-animate ">
                        <a href="{{route('case_studies_detail')}}"> View
                            Details</a></button>
                </div>
            </div>

            <div class="card">
                <div class="img-container">
                    <img src="{{asset('website/assetsN/icons/Capture2.png')}}" class="img" />
                </div>
                <div class="card-content">
                    <h4 class="heading">City : <span class="address">NORTHBROOK</span></h4>
                    <P class="bold">Property Name :<span> 921 W BERGERA ROAD</span></P>
                    <P class="bold">Property Price :<span> $270,00</span></P>
                    <P class="bold">NPO (Network Price Opinion)</P>
                    <p class="bold">Est Rehab Cost: <br /> Date Of Close On Property</p>
                    <p class="Profit">Gross Profit:</p>

                    <button data-aos="fade-up" data-aos-duration="1100" class="sign-up-btn aos-init aos-animate ">
                        <a href="{{route('case_studies_detail')}}"> View
                            Details</a></button>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="{{asset('website/assetsN/icons/3.png')}}" class="img" />
                </div>
                <div class="card-content">
                    <h4 class="heading">City : <span class="address">Northbrook</span></h4>
                    <P class="bold">Property Name :<span> 3737 OAK AVENUE</span></P>
                    <P class="bold">Property Price :<span> $575,000</span></P>
                    <P class="bold">NPO (Network Price Opinion)</P>
                    <p class="bold">Est Rehab Cost: <br /> Date Of Close On Property</p>
                    <p class="Profit">Gross Profit:</p>

                    <button data-aos="fade-up" data-aos-duration="1100" class="sign-up-btn aos-init aos-animate ">
                        <a href="{{route('case_studies_detail')}}"> View
                            Details</a></button>
                </div>
            </div>



            <div class="card">
                <div class="img-container">
                    <img src="{{asset('website/assetsN/icons/4.png')}}" class="img" />
                </div>
                <div class="card-content">
                    <h4 class="heading">City : <span class="address">Naperville</span></h4>
                    <P class="bold">Property Name :<span> 921 W BERGERA ROAD</span></P>
                    <P class="bold">Property Price :<span> $270,00</span></P>
                    <P class="bold">NPO (Network Price Opinion)</P>
                    <p class="bold">Est Rehab Cost: <br /> Date Of Close On Property</p>
                    <p class="Profit">Gross Profit:</p>

                    <button data-aos="fade-up" data-aos-duration="1100" class="sign-up-btn aos-init aos-animate ">
                        <a href="{{route('case_studies_detail')}}"> View
                            Details</a></button>
                </div>
            </div>


            <div class="card">
                <div class="img-container">
                    <img src="{{asset('website/assetsN/icons/5.png')}}" class="img" />
                </div>
                <div class="card-content">
                    <h4 class="heading">City : <span class="address">Schaumburg</span></h4>
                    <P class="bold">Property Name :<span> 921 W BERGERA ROAD</span></P>
                    <P class="bold">Property Price :<span> $270,00</span></P>
                    <P class="bold">NPO (Network Price Opinion)</P>
                    <p class="bold">Est Rehab Cost: <br /> Date Of Close On Property</p>
                    <p class="Profit">Gross Profit:</p>
                    <button data-aos="fade-up" data-aos-duration="1100" class="sign-up-btn aos-init aos-animate ">
                        <a href="{{route('case_studies_detail')}}"> View
                            Details</a></button>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="{{asset('website/assetsN/icons/6.png')}}" class="img" />
                </div>
                <div class="card-content">
                    <h4 class="heading">City : <span class="address">Evanston</span></h4>
                    <P class="bold">Property Name :<span> 921 W BERGERA ROAD</span></P>
                    <P class="bold">Property Price :<span> $270,00</span></P>
                    <P class="bold">NPO (Network Price Opinion)</P>
                    <p class="bold">Est Rehab Cost: <br /> Date Of Close On Property</p>
                    <p class="Profit">Gross Profit:</p>

                    <button data-aos="fade-up" data-aos-duration="1100" class="sign-up-btn aos-init aos-animate ">
                        <a href="{{route('case_studies_detail')}}"> View
                            Details</a></button>
                </div>
            </div>
        </div>

    </div>
@endsection
