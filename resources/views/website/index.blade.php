@extends('website.master.app')

@section('content')
    <section class="hero">
        <div class="container hero-container">
            <!-- hero section -->
            <div class="hero-content">
                <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                    <img src="{{asset('website/assets/images/logo-sub-NBX.svg')}}" alt="Image">
                    <h1>Capital Investments</h1>
                </div>

                <p data-aos="fade-up" data-aos-duration="1000">
                    NBX Capital Investments is a diversified firm specializing in real estate ventures, encompassing
                    construction, acquisition, and sale of properties, alongside comprehensive home rehabilitation
                    services. With a focus on financing solutions tailored to meet individual investor needs, NBX
                    facilitates opportunities for both seasoned and novice investors to engage in property ventures.
                    Additionally, the company provides expert property management services, ensuring optimal asset
                    performance and maximizing returns on investment.
                </p>
                <!--<button data-aos="fade-up" data-aos-duration="1100" class="gbl-button-black"> See More </button>-->
            </div>
        </div>
    </section>


    <!-- Our Advantage -->
    <section class="home-services">
        <div class="our-advantage-container container">
            <h3 data-aos="fade-up" data-aos-duration="800"> > Our Services </h3>
            <h2 data-aos="fade-up" data-aos-duration="1000"> We Offer a One Stop Shop For All Real Estate Needs</h2>
            <div class="advantage-cards-container row my-5">
                <div class="col-md-4">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-image">
                            <img src="{{asset('website/assets/images/home/construction.png')}}" alt="" class="img-fluid">
                        </div>
                        <h4> Construction </h4>
                        <p> Construction at NBX Capital Investments involves executing high-quality building projects,
                            leveraging advanced techniques and materials to create innovative and durable structures
                            that meet clients' specifications and exceed industry standards. Our team of skilled
                            professionals ensures efficient project management from inception to completion, delivering
                            superior results on time and within budget.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1200">
                        <div class="card-image">
                            <img src="{{asset('website/assets/images/home/buying.png')}}" alt="" class="img-fluid">
                        </div>
                        <h4> Buying and Selling </h4>
                        <p> NBX Capital Investments excels in buying and selling real estate assets, leveraging market
                            expertise to identify lucrative investment opportunities and negotiate favorable deals. With
                            a strategic approach and a focus on maximizing returns, we facilitate seamless transactions
                            that align with our clients' investment objectives and financial goals. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1400">
                        <div class="card-image">
                            <img src="{{asset('website/assets/images/home/home-rehab.png')}}" alt="" class="img-fluid">
                        </div>
                        <h4> Home Rehab </h4>
                        <p> Home rehab at NBX Capital Investments involves revitalizing properties through meticulous
                            renovation and modernization techniques, enhancing both aesthetic appeal and structural
                            integrity to maximize their market value and appeal to prospective buyers or tenants. Our
                            expert team ensures each rehabilitation project is tailored to meet client preferences and
                            industry trends, resulting in transformed homes that command premium prices in the market.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1600">
                        <div class="card-image">
                            <img src="{{asset('website/assets/images/home/financing.png')}}" alt="" class="img-fluid">
                        </div>
                        <h4> Financing </h4>
                        <p> NBX Capital Investments offers flexible financing solutions tailored to investors' needs,
                            providing access to capital for real estate ventures through a variety of loan options and
                            investment structures. With a focus on personalized financial strategies and competitive
                            rates, we empower investors to pursue their property goals with confidence and efficiency.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="zoom-in" data-aos-duration="1800">
                        <div class="card-image">
                            <img src="{{asset('website/assets/images/home/rei.png')}}" alt="" class="img-fluid">
                        </div>
                        <h4> REI Wholesale </h4>
                        <p> REI wholesale involves swiftly acquiring properties at below-market prices and reselling
                            them to investors or end buyers for profit without holding onto them long-term, often
                            through contract assignments or simultaneous transactions leveraging market expertise and
                            negotiation skills for rapid returns. </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" data-aos="zoom-in" data-aos-duration="2000">
                        <div class="card-image">
                            <img src="{{asset('website/assets/images/home/property.png')}}" alt="" class="img-fluid">
                        </div>
                        <h4> Property Managment </h4>
                        <p> NBX Capital Investments provides comprehensive property management services, overseeing all
                            aspects of asset maintenance, tenant relations, and financial management to ensure optimal
                            profitability and performance for our clients. With a approach proactive and attention to
                            detail, we safeguard property value and cultivate long-term success in real estate
                            investments. </p>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <h1 class="display-1 font-weight-300">Our Mission-Is To <br> Help People Acquire <br> A New Quality Of
                    Life</h1>
            </div>
            <!-- <button data-aos="fade-up" data-aos-duration="1100" class="gbl-button-white"> Get Offer </button> -->
        </div>
    </section>
    <!-- Our Advantage End -->


    <section class="cta left mt-0">
        <div class="container cta-inner">
            <h2 class="display-2" data-aos="fade-up" data-aos-duration="800"><span class="d-lg-block">We Will Create
                    A Personalized</span> Journey For You</h2>
            <p data-aos="fade-up" data-aos-duration="1000">Tell us about your requirement, and we will compile a
                catalog with suitable options for you</p>
            <div style="height:20px"></div>
            <div class="contact-form text-center d-flex justify-content-center align-items-center">
                <a href="#" data-aos="fade-up" data-aos-duration="1100" class="cta-button aos-init aos-animate">
                    Get Offer</a>
            </div>
        </div>
    </section>

    <!-- > Our landmarks -->
    <section class="home-landmarks bg-dark">
        <div class="our-advantage-container container">
            <h4 class="section-subheading" data-aos="fade-up" data-aos-duration="800"> > Our landmarks </h4>
            <h2 class="section-heading" data-aos="fade-up" data-aos-duration="1000"> <span class="d-lg-block">When
                    Selecting Real Estate, We Focus</span> On Several
                Important Characteristics </h2>

            <div class="row gx-0 align-items-center">
                <div class="col-md-6">
                    <div class="landmark-content" data-aos="zoom-in" data-aos-duration="800">
                        <h6 class="landmark-heading">Plan</h6>
                        <p>At NBX Capital Investments our plan is to deliver
                            exceptional value to clients through meticulous
                            planning, innovative strategies, and unwavering
                            commitment to every excellence in aspect of real
                            estate investment and management. By aligning
                            with our clients' goals and leveraging our expertise,
                            we aim to expectations exceed and foster lasting
                            success in the dynamic world of property ventures.</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="landmark-img" data-aos="fade-up" data-aos-duration="800" data-aos="fade-up"
                        data-aos-duration="1000">
                        <img class="img-fluid" src="{{asset('website/assets/images/img-landmark-1.png')}}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="row gx-0 align-items-center">
                <div class="col-md-6">
                    <div class="landmark-img" data-aos="fade-up" data-aos-duration="800" data-aos="fade-up"
                        data-aos-duration="1200">
                        <img class="img-fluid" src="{{asset('website/assets/images/img-landmark-2.png')}}" alt="Image">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="landmark-content" data-aos="zoom-in" data-aos-duration="900">
                        <h6 class="landmark-heading">Location</h6>
                        <p>Plays a pivotal role in NBX Capital Investment's strategy,
                            with a focus on identifying prime real estate opportunities
                            in thriving markets with strong growth potential and
                            favorable economic indicators. By carefully selecting
                            locations with high demand and promising future
                            prospects, we aim to maximize investment returns and
                            create lasting value for our clients.</p>
                    </div>
                </div>

                <div class="row gx-0 align-items-center">
                    <div class="col-md-6">
                        <div class="landmark-content" data-aos="zoom-in" data-aos-duration="1000">
                            <h6 class="landmark-heading">Infrastructure</h6>
                            <p>Infrastructure is a cornerstone of NBX Capital Investment's
                                approach, emphasizing the development and maintenance
                                of essential facilities and services to support thriving
                                communities and enhance property value. By investing in
                                robust infrastructure projects, we contribute to sustainable
                                growth and foster long-term prosperity in the regions where
                                we operate.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="landmark-img" data-aos="fade-up" data-aos-duration="800" data-aos="fade-up"
                            data-aos-duration="1300"><img width="100%" height="100%"
                                src="{{asset('website/assets/images/img-landmark-3.png')}}" alt="Image"></div>
                    </div>
                </div>


            </div><!-- row -->

            <div class="row gx-0 align-items-center">
                <div class="col-md-6">
                    <div class="landmark-img" data-aos="fade-up" data-aos-duration="800" data-aos="fade-up"
                        data-aos-duration="1400"><img width="100%" height="100%"
                            src="{{asset('website/assets/images/img-landmark-4.png')}}" alt="Image"></div>
                </div>
                <div class="col-md-6">
                    <div class="landmark-content" data-aos="zoom-in" data-aos-duration="1200">
                        <h6 class="landmark-heading">Life Scenarios</h6>
                        <p>Life scenarios are diverse and dynamic situations that
                            individuals encounter, ranging from career changes and
                            personal milestones to unexpected challenges and
                            triumphs. By navigating these scenarios with resilience and
                            adaptability, individuals can shape their own narratives
                            and find fulfillment in the journey of life.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- > Our landmarks End -->

    <!-- > Featured Properties -->
    <section class="featured-properties">
        <div class="our-advantage-container container inner-container">
            <h2 class="featured-heading" data-aos="zoom-in" data-aos-duration="1200">Featured Properties</h2>
            <div class="row" data-aos="fade-up" data-aos-duration="1000">
                <div class="col-md-6 feature-property">
                    <img class="img-fluid" src="{{asset('website/assets/images/house-1.png')}}" alt="Image">
                    <p>House "Rain"</p>
                </div>
                <div class="col-md-6 feature-property">
                    <img class="img-fluid" src="{{asset('website/assets/images/house-2.png')}}" alt="Image">
                    <p>House "Red Village"</p>
                </div>
            </div><!-- row -->
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 feature-property" data-aos="fade-up" data-aos-duration="1400">
                    <img class="img-fluid" src="{{asset('website/assets/images/img-home.png')}}" alt="Image">
                    <p>House "Megapolis"</p>
                </div>
                <div class="col-md-2"></div>
            </div><!-- row -->

            <div class="row">
                <div class="col-md-4 feature-property">
                    <img class="img-fluid" data-aos="zoom-in" data-aos-duration="1600"
                        src="{{asset('website/assets/images/home/House-Green-oasis-Black.png')}}" alt="Image">
                    <p>House "Green Oasis"</p>
                </div>
                <div class="col-md-4 feature-property">
                    <img class="img-fluid" data-aos="zoom-in" data-aos-duration="1600"
                        src="{{asset('website/assets/images/home/House-New-town-Black.png')}}" alt="Image">
                    <p>House "New Town"</p>
                </div>
                <div class="col-md-4 feature-property">
                    <img class="img-fluid" data-aos="zoom-in" data-aos-duration="1600"
                        src="{{asset('website/assets/images/home/House-Megapolis-Black.png')}}" alt="Image">
                    <p>House "Depo"</p>
                </div>
            </div><!-- row -->
            <div class="row vid-section">
                <div class="col-md-2"></div>

                <div class="col-md-8 video">
                    <div class="vid-content" style="position: relative;z-index: 5;padding:10px;">
                        <h6 style="font-size: 13px;font-weight: normal;">Club House "Slava"</h6>
                        <p style="font-size: 12px;font-weight: normal;">A new premium residential complex in the
                            prestigious district The concept of the complex was
                            developed by the well-known bureau tsimailo, Lyashenko and partners. The project was
                            presented
                            at the MIPIM exhibition in canvas.</p>
                        <!-- <a href="">Learn more</a> -->
                    </div>
                    <div class="vid-overlay">
                        <img src="{{asset('website/assets/images/play.png')}}"
                            style="width: 60px;border-radius: 100px;height: 60px;border:2px solid #fff; padding:5px" />
                    </div>
                </div>

                <div class="col-md-2"></div>
            </div>

        </div>
    </section>
@endsection
