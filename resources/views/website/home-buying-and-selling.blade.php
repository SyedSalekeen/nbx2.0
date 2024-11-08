@extends('website.master.app')
    <link rel="stylesheet" href="{{ asset('website/homeBuying.css') }}">
@section('content')
    <style>
        .hero {
            /* padding: 20px 0; */
            background: url('public/website/assets/images/commercial-con/Group\ 108.png');
            background-position: center;
            background-size: 100% 100%;
        }
    </style>
    <section class="bg-image-container hero">
        <div class="hero-container container">
            <div class="hero-bg">
                <div class="hero-content hero-content-second">
                    <div class="hero-heading" data-aos="zoom-in" data-aos-duration="700">
                        <h1>Home Buying</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <div class="how-it-works-container">
        <h2 class="how-it-works-heading">How It Works</h2>
        <p class="how-it-works-paragraph">
            Understanding how the home buying and selling process works is essential for ensuring a smooth and
            successful transaction. Whether you're a buyer or a seller, knowing the steps involved and what to expect
            can alleviate stress and uncertainty. For sellers, this means preparing your home for sale, <a href="#"
                class="how-it-works-link">See More</a> marketing it effectively, negotiating offers, and completing the
            closing process.
        </p>

        <p class="how-it-works-paragraph">
            For buyers, it involves getting pre-approved for a mortgage, searching for properties, making offers,
            conducting inspections, and finalizing the purchase. See more At NBX Capital, we simplify the process by
            providing expert guidance, personalized support, and a seamless experience from start to finish. We ensure
            that your home buying or selling journey is as smooth and stress-free as possible.
        </p>
    </div>
    <div class="cards-section">
        <div class="card">
            <div class="card-icon">
                <img src="{{asset('website/assetsN/icons/licence Professional-01-01.png')}}" alt="Contact Us">
            </div>
            <h3 class="card-title">CONTACT US</h3>
            <p class="card-description">Contacting us is the first step towards selling your house fast. Our team is
                ready to assist you with any questions or concerns.</p>
        </div>

        <div class="card">
            <div class="card-icon">
                <img src="{{asset('website/assetsN/icons/certificate-01.png')}}" alt="Accept Offer">
            </div>
            <h3 class="card-title">ACCEPT OFFER</h3>
            <p class="card-description">Receive a fair, no-obligation offer for your home. Our team works to ensure a
                quick and easy process for you.</p>
        </div>

        <div class="card">
            <div class="card-icon">
                <img src="{{asset('website/assetsN/icons/3135719.png')}}" alt="Choose Date">
            </div>
            <h3 class="card-title">CHOOSE DATE</h3>
            <p class="card-description">Select a closing date that works for you, allowing you to move forward at your
                own pace.</p>
        </div>

        <div class="card">
            <div class="card-icon">
                <img src="{{asset('website/assetsN/icons/3420160-200.png')}}" alt="Close & Get Paid">
            </div>
            <h3 class="card-title">CLOSE & GET PAID</h3>
            <p class="card-description">Close the deal and receive your payment quickly, ensuring a smooth and
                stress-free transaction.</p>
        </div>
    </div>

    <div class="cards-footer ">
        <h2 class="footer-heading">The Easiest Way To Sell Your House Fast Regardless Of Condition.</h2>
        <p class="footer-description">
            Streamlined process offered by our company, ensuring swift sale of properties without requiring extensive
            renovations or repairs. We prioritize efficiency and convenience, allowing homeowners to quickly sell their
            homes without the hassle of dealing with the complexities often associated with traditional real estate
            transactions.
        </p>
    </div>
    <div class="Capitalcontainer">
        <h1>Why People Sell To NBX Capital</h1>
        <div class="reasons">
            <ul>
                <li>Quick sale without lengthy listing periods.</li>
                <li>No need for costly repairs or renovations.</li>
                <li>Cash offers for immediate transactions.</li>
                <li>Averts foreclosure and its consequences.</li>
                <li>Ideal for swiftly handling inherited properties.</li>
                <li>Facilitates easy relocation without delays.</li>
                <li>Provides relief for homeowners in financial distress.</li>
            </ul>
            <ul>
                <li>Simplifies downsizing by expediting the selling process.</li>
                <li>Offers a clean solution for property division in divorce.</li>
                <li>Ideal for landlords looking to divest rental properties.</li>
                <li>Swift solution for unwanted inherited properties.</li>
                <li>Provides financial relief for individuals facing job loss.</li>
                <li>Accepts distressed properties without repair.</li>
                <li>Quick access to cash for retirees looking to downsize.</li>
                <li>Streamlined process with minimal paperwork and negotiations.</li>
            </ul>
        </div>
    </div>
    <div class="section-buy-houses">
        <h2>We Buy Houses In Any Condition</h2>
        <p>
            We Buy Houses In Any Condition is a commitment to homeowners that regardless of the state of their property,
            we are ready to make an offer. Whether the house is outdated, damaged, or in need of extensive repairs, we
            understand that selling can be daunting. <a href="#">see more</a>
        </p>
        <p>
            Our promise is to provide a solution that eliminates the stress and hassle of traditional real estate
            transactions. By offering fair cash deals and handling all aspects of the sale process, we empower
            homeowners to move forward quickly and efficiently, regardless of their property’s condition. With our
            dedicated team and seamless process, homeowners can trust us to provide a straightforward and hassle-free
            experience, allowing them to sell their houses with confidence and ease.
        </p>
    </div>


    <div class="section-choose-option">
        <h1>Choose The Right Option For You</h1>
        <div class="options">
            <div class="option">
                <h2>Option 1</h2>
                <p>
                    List your house on the market with a real estate agent. From listing to cash in hand is usually 60
                    to 90+ days, plus you must deal with the hassle of open houses, showings, inspections, appraisals,
                    commissions, and buyer financing falling through at the last minute.
                </p>
            </div>
            <div class="option">
                <h2>Option 2</h2>
                <p>
                    Sell the house yourself For Sale By Owner. You’re doing all the work as an agent but you will save a
                    bit of money. However, it costs you time and stress.
                </p>
            </div>
            <div class="option">
                <h2>Option 3</h2>
                <p>
                    Sell for cash for a hassle-free listing on the market, pick your closing date, and don’t bother with
                    cleaning up or repairs. <a href="#">see more</a> There is no obligation to receive an offer from
                    us,
                    and we love the most difficult situations Realtors or other investors won’t touch.
                </p>
            </div>
        </div>
    </div>



    <section class="container-bg mt-0">
        <div class="contact-container text-center">
            <h2 data-aos="fade-up" data-aos-duration="800" class="aos-init aos-animate">We want to Earn Your Trust</h2>
            <p data-aos="fade-up" data-aos-duration="1000" class="aos-init aos-animate">With transparent communication
                personalized service. and a focus on your needs. we strive to build lasting relationships based on the
                trust Your confidence in your expertise and reliability throughout the process at NBX Capital earning
                your trust is our top priority</p>
            <div class="contact-form d-flex justify-content-center text-center">
                <button data-aos="fade-up" data-aos-duration="1100" class="gbl-button-white aos-init aos-animate"> Get
                    Cash Offer </button>
            </div>
        </div>
    </section>

    <div class="advertise">
        <img src="{{asset('website/assetsN/businessman-holding-little-house.png')}}" class="img-1" />
        <img src="{{asset('website/assetsN/real-estate-agent-business-woman-front-door.png')}}" class="img-2" />
    </div>
@endsection
