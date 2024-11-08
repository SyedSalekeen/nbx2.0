@extends('website.master.app')

@section('content')
    <style>
        .hero {
            background-image: url('public/website/assets/images/financing/hero.jpg') !important;
        }

        .card-description {
            min-height: 140px;
        }
    </style>
    <section class="bg-image-container hero">
        <div class="hero-container container">
            <div class="hero-bg">
                <div class="hero-content hero-content-second">
                    <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                        <h1>Financing </h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="content-container">
        <div class="container">
            <p>Financing for commercial construction projects is paramount for ensuring the feasibility, affordability,
                and success of the endeavor. Adequate financing enables developers to cover the costs of land
                acquisition, materials, labor, permits, and other expenses associated with construction. By securing
                financing early in the planning stages, developers can accurately assess their budgetary constraints and
                make informed decisions about project scope and timeline. ,
                <a class="read-more d-block" data-bs-toggle="collapse" href="#seemore1" role="button" aria-expanded="false"
                    aria-controls="seemore1">See More</a>
            </p>
            <div class="collapse" id="seemore1">
                <div class="">

                    <p>Moreover, exploring various financing options, such as loans, lines of credit, or partnerships,
                        allows developers to choose the most suitable solution tailored to their needs and risk
                        tolerance. Additionally, having a solid financial plan in place provides confidence to lenders,
                        investors, and stakeholders, facilitating smoother transactions and project approvals.
                        Ultimately, determining financing for commercial construction projects is essential for
                        mitigating financial risks, optimizing resource allocation, and achieving the desired outcomes
                        within budget and schedule constraints.</p>

                    <ul style="margin:0;padding-left:15px">
                        <li><strong>Loan Option</strong></li>
                    </ul>
                    <p>
                        The various loan options available for financing is crucial for executing home rehab projects
                        effectively. Exploring different loan avenues enables homeowners to secure the necessary funds
                        tailored to their specific financial circumstances and project requirements.
                    </p>
                    <p>By comparing interest rates, terms, and repayment plans, informed decisions could be made with
                        long-term financial goals. Moreover, understanding loan options empowers homeowners to leverage
                        financing strategically, optimizing their investment in home renovations while maintaining
                        financial stability.</p>

                </div>
            </div>


        </div>
    </section>

    <section class="icon-boxes">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/1.png')}}" alt="Contact Us">
                        </div>
                        <h3 class="card-title">Conventional</h3>
                        <p class="card-description">Conventional financing options is vital for securing flexible and
                            tailored funding solutions, enabling informed decisions on interest rates and loan terms
                            crucial for successful home rehab projects.</p>
                        <div class="text-end card-button"><a href="conventional-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/2.png')}}" alt="Accept Offer">
                        </div>
                        <h3 class="card-title">VA Loan</h3>
                        <p class="card-description">VA loan options is essential for veterans and active duty service
                            members, providing tailored financing solutions with low or no down payment requirements
                            ensuring accessibility to home rehab projects while maximizing financial benefits.</p>
                        <div class="text-end card-button"><a href="va-loans.html">Contact us</a></div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/3.png')}}" alt="Choose Date">
                        </div>
                        <h3 class="card-title">FHA Loan</h3>
                        <p class="card-description">FHA loan options is crucial for homebuyers with limited down
                            payments or lower credit scores, offering accessible financing solutions that facilitate
                            home rehab projects and promote homeownership opportunities.</p>
                        <div class="text-end card-button"><a href="fha-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/4.png')}}" alt="Choose Date">
                        </div>
                        <h3 class="card-title">USDA Loan</h3>
                        <p class="card-description">USDA loan options is vital for homebuyers in rural areas, offering
                            low-interest financing solutions with no down payment requirements, enabling accessible
                            funding for home rehab projects and supporting rural development initiatives.</p>
                        <div class="text-end card-button"><a href="usda-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/5.png')}}" alt="Choose Date">
                        </div>
                        <h3 class="card-title">Jumbo Loan</h3>
                        <p class="card-description">Jumbo loan options is essential for financing high value properties
                            or extensive home rehab projects, offering flexibility beyond conventional lending limits
                            and catering to unique investment needs.</p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon" style="margin-bottom: 10px;">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/6.png')}}" alt="Choose Date">
                        </div>
                        <h3 class="card-title">Non-Qualified Mortgages</h3>
                        <p class="card-description">Non-qualified mortgage options is crucial for borrowers outside
                            traditional lending criteria, providing tailored financing solutions vital for diverse home
                            rehab projects and unique financial situations.</p>
                        <div class="text-end card-button"><a href="non-qualified-mortgages.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/7.png')}}" alt="Close & Get Paid">
                        </div>
                        <h3 class="card-title">Hard Money/ Private Money</h3>
                        <p class="card-description">Hard money lending involves offering high interest short-term loans
                            backed by real estate assets, ideal for borrowers with poor credit or urgent funding needs
                            whereas private money lending entails borrowing from individuals or non-institutional
                            investors providing flexibility and customized terms outside traditional banking channels.
                        </p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-icon">
                            <img class="img-fluid" src="{{asset('website/assets/images/financing/8.png')}}" alt="Close & Get Paid">
                        </div>
                        <h3 class="card-title">Other Businesses We Finance</h3>
                        <p class="card-description">NBX Capital Investment extends financing to a diverse array of
                            businesses, offering tailored funding solutions to support growth, innovation, and
                            sustainability, fostering success across various Industries with flexible terms and
                            personalized support.</p>
                        <div class="text-end card-button"><a href="jumbo-loans.html">Contact us</a></div>
                    </div>
                </div>


            </div><!-- row-->
        </div>
    </section>

    <section class="cta mt-0">
        <div class="container cta-inner">
            <h2 class="text-center" data-aos="fade-up" data-aos-duration="800" class="aos-init aos-animate">Get
                Started Today</h2>
            <div class="contact-form text-center d-flex justify-content-center align-items-center">
                <a href="#" data-aos="fade-up" data-aos-duration="1100" class="cta-button aos-init aos-animate">
                    Apply Now</a>
            </div>
        </div>
    </section>

    <div class="advertise text-center" style="max-width: 900px;margin:30px auto">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('website/assets/images/financing/Location.jpg')}}" class="img-1 img-fluid" />
                    <h2>Our Team</h2>
                    <p>When working with us, you'll be overseeing particularly with an experienced, arranged Progress
                        Officer, whose objective is to supply you the progress best suited to meet your needs in a
                        straightforward, coordinate, capable way.</p>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('website/assets/images/financing/Real-Estate-Plan.png')}}" class="img-2 img-fluid" />
                    <h2>Blogs</h2>
                    <p>Getting a contract, particularly for first-time homebuyers, can be an threatening encounter. We
                        certainly don’t need that. In expansion to having an experienced staff that will expertly direct
                        you all through the method, our web journal is another reference for you to check out so you'll
                        get ready.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
