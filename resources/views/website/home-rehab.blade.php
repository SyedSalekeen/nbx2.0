@extends('website.master.app')
@section('content')
    <style>
        .hero {
            /* padding: 20px 0; */
            background: url('public/website/assets/images/home_rehab.png');
            background-position: center;
            background-size: 100% 100%;
        }

        .list-container {
            display: flex;
            /* Use flexbox to display lists side by side */
            gap: 390px;
            /* Space between the two lists */
        }

        ul {
            list-style-type: none;

            /* Remove default bullets */
            padding: 10;
            /* Remove default padding */
            margin: 10;
            /* Remove default margin */
        }

        div li {
            margin-bottom: 10px;
            float: left;
            /* Space between list items */
        }

        a {
            text-decoration: none;
            /* Remove underlines from links */
            color: #000;
            /* Set text color */
        }

        a:hover {
            color: #007bff;
            /* Change text color on hover */
        }

        .card {
            width: 25%;
        }

        .card-title {
            font-weight: 400;
        }

        .card-title-main {
            font-weight: 700;
            margin: 20px;
            margin-bottom: 0px;
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

        .icon-boxes .card {
            width: 100%;
        }
    </style>
    <section class="bg-image-container hero">
        <div class="hero-container container">
            <div class="hero-bg">
                <div class="hero-content hero-content-second">
                    <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                        <h1>Home Rehab</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="icon-boxes py-5">
        <div class="container">
            <div class="row">

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img src="{{asset('website/assets/images/rehab_icon/1.png')}}" alt="Choose Date">
                        </div>
                        <h3 class="card-title text-uppercase">Planning & Estimation</h3>
                        <p class="card-description">After you contact NBX Remodeling for your free discussion to talk about
                            thoughts
                            for the home remodeling extend, your individual manager will reply all your questions and get
                            ready a
                            detailed gauge..</p>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img src="{{asset('website/assets/images/rehab_icon/2.png')}}" alt="Choose Date">
                        </div>
                        <h3 class="card-title text-uppercase">Interior Design & Concepts</h3>
                        <p class="card-description">Once initial design concepts and layout have submitted to our
                            architectural
                            staff to prepare blueprints used by our contractors on location..</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img src="{{asset('website/assets/images/rehab_icon/3.png')}}" alt="Close & Get Paid">
                        </div>
                        <h3 class="card-title text-uppercase">Management & Construction</h3>
                        <p class="card-description">once issued, construction will begin shortly after. Your project manager
                            will
                            oversee all activities throughout the project..</p>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="cards-section header">
        <div class="card" style="width: 100%;">
            <h1 class="card-title-main text-capitalize font-weight-bold">Our General Contracting Services</h1>
            <div class="list-container">
                <ul class="list-1">
                    <li><a href="#">> KITCHEN RENOVATION</a></li>
                    <li><a href="#">> BATHROOM RENOVATION</a></li>
                    <li><a href="#"> > CONDO REMODELING</a></li>
                    <li><a href="#">> BASEMENT REMODELING</a></li>
                </ul>
                <ul class="list-2">

                    <li><a href="#">> PORCHES AND DECKS </a></li>
                    <li><a href="#">> FLOORING, STAIRCASES AND FIREPLACE</a></li>
                    <li><a href="#"> > HOME ADDITIONS AND IMPROVEMENTS</a></li>
                    <li><a href="#"> > PATIOS</a></li>
                </ul>
            </div>
        </div>

    </div>

    <div class="contContainer">
        <p class="co">> Our Services</p>
    </div>
    <div class="icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-title text-uppercase">Full Services and renovation</h3>
                        <p class="card-description">The necessity of a full-service home renovation or rehab is pivotal for
                            optimizing living spaces. It ensures addressing structural issues, enhancing functionality, and
                            modernizing aesthetics, ultimately increasing the property's value. See More By assessing the
                            scope
                            comprehensively, homeowners can tailor renovations to suit their lifestyle needs, fostering a
                            comfortable and personalized environment. Moreover, strategic renovations can integrate
                            energy-efficient
                            solutions, promoting sustainability and long term cost savings..</p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-title text-uppercase">Quality Bathroom Remodeling</h3>
                        <p class="card-description">The need for quality bathroom remodeling as part of a home rehab is
                            essential
                            for enhancing both comfort and property value. A well-executed bathroom renovation can transform
                            outdated or inefficient spaces into luxurious retreats. See More improving daily living
                            experiences. By
                            focusing on quality materials and design, homeowners ensure durability and longevity, minimizing
                            the
                            need for future repairs. Additionally, upgrading bathrooms can significantly and tenants alike..
                        </p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-title text-uppercase">kitchen Remodeling Experts</h3>
                        <p class="card-description">The expertise of kitchen remodeling professionals is paramount during a
                            home
                            rehab. Skilled experts bring invaluable knowledge and craftsmanship to the project, ensuring
                            that every
                            aspect of the kitchen renovation is executed with precision and attention to detail. See More
                            Their
                            expertise allows for efficient utilization of space, optimal placement of appliances, and
                            integration of
                            innovative design solutions to meet the homeowner's specific needs. By entrusting the project to
                            experienced professionals, homeowners can rest assured that their kitchen remodel will not only
                            enhance
                            the usability and value of their home but also reflect their unique style and preferences..</p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-title text-uppercase">Complete Condo Remodeling</h3>
                        <p class="card-description">The necessity of complete condo remodeling during a home rehab is
                            crucial for
                            maximizing space functionality and aesthetic appeal. Comprehensive renovations ensure that every
                            aspect
                            of the condo is optimized to meet the homeowner's needs and preferences, from layout adjustments
                            to
                            fixture upgrades. See More By assessing the condo's condition thoroughly homeowners can address
                            any
                            underlying Issues and create a cohesive design scheme that enhances the overall ambiance.
                            Moreover,
                            complete remodeling allows for the integration of modern amenities and energy-efficient
                            solutions,
                            ultimately increasing the property's value and marketability..</p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-title text-uppercase">Free Estimate And Design Consultation</h3>
                        <p class="card-description">The availability of a free estimate and design consultation for home
                            rehab
                            projects is paramount for informed decision-making and effective planning. These consultations
                            provide
                            homeowners with valuable insights into the scope of the project, associated costs, and potential
                            design
                            options. See More By accessing expert advice and estimates upfront, homeowners can better
                            understand the
                            feasibility of their renovation goals and budget accordingly. Moreover, such consultations
                            facilitate
                            collaboration between homeowners and professionals, ensuring vision while also meeting practical
                            requirements and budget constraints..</p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="card">
                        <h3 class="card-title text-uppercase">Increase Your Home Value</h3>
                        <p class="card-description">The potential increase in home value through a rehab project is vital
                            for
                            homeowners seeking to maximize their investment. Strategic renovations can significantly enhance
                            a
                            property's appeal, functionality, and marketability, thereby commanding higher selling prices or
                            rental
                            rates. By carefully assessing which areas of the home require improvement. See More homeowners
                            can
                            prioritize upgrades that yield the greatest return on investment. Additionally, enhancing curb
                            appeal
                            and incorporating modern amenities can attract more potential buyers or tenants, ultimately
                            leading to a
                            quicker sale or rental process. Overall, understanding the impact of home rehab on property
                            value
                            empowers homeowners to make informed decisions that optimize their financial returns..</p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>

            </div><!-- row -->



        </div>
    </div>

    <div class="contContainer">
        <h1 class="contCardsHdng">Our Latest Home <br />Renovation</h1>
        <div class="befAfterContainer">
            <div class="befAfterBox">
                <img src="{{asset('website/assets/images/rehab-AB/a.png')}}" alt="" class="befAfterImg">
                <div class="befAfterTxt">before</div>
            </div>
            <div class="befAfterBox">
                <img src="{{asset('website/assets/images/rehab-AB/b.png')}}" alt="" class="befAfterImg">
                <div class="befAfterTxt">after</div>
            </div>
        </div>
        <div class="befAfterContainer">
            <div class="befAfterBox">
                <img src="{{asset('website/assets/images/rehab-AB/c.png')}}" alt="" class="befAfterImg">
                <div class="befAfterTxt">before</div>
            </div>
            <div class="befAfterBox">
                <img src="{{asset('website/assets/images/rehab-AB/d.png')}}" alt="" class="befAfterImg">
                <div class="befAfterTxt">after</div>
            </div>
        </div>
    </div>
    </div>
@endsection
