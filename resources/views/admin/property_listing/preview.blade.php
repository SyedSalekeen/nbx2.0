<?php $footer = App\Models\Footer::where('id','1')->first(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NBX Capital Investments</title>
    <!-- font families -->
    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Bebas Neue -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <!-- aos -->
    <link rel="stylesheet" href="{{ asset('website/assets/aos/aos.css') }}">
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('website/style.css') }}">
    <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('home_rehab/'.$footer->logo) }}">
</head>
<style>
.my-phone {
    text-decoration: none;
    color: black;
    font-weight: 600;
}
    .center-line {
        width: 40%;
        border-bottom: 2px solid black;
    }

    .inputStyle {
        width: 100%;
        padding: 10px;
    }

    body {
        margin-top: -3.1rem;
    }

    .close-button {
        width: 21px;
    }

    .marginClass {
        margin-top: 5px;
    }

    .contact-form {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;

        color: white;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }

    .contact-form h2 {
        color: #8d2023;

    }

    .contact-form label {
        display: block;
        margin-bottom: 8px;
        color: #8d2023;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 16px;
        box-sizing: border-box;
        border: 1px solid #fff;
        border-radius: 4px;
        background-color: #fff;
        color: #333;
    }

    .contact-form button {
        background-color: #fff;
        color: #8d2023;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
<style>
    /* Basic reset for styles */


    /* Style for the select box container */
    .select-box {
        width: 200px;
        margin: 50px;
        position: relative;
    }

    .select-box1 {
        width: 200px;
        margin: 50px;
    }

    /* Style for the select box itself */
    .select {
        width: 100%;
        padding: 10px;
        font-size: 16px;
        border: 1px solid #ccc;
        border-radius: 4px;
        appearance: none;
        /* Remove default arrow on some browsers */
    }

    /* Style for the arrow icon */
    .select-box::after {
        content: '\25BC';
        /* Unicode character for down arrow */
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
        pointer-events: none;
        /* Make sure the arrow doesn't interfere with the select box */
    }

    body.my-page-review .message-bar-container .pp-drop-1 {
        border: 0;
        padding: 1rem;
    }

    body.my-page-review .tab-button-container {
        padding: 1rem;
    }

    body.my-page-review section.bg-image-container.bg-image-listing {
        margin-top: -6rem;
        padding-top: 10rem;
    }


    body.my-page-review .tab-button-container {
        padding: 1rem;
        height: 400px;
    }

    body.my-page-review .tab-button-container img {
        object-fit: cover;
    }

    .header {
        padding-top: 4rem;
    }


    /* perivew model  */
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        top: 0px;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 1000;
    }

    .modal-content {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        width: 80%;
    }

    /* Button style (just for demo purposes) */
    #gbl-button-black {
        background-color: black;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    /* Close button style */
    .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 24px;
        cursor: pointer;
    }

    .my-image-tag {
        border: 2px solid #FF745A;
        padding: 0 !important;
        margin-right: 10px;
        position: relative;
    }

    .my-image-tag p {
        position: absolute;
        top: 0;
        left: 0;
        background-color: #FF745A;
        color: white;
        padding: 5px 10px;
        font-size: 13px;
        z-index: 1
    }

    .my-pdf-tag {
        border: 2px solid #8c301f;
        padding: 0 !important;
        margin-right: 10px;
        position: relative;
    }

    .my-pdf-tag p {
        position: absolute;
        top: 0;
        left: 0;
        background-color: #8c301f;
        color: white;
        padding: 5px 10px;
        font-size: 13px;
        z-index: 1
    }

    .my-link-tag {
        border: 2px solid #64AC57;
        padding: 0 !important;
        margin-right: 10px;
        position: relative;
    }

    .my-link-tag p {
        position: absolute;
        top: 0;
        left: 0;
        background-color: #64AC57;
        color: white;
        padding: 5px 10px;
        font-size: 13px;
        z-index: 1
    }

    .my-view-tag {
        display: none;
    }

    .tab-button-container:hover .my-view-tag {
        position: absolute;
        z-index: 3;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        background-color: #ff745a47;
    }
    
    
    
    .new-mdl-style {
        font-family: "Alphabets";
        color: black;
        background-color: white;
        max-width: 1173px;
        border-radius: 15px;
        padding: 25px 30px;
        margin-top: 1rem;
    }
.new-mdl-style input {
    border: 0;
    box-shadow: none;
    font-size: 14px;
    font-weight: 400;
    margin-top: 5px;
}

.new-mdl-style input, .new-mdl-style textarea {
    color: black !important;
    border: 0;
    background-color: #F9FAFB !important;
    padding: 20px 10px;
    border-radius: 5px;
}

.new-mdl-style input::placeholder,
.new-mdl-style textarea::placeholder {
    color:black !important;
}
.new-mdl-style input:placeholder, .new-mdl-style textarea:placeholder {
    color:black !important;
}
.new-mdl-style h4 {
    font-size: 18px;
}

.new-mdl-style textarea {
    box-shadow: none;
    font-size: 14px;
    font-weight: 400;
    margin-top: 5px;
    resize: none;
    height: 130px !important;
    color: black;
    font-family: "Alphabets";
}


.new-mdl-style .check-box-container div {
    background-color: #808080bf;
    color:white;
    border-radius: 5px;
    display: flex;
    align-items: center;
    padding: 3px 5px 0px;
    font-weight: 700;
}

.new-mdl-style .check-box-container div label {
    margin-top: -6px;
}

.new-mdl-style .check-box-container  {
    flex-wrap: wrap;
}
.new-mdl-style .check-box-container div  {
    margin-top: 5px;
}
</style>

<body class='my-page-review'>

    <!-- header -->
         <header class="header">
        <div class="header-container">
            <div class="logo-container">
                <a href="{{route('website.index')}}">
                    <img width="100%" src="{{ asset('home_rehab/'.$footer->logo) }}" alt="Image">
                </a>
            </div>
            <div class="side-nav-mobi">
                <div class="logo-container">
                     <a href="{{route('website.index')}}">
                    <img width="100%" src="{{ asset('home_rehab/'.$footer->logo) }}" alt="Image">
                    </a>
                </div>
                <ul class="">
                    <li><a class="active" href="{{ route('website.index') }}">Home</a></li>
                    <li><a href="{{ route('about_us') }}">About Us</a></li>
                    <li class="sub-nav" style="text-align:center"> <a href="#" style=""> Services </a>
                        <ul class="sub-nav-container">
                            <li><a href="{{ route('construction') }}">Construction</a></li>
                            <li><a href="{{ route('financing') }}">Financing</a></li>
                            <li><a href="{{ route('home-buying-and-selling') }}">Home Buying and Selling</a></li>
                            <li><a href="{{ route('home_rehab') }}">Home Rehab</a></li>
                            <li><a href="{{ route('investment') }}">Investment</a></li>
                            <li><a href="{{ route('property-management') }}">Property Management</a></li>
                                   <li><a href="{{route('Wholesale')}}">Wholesale</a></li>
                        </ul>
                    </li>
                    <!--<li><a href="{{ route('case_studies_page') }}">Case Studies</a></li>-->
                    <li><a href="#">Case Studies</a></li>
                    <li><a href="{{ route('contact_us')  }}">Contact Us</a></li>
                    <!--<li><a class="" href="tel:+130299420" style=""> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="18" height="18"><path d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z" fill="currentColor"></path></svg> {{ $footer->contact }}</a></li>-->
                <li>
                <a class="" href="tel:+130299420" style="
    display: flex;
    align-items: center;
"> <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="
    width: 30px;
"><path d="M9.36556 10.6821C10.302 12.3288 11.6712 13.698 13.3179 14.6344L14.2024 13.3961C14.4965 12.9845 15.0516 12.8573 15.4956 13.0998C16.9024 13.8683 18.4571 14.3353 20.0789 14.4637C20.599 14.5049 21 14.9389 21 15.4606V19.9234C21 20.4361 20.6122 20.8657 20.1022 20.9181C19.5723 20.9726 19.0377 21 18.5 21C9.93959 21 3 14.0604 3 5.5C3 4.96227 3.02742 4.42771 3.08189 3.89776C3.1343 3.38775 3.56394 3 4.07665 3H8.53942C9.0611 3 9.49513 3.40104 9.5363 3.92109C9.66467 5.54288 10.1317 7.09764 10.9002 8.50444C11.1427 8.9484 11.0155 9.50354 10.6039 9.79757L9.36556 10.6821ZM6.84425 10.0252L8.7442 8.66809C8.20547 7.50514 7.83628 6.27183 7.64727 5H5.00907C5.00303 5.16632 5 5.333 5 5.5C5 12.9558 11.0442 19 18.5 19C18.667 19 18.8337 18.997 19 18.9909V16.3527C17.7282 16.1637 16.4949 15.7945 15.3319 15.2558L13.9748 17.1558C13.4258 16.9425 12.8956 16.6915 12.3874 16.4061L12.3293 16.373C10.3697 15.2587 8.74134 13.6303 7.627 11.6707L7.59394 11.6126C7.30849 11.1044 7.05754 10.5742 6.84425 10.0252Z" fill="currentColor"></path></svg> +1 815-325-2866</a>
                </li>
                </ul>
            </div>
            <!--<a class="my-phone" href="tel:+130299420" style="">{{ $footer->contact }}</a>-->
            <div class="toggle-menu-container">
                <!-- hamburger -->
                <svg class="show-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                    height="16">
                    <path d="M3 4H21V6H3V4ZM9 11H21V13H9V11ZM3 18H21V20H3V18Z"></path>
                </svg>
                <!-- cancel -->
                <svg class="hide-menu" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                    height="16">
                    <path
                        d="M12.0007 10.5865L16.9504 5.63672L18.3646 7.05093L13.4149 12.0007L18.3646 16.9504L16.9504 18.3646L12.0007 13.4149L7.05093 18.3646L5.63672 16.9504L10.5865 12.0007L5.63672 7.05093L7.05093 5.63672L12.0007 10.5865Z">
                    </path>
                </svg>
            </div>
        </div>
    </header>
    <form class='form-feidlss' method="POST" action="{{ route('update_property_listing', $properties->id) }}"
        enctype="multipart/form-data" id="mainForm">
        @csrf
        @method('PUT')
        <input type="hidden" name="sequence" id="sequence">

        <!-- listing Hero -->
        <section class="listing-hero-container my">
              @if($properties->cover_image)
            <img src="{{ asset('property_managment_listing/' . $properties->cover_image) }}" alt="Image">
            @endif
            <div class="listing-hero-overlay"></div>
            <div class="listing-hero-content">
                <h1> {{ $properties->hero_heading }}
                </h1>
            </div>
        </section>

        <!--  -->
        @if ($properties->optional_message_start)
            <section class="">
                <div class="message-bar-container my-shaad">
                    <div class="pp-drop-1">
                        <p>{{ $properties->optional_message_start }}</p>
                    </div>
                </div>
            </section>
        @endif


        <section class="bg-image-container ">
            <?php $a = 0; ?>
            @foreach ($dataCatArray as $catArray)
                @if ($catArray == 'asset')
                    @if (
                        @$properties->properties_values[$a]->image_type == 'link' ||
                           @$properties->properties_values[$a]->image_type == 'link_with_image')
                        <div class="uploading-container" data-cat="asset" style="position:relative;">
                            <div class="file-uploading-bb b1">

                                <div class="tab-button-container my-link-tag ">
                                    <div class="my-view-tag">
                                        <a href="{{ @$properties->properties_values[$a]->link }}" target="_blank"
                                            style="
        background-color: black;
        color: white;
        padding: 11px 30px;
        border-radius: 5px;
    ">View</a>
                                    </div>
                                    <p>Link</p>



                                    <img width="100%" height="100%"
                                        src="{{ asset('property_managment_listing/' . @$properties->properties_values[$a]->image) }}"
                                        alt="Image">
                                </div>
                                <div class="file-select-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M13.0605 8.11073L14.4747 9.52494C17.2084 12.2586 17.2084 16.6908 14.4747 19.4244L14.1211 19.778C11.3875 22.5117 6.95531 22.5117 4.22164 19.778C1.48797 17.0443 1.48797 12.6122 4.22164 9.87849L5.63585 11.2927C3.68323 13.2453 3.68323 16.4112 5.63585 18.3638C7.58847 20.3164 10.7543 20.3164 12.7069 18.3638L13.0605 18.0102C15.0131 16.0576 15.0131 12.8918 13.0605 10.9392L11.6463 9.52494L13.0605 8.11073ZM19.778 14.1211L18.3638 12.7069C20.3164 10.7543 20.3164 7.58847 18.3638 5.63585C16.4112 3.68323 13.2453 3.68323 11.2927 5.63585L10.9392 5.98941C8.98653 7.94203 8.98653 11.1079 10.9392 13.0605L12.3534 14.4747L10.9392 15.8889L9.52494 14.4747C6.79127 11.741 6.79127 7.30886 9.52494 4.57519L9.87849 4.22164C12.6122 1.48797 17.0443 1.48797 19.778 4.22164C22.5117 6.95531 22.5117 11.3875 19.778 14.1211Z"
                                            fill="rgba(141,32,35,1)"></path>
                                    </svg>
                                    <input class="my-input" type="text" value="<?php if (@$properties->properties_values[$a]->image_type == 'link') {
                                        echo @$properties->properties_values[$a]->image;
                                    } ?>"
                                        name="links_old[]" placeholder="Your link herer...">
                                </div>

                            </div>
                            <!-- col 2-->
                            <div class="file-uploading-bb b2">
                                <h2>{{ @$properties->properties_values[$a]->heading }}</h2>
                                {{-- <input class="my-input" type="text" placeholder="Add Headline" name="headings_old[]"
                                value=""> --}}
                                <p>{{ @$properties->properties_values[$a]->description }}</p>

                            </div>
                        </div>
                    @endif
                    @if (@$properties->properties_values[$a]->image_type == 'image')
                        <div class="uploading-container" data-cat="asset" style="position:relative;">
                            <div class="file-uploading-bb b1">
                                <div class="tab-button-container my-image-tag"
                                    onclick="openModalPreviewImg({{ $a }})" style=" ">

                                    <div class="my-view-tag">
                                        <a href="#"
                                            style="
    background-color: black;
    color: white;
    padding: 11px 30px;
    border-radius: 5px;
">View</a>
                                    </div>

                                    <p style="">Image</p>
                                    <img width="100%" height="100%" id="imgSrc{{ $a }}"
                                        src="{{ asset('property_managment_listing/' . $properties->properties_values[$a]->image) }}"
                                        alt="Image">
                                    <!--<a style="width: 95%;" href="{{ $properties->properties_values[$a]->image_type == 'link' ? $properties->properties_values[$a]->image : asset('property_managment_listing/' . $properties->properties_values[$a]->image) }}" data-fancybox="group" data-caption="This image has a caption 2">-->
                                    <!--</a>-->
                                </div>
                                <div class="file-select-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M13.0605 8.11073L14.4747 9.52494C17.2084 12.2586 17.2084 16.6908 14.4747 19.4244L14.1211 19.778C11.3875 22.5117 6.95531 22.5117 4.22164 19.778C1.48797 17.0443 1.48797 12.6122 4.22164 9.87849L5.63585 11.2927C3.68323 13.2453 3.68323 16.4112 5.63585 18.3638C7.58847 20.3164 10.7543 20.3164 12.7069 18.3638L13.0605 18.0102C15.0131 16.0576 15.0131 12.8918 13.0605 10.9392L11.6463 9.52494L13.0605 8.11073ZM19.778 14.1211L18.3638 12.7069C20.3164 10.7543 20.3164 7.58847 18.3638 5.63585C16.4112 3.68323 13.2453 3.68323 11.2927 5.63585L10.9392 5.98941C8.98653 7.94203 8.98653 11.1079 10.9392 13.0605L12.3534 14.4747L10.9392 15.8889L9.52494 14.4747C6.79127 11.741 6.79127 7.30886 9.52494 4.57519L9.87849 4.22164C12.6122 1.48797 17.0443 1.48797 19.778 4.22164C22.5117 6.95531 22.5117 11.3875 19.778 14.1211Z"
                                            fill="rgba(141,32,35,1)"></path>
                                    </svg>
                                    <input class="my-input" type="text" value="<?php if ($properties->properties_values[$a]->image_type == 'link') {
                                        echo $properties->properties_values[$a]->image;
                                    } ?>"
                                        name="links_old[]" placeholder="Your link herer...">
                                </div>
                            </div>
                            <!-- col 2-->
                            <div class="file-uploading-bb b2">
                                <h2>{{ $properties->properties_values[$a]->heading }}</h2>
                                {{-- <input class="my-input" type="text" placeholder="Add Headline" name="headings_old[]"
                                value=""> --}}
                                <p>{{ $properties->properties_values[$a]->description }}</p>

                            </div>
                        </div>
                    @endif

                    @if (@$properties->properties_values[$a]->image_type == 'pdf')
                        <div class="uploading-container" data-cat="asset" style="position:relative;">
                            <div class="file-uploading-bb b1">
                                <div class="tab-button-container my-pdf-tag">
                                    <div class="my-view-tag">
                                        <a href="{{ route('download_pdf', @$properties->properties_values[$a]->id) }}"
                                            style="
    background-color: black;
    color: white;
    padding: 11px 30px;
    border-radius: 5px;
">Download</a>
                                    </div>

                                    <p style="">PDF</p>
                                    <img width="100%" height="100%" src="{{ asset('pdfthumnail.jpg') }}"
                                        alt="Image">
                                    <!--<a style="width: 95%;" href="{{ $properties->properties_values[$a]->image_type == 'link' ? $properties->properties_values[$a]->image : asset('property_managment_listing/' . $properties->properties_values[$a]->image) }}" data-fancybox="group" data-caption="This image has a caption 2">-->
                                    <!--</a>-->


                                </div>

                                <div class="file-select-2 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M13.0605 8.11073L14.4747 9.52494C17.2084 12.2586 17.2084 16.6908 14.4747 19.4244L14.1211 19.778C11.3875 22.5117 6.95531 22.5117 4.22164 19.778C1.48797 17.0443 1.48797 12.6122 4.22164 9.87849L5.63585 11.2927C3.68323 13.2453 3.68323 16.4112 5.63585 18.3638C7.58847 20.3164 10.7543 20.3164 12.7069 18.3638L13.0605 18.0102C15.0131 16.0576 15.0131 12.8918 13.0605 10.9392L11.6463 9.52494L13.0605 8.11073ZM19.778 14.1211L18.3638 12.7069C20.3164 10.7543 20.3164 7.58847 18.3638 5.63585C16.4112 3.68323 13.2453 3.68323 11.2927 5.63585L10.9392 5.98941C8.98653 7.94203 8.98653 11.1079 10.9392 13.0605L12.3534 14.4747L10.9392 15.8889L9.52494 14.4747C6.79127 11.741 6.79127 7.30886 9.52494 4.57519L9.87849 4.22164C12.6122 1.48797 17.0443 1.48797 19.778 4.22164C22.5117 6.95531 22.5117 11.3875 19.778 14.1211Z"
                                            fill="rgba(141,32,35,1)"></path>
                                    </svg>
                                    <input class="my-input" type="text" value="<?php if (@$properties->properties_values[$a]->image_type == 'link') {
                                        echo @$properties->properties_values[$a]->image;
                                    } ?>"
                                        name="links_old[]" placeholder="Your link herer...">
                                </div>
                            </div>
                            <!-- col 2-->
                            <div class="file-uploading-bb b2">
                                <h2>{{ @$properties->properties_values[$a]->heading }}</h2>
                                {{-- <input class="my-input" type="text" placeholder="Add Headline" name="headings_old[]"
                                value=""> --}}
                                <p>{{ @$properties->properties_values[$a]->description }}</p>

                            </div>
                        </div>
                    @endif

                    <?php $a++; ?>
                @elseif($catArray == 'devider')
                    <div data-cat="devider">
                        <center>
                            <div class="center-line"></div>

                        </center>
                    </div>
                @elseif($catArray == 'contact')
                    <div data-cat="contact">
                        <form method="post" action="{{ route('lead_submit') }}">
                            @csrf
                            <input type="hidden" name="lead_type" value="Property Listing">
                            <div data-cat="contact">
                                <section class="r">

                                    <!-- form -->
                                    <section>
                                        <div class="form-container new-mdl-style">
                                            <h4>CONTACT US</h4>
                                            <input type="text" placeholder="Name" name="name" required>
                                            <input type="email" placeholder="Email" name="email" required>
                                            <input type="tel" placeholder="Number" name="number" required>
                                            <input type="text" placeholder="Services" name="service" required>
                                            <div class="check-box-container">
                                                <div>
                                                    <label for="vehicle1"> Construction </label>
                                                    <input type="checkbox" id="vehicle1" value="Construction"
                                                        name="services[]" >
                                                </div>
                                                <div>
                                                    <label for="vehicle2"> Financing </label>
                                                    <input type="checkbox" id="vehicle2" value="Financing"
                                                        name="services[]">
                                                </div>
                                                <div>
                                                    <label for="vehicle3"> Buying and Selling </label>
                                                    <input type="checkbox" id="vehicle3" value="Buying and Selling"
                                                        name="services[]">
                                                </div>
                                                <div>
                                                    <label for="vehicle4"> Home Rehab </label>
                                                    <input type="checkbox" id="vehicle4" value="Home Rehab"
                                                        name="services[]" >
                                                </div>
                                                <div>
                                                    <label for="vehicle5"> Investment </label>
                                                    <input type="checkbox" id="vehicle5" value="Investment"
                                                        name="services[]" >
                                                </div>
                                                <div>
                                                    <label for="vehicle6"> Property Management </label>
                                                    <input type="checkbox" id="vehicle6" value="Property Management"
                                                        name="services[]">
                                                </div>
                                                <div>
                                                    <label for="vehicle6"> Wholesale </label>
                                                    <input type="checkbox" id="vehicle6" value="Wholesale"
                                                        name="services[]" >
                                                </div>
                                                       
                                            </div>
                                            <input type="text" placeholder="ZIP CODE" name="zip_code"
                                                id="">
                                            <!--<input type="text" placeholder="Office" name="office" id="">-->
                                            <input type="text" placeholder="How did you hear about us?"
                                                name="message" id="">
                                            <textarea name="" placeholder="Message" id="" cols="30" rows="10"></textarea>
                                            <button class="gbl-button-black"> Submit </button>

                                        </div>
                                    </section>

                                </section>
                            </div>
                        </form>
                    </div>
                @endif
            @endforeach





            @if ($properties->optional_message_end)
                <section class="" style="margin-top: 150px;">
                    <div class="message-bar-container my-shaad">
                        <div class="pp-drop-1">
                            <p>{{ $properties->optional_message_end }}</p>
                        </div>
                    </div>
                </section>
            @endif

            <!-- footer -->
            <footer class="footer-container">
            <div class="footer-cc" style="display:flex; flex-wrap:wrap; justify-content:space-between; width:100%">
                <div class="footer-head" style="width:100%">
                    <div class="content-sec">
                        <h4> &gt; Contact </h4>
                        <h3>Together With You We Can Do More</h3>
                    </div>
                    <a style="margin-left: 70px; margin-top: 60px;" href="https://rightlinksol.com/portfolios/nbx-capital/">
                        <img src="https://rightlinksol.com/portfolios/nbx-capital/public/home_rehab/364018.svg" alt="">
                    </a>
                </div>
                <div class="social-container" style="display:flex; flex-wrap:wrap; justify-content:space-between;width:100%; gap: 30px;">
                    <div class="social-box" style="margin-left:20px; margin-right:20px">
                        <h6>Location</h6>
                        <a hre="#">Chicago, IL, US</a>
                    </div>
                    <div class="social-box" style="margin-left:20px; margin-right:20px">
                        <h6>Contact Information</h6>
                        <a href=""></a>
                        <a href="tel:+1815-325-2866">+1 815-325-2866</a>
                        <a href="mailto:nbxcapitalinvestments@gmail.com">nbxcapitalinvestments@gmail.com</a>
                    </div>
                    <div class="social-box" style="margin-left:20px; margin-right:20px">
                        <h6>Social Media</h6>
                          <a href="https://www.instagram.com/accounts/login/" target="_blank"> <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-insta.png" alt="Image">Instagram</a>
                <a href="https://facebook.com/" target="_blank"> <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-face.png" alt="Image">facebook</a>
                    </div>
                </div>
            </div>
        </footer>
            <!-- footer End -->

        </section>
    </form>

    <!--<button onclick="openModalPreviewpdf()">OPen PDF</button>-->

    <!-- Modal structure Image  -->
    <?php
    $b = 0;
    $modalCount = 0;
    ?>

    @foreach ($dataCatArray as $catArray)
        @if ($catArray == 'asset')
            @if (@$properties->properties_values[$b]->image_type == 'image')
                <div id="perviewModel{{ $b }}" class="modal modalPreview">
                    <div class="modal-content">
                        <!-- Close button -->
                        <span class="close-btn" onclick="closeModalPreviewImg({{ $b }})"
                            id="closeModal">&times;</span>
                        <section>
                            <section class="my-mg-h" style="  ">

                                <img id="appendSrc{{ $b }}" src=""
                                    style="height: 100%;width: 100%; object-fit: contain;">

                            </section>

                        </section>
                    </div>
                </div>
                <?php $modalCount = $modalCount + 1; ?>
            @endif
            <?php $b = $b + 1; ?>
        @endif
    @endforeach




</body>


    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- aos -->
    <script src="{{ asset('website/assets/aos/aos.js') }}"></script>


    <!-- scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/script.js/2.0.2/script.min.js" integrity="sha512-UWtTDM6wtl/qutDD6i1JOGZGiEd92dveVzuLl8sMBkMHlOHcbZdexM7ZrKkeaugW7vhqDnWc2pPD/ohEV+BBbg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('website/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    function openModalPreviewImg(arg) {
        console.log("a", arg);
        var imageElement = document.getElementById('imgSrc' + arg);
        var imageUrl = imageElement.src;
        var appendImage = document.getElementById('appendSrc' + arg);
        appendImage.src = imageUrl;
        var modalPreviews = document.getElementsByClassName('modalPreview');
        for (var i = 0; i < modalPreviews.length; i++) {
            modalPreviews[i].style.display = 'none';
        }
        $("#perviewModel" + arg).css("display", "block");
    }

    function closeModalPreviewImg(arg2) {
        $("#perviewModel" + arg2).css("display", "none");

    }
</script>

</html>
