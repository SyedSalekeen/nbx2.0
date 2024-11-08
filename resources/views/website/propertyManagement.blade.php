@extends('website.master.app')
@section('content')
    <style>
        .constructHeroBotmCont {
            background-image: none;
        }

        .hero-container {}

        .main {
            position: relative;
            background: url('public/website/assetsN/propertybanner.png') !important;
            background-position: center !important;
            background-size: 100% 100% !important;
        }


        .bg-transparent {
            z-index: 1;
        }

        .nav-main .nav-link {
            font-size: 18px !important;
        }


        .footer-container {
            background: none;
        }


        .real-estate-section {
            width: 100%;
            line-height: 1.6;
        }

        .layout {
            position: relative;
            overflow: hidden;
        }

        .bg-img {
            position: absolute;
            left: 39rem;

        }

        .hero-container .hero-content.hero-content-second h1 {
            font-weight: 600;
        }

        .bg-img-2 {
            position: absolute;
            position: absolute;
            bottom: -24rem;
            left: -25rem;
        }

        .real-estate-text {
            margin: 25px 8rem;

            font-size: 20px;
            color: #333;
            margin-bottom: 15px;
        }

        .real-estate-link {

            color: #0077cc;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px;
        }

        .real-estate-link:hover {
            text-decoration: underline;
        }

        .container {
            margin-top: 1rem;
        }

        @media (max-width: 768px) {
            .hero-container .hero-bg {
                /* background: url(./assets/images/img-banner.png); */

                margin: 0 46px !important;
            }

            .propMangTitle {
                font-size: 20px;

            }

            .propMangImgBox {
                max-width: 53px;

            }

            .propMangCards {
                height: auto;
                width: 315px;
            }

            /* //property managment */


            .real-estate-text {
                margin: 25px 3rem;
                font-size: 17px;
            }
        }

        @media (max-width: 425px) {
            h1 {
                font-size: calc(1rem + 1.5vw);
            }

            .container-bg .contact-container .contact-form button {
                height: 54px;
                width: 196px;
                font-size: 22px;
            }

            .container {
                margin-top: 0rem;
            }

            .real-estate-text {
                margin: 25px 2rem;
                font-size: 15px;
            }

            .hero-container .hero-content.hero-content-second {
                margin-left: 0;
            }

            .hero-container .hero-content.hero-content-second h1 {
                font-size: 28px;
            }

            .contCardsHdng {
                font-size: 25px;
            }

            .propMangCardsCont {
                justify-content: center;
            }
        }

        /* //card */
    </style>
    <section class="bg-image-container constructHeroBotmCont">
        <!-- hero section -->
        <div class="main">


            <section class="hero-container hero-container-details">
                <div class="hero-bg">
                    <div class="hero-content hero-content-second">
                        <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                            <h1>Property Management</h1>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="layout">
            <img src="{{ asset('website/assetsN/icons/Path 637.svg') }}" class="bg-img" />
            <div class="real-estate-section">

                <p class="real-estate-text">
                    Real estate properties on behalf of property owners. It encompasses a wide range of responsibilities,
                    including
                    tenant relations, rent collection, property maintenance, repairs, financial management, and lease
                    enforcement.
                    Effective property management aims to preserve and enhance the value of the property while ensuring a
                    positive
                    experience for tenants.
                    <a href="#" class="real-estate-link">See More</a>
                </p>
                <p class="real-estate-text">
                    Property managers act as addressing tenant concerns, and ensuring compliance with local regulations and
                    lease
                    agreements. With their expertise in real estate finance, and customer service, property managers play a
                    vital
                    role in optimizing the performance and profitability of rental properties while minimizing risks and
                    maximizing
                    returns for property owners.
                </p>
            </div>


            <div class="container">
                <h3 class="my-4">&gt; Our Services</h3>
                <h1 class="contCardsHdng fw-normal">We Offer a One Shop For All <br> Real Estates Needs</h1>

                <div class="propMangCardsCont">
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/Group 87.svg') }}" alt="" class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Focued Property Mangement</h5>
                        <p class="propMangTxt">Focused property management ensures efficient operations, cost minimization,
                            and tenant
                            satisfaction by tailoring strategies to each property's specific needs and objectives. This
                            approach
                            preserves and enhances property value while delivering superior outcomes for property owners.

                        </p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/licence Professional-01-01.png') }}" alt=""
                                class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Personal Showing</h5>
                        <p class="propMangTxt">Personal showings in property management establish rapport, address tenant
                            concerns,
                            and ensure property features are accurately presented, fostering tenant satisfaction and leasing
                            success.
                            This hands-on approach enhances tenant experience and increases property desirability,
                            ultimately maximizing
                            occupancy and rental income.

                        </p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/certificate-01.png') }}" alt=""
                                class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Licensed Professionals</h5>
                        <p class="propMangTxt">Personal showings in property management establish rapport, address tenant
                            concerns,
                            and ensure property features are accurately presented, fostering tenant satisfaction and leasing
                            success.
                            This hands-on approach enhances tenant experience and increases property desirability,
                            ultimately maximizing
                            occupancy and rental income.</p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/12-01.png') }}" alt="" class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Discounted 24/7 Maintenance</h5>
                        <p class="propMangTxt">Offering discounted 24/7 maintenance in property management ensures timely
                            repairs,
                            tenant satisfaction, and property preservation while minimizing costs for property owners. See
                            More This
                            proactive approach fosters tenant retention, enhances property value, and mitigates potential
                            issues,
                            promoting long-term profitability and peace of mind for landlords.</p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/superior-01-01-01.png') }}" alt=""
                                class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Superior Marketing</h5>
                        <p class="propMangTxt">
                            Superior marketing in property management enhances property visibility, attracts quality
                            tenants, and
                            optimizes rental income, ensuring landlords maximize returns on their investments. By utilizing
                            strategic
                            advertising and innovative techniques, properties stand out in the market, leading to swift
                            leasing and
                            increased profitability
                        </p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/QUARTERLY-01.png') }}" alt=""
                                class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Quarterly Inspections</h5>
                        <p class="propMangTxt">Quarterly inspections in property management ensure proactive maintenance,
                            tenant
                            satisfaction, and early detection of issues, preserving property value and minimizing risks for
                            landlords.
                            See More This regular oversight enhances property condition compliance, and tenant retention,
                            fostering long
                            term success and peace of mind for property owners.</p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/kay-01-01.png') }}" alt=""
                                class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">5 Point Tenant Screening</h5>
                        <p class="propMangTxt">Implementing a 5-point tenant screening process ensures thorough evaluation
                            of
                            applicants' credit rental history, income, references, and criminal background, minimizing risks
                            and
                            fostering a stable responsible tenant community for property owners. See More This comprehensive
                            screening
                            enhances property security, reduces potential liabilities, and promotes long-term rental
                            success, ensuring
                            peace of mind and profitability for landlords.</p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/247-01.png') }}" alt="" class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">24/7 Online Access</h5>
                        <p class="propMangTxt">Offering 24/7 online access in property management facilitates convenient
                            communication, rent payments and maintenance requests for tenants, ensuring satisfaction and
                            operational
                            efficiency. See More This accessibility fosters tenant engagement, streamlines administrative
                            tasks, and
                            promotes responsive property management ultimately enhancing landlord-tenant relationships and
                            property
                            performance.</p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/Group 623.svg') }}" alt=""
                                class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Short Term Rental</h5>
                        <p class="propMangTxt">Short-term rental involves leasing property for brief durations, typically
                            used for
                            vacations, business trips or temporary housing, offering flexibility and income potential for
                            property
                            owners.</p>
                    </div>
                    <div class="propMangCards">
                        <div class="propMangImgBox">
                            <img src="{{ asset('website/assetsN/icons/Path 633.svg') }}" alt=""
                                class="propMangImg">
                        </div>
                        <h5 class="propMangTitle">Airbnb/VRBO</h5>
                        <p class="propMangTxt">Airbnb and VRBO are online platforms enabling users to rent lodging
                            accommodations,
                            offering a diverse range of options from private rooms to entire homes fostering unique travel
                            experiences
                            and supplemental income opportunities for hosts worldwide.</p>
                    </div>
                </div>

            </div>
            <img src="{{ asset('website/assetsN/icons/Path 637.svg') }}" class="bg-img-2" />
        </div>

        <div class="main">
            <!-- Hero -->
            <section class="bg-image-container constructHeroBotmCont">
                <!-- hero section -->
                <section class="hero-container hero-container-details">
                    <div class="hero-bg">
                        <div class="hero-content hero-content-second">
                            <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                                <h1>Property Management</h1>
                            </div>
                        </div>
                    </div>
                </section>


                <!-- hero section End -->
            </section>
            <!-- Hero -->
        </div>
        <section class="container-bg">
            <div class="contact-container text-center">
                <h1 data-aos="fade-up" data-aos-duration="800" class="aos-init aos-animate fw-normal">Get Tou Property
                    Manage By
                    Us</h1>
                <div class="contact-form mt-0 text-center">
                    <button data-aos="fade-up" data-aos-duration="1100"
                        class="gbl-button-white aos-init aos-animate mx-auto">
                        Get
                        Started
                    </button>
                </div>
            </div>
        </section>
    @endsection
