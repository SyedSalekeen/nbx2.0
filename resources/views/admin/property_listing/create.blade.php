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
</head>
<style>
   header {
        margin-top: 3rem;
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

    .uploading-container {
        height: auto;
    }

    .file-select-3 {
        display: none;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-size: 35px;
        font-weight: 600;
        color: black;
        border: 1px dashed;
        padding: 1rem;
        padding-bottom: 2.2rem;
    }

    .file-select-3.active {
        display: flex;
    }

    label.my-btn.active {
        display: flex;
        color: white;
    }

    .file-uploading-bb.b2 {
        margin-top: 0;
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
 
 
 .file-select-3 svg {
        width: 150px !important;
    }

 .inputStyle {
        width: auto;
        padding: 10px;
        margin-top: 70px;
    }
.new-mdl-style .check-box-container  {
    flex-wrap: wrap;
}

.new-mdl-style .check-box-container div  {
    margin-top: 5px;
}

.pp-drop-1 input {
    margin-top: 0;
}
@media only screen and (min-width: 1024px){
    .inputStyle {
        width: 100%;
        padding: 10px;
        margin-top: 0;
    }
}


</style>

<body>

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
                    <li class="sub-nav" style="text-align:center"> <a href="javaScript:void(0)" style=""> Services </a>
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
                    <!--<li><a href="#">Case Studies</a></li>-->
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
    <form method="POST" action="{{ route('save_property_listing') }}" enctype="multipart/form-data" id="mainForm">
        @csrf
        <input type="hidden" name="sequence" id="sequence">
        <section class="bg-image-container ">



            <!-- listing Hero -->
            <section class="listing-hero-container my">
                <!--<img src="{{ asset('website/assets/images/img-home.png') }}" alt="Image">-->
                <img id="imagePreview" src="" alt="Image Preview" style="display: none;">
                <div class="listing-hero-overlay"></div>
                <div class="listing-hero-content">
                    <div
                        style="position: absolute;z-index:5;top: 38%;left: 50%;transform: translateX(-50%);color: white;">
                        <!--<input type="file" id="imageInput" accept="image/*" multiple style="position:relative; z-index:5;">-->
                        <!--    <div id="imagePreview" ></div>-->

                        <label for="imageInput"
                            style="
    border: 1px solid white;
    padding: 15px 30px;
    background-color: #ffffff33;
    cursor:pointer;
">
                            Upload Cover </label>

                        <input type="file" id="imageInput" required name="uploadCover" accept="image/*" multiple
                            style="display:none">


                    </div>
                    <h1>
                        <input type="text" name="hero_heading" value="" placeholder="Include Heading"
                            class="inputStyle">

                    </h1>
                </div>
            </section>

            <!--  -->
            <section class="">
                <div class="message-bar-container my-shaad">
                    <div class="pp-drop-1">
                         <input type="text" name="optional_message_start" class="inputStyle" value=""
                                placeholder"Include an opening message (optinal)"> 
                    </div>
                </div>
            </section>
            <!-- upload section -->
            <section>
                <div class="uploading-container">
                    <!-- col-1 -->
                    <div class="file-uploading-bb b1">
                        <div class="tab-button-container">
                            <label class="my-btn btn1 active">
                                <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-1.png" style="width: 40px; margin-right: 9px; ">
                                File
                            </label>
                            <label class="my-btn btn2 " for="">
                                <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-2.png" style="width: 40px; margin-right: 9px; ">
                                Link
                            </label>
                            <label class="my-btn btn3 " for="">
                                <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-3.png" style="width: 40px; margin-right: 9px; ">
                                PDF
                            </label>

                        </div>
                        <div class="file-select-1 active" style=" position: relative; padding: 65px 10px; ">

                        <div class=""   style="display:flex; flex-direction:column; align-items:center; z-index:2">
                            
                            <label for="imageInput2" style=" display: flex; flex-direction: column;align-items: center;">
                                        <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-1.png" style="width: 150px; margin-right: 9px; ">
                                        <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21 15V18H24V20H21V23H19V20H16V18H19V15H21ZM21.0082 3C21.556 3 22 3.44495 22 3.9934L22.0007 13.3417C21.3749 13.1204 20.7015 13 20 13V5H4L4.001 19L13.2929 9.70715C13.6528 9.34604 14.22 9.31823 14.6123 9.62322L14.7065 9.70772L18.2521 13.2586C15.791 14.0069 14 16.2943 14 19C14 19.7015 14.1204 20.3749 14.3417 21.0007L2.9918 21C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082ZM8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7Z" fill="currentColor"></path></svg>-->
                                     
                                            <input type="file" name="images_old[]" id="imageInput2" multiple="" class="inputFileClass" style="width:0;">
                                        
                                        
                                            <p> Upload Image </p>
                                        </label>
                                        
                                        
                            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21 15V18H24V20H21V23H19V20H16V18H19V15H21ZM21.0082 3C21.556 3 22 3.44495 22 3.9934L22.0007 13.3417C21.3749 13.1204 20.7015 13 20 13V5H4L4.001 19L13.2929 9.70715C13.6528 9.34604 14.22 9.31823 14.6123 9.62322L14.7065 9.70772L18.2521 13.2586C15.791 14.0069 14 16.2943 14 19C14 19.7015 14.1204 20.3749 14.3417 21.0007L2.9918 21C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082ZM8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7Z" fill="currentColor"></path></svg>-->
                                        
                            <!--<input type="file" name="images_old[]" id="imageInput2" multiple-->
                            <!--    style="position:relative; z-index:5;">-->
                            <!--{{-- <label for="actual-btn">Click here to upload</label>-->
                            <!--<input type="file" id="actual-btn" name="images_old[]" /> --}}-->
                        </div>
                        <img id="imagePreview2" src="" alt="Image Preview"
                            style="display:none; width: 100%;height: 100%;object-fit: cover;object-position: center top;position: absolute;z-index: 0;">
                    </div>
                        <div class="file-select-2 ">
                            <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-2.png" style="width: 150px; margin-right: 9px; ">
                            <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">-->
                            <!--    <path-->
                            <!--        d="M13.0605 8.11073L14.4747 9.52494C17.2084 12.2586 17.2084 16.6908 14.4747 19.4244L14.1211 19.778C11.3875 22.5117 6.95531 22.5117 4.22164 19.778C1.48797 17.0443 1.48797 12.6122 4.22164 9.87849L5.63585 11.2927C3.68323 13.2453 3.68323 16.4112 5.63585 18.3638C7.58847 20.3164 10.7543 20.3164 12.7069 18.3638L13.0605 18.0102C15.0131 16.0576 15.0131 12.8918 13.0605 10.9392L11.6463 9.52494L13.0605 8.11073ZM19.778 14.1211L18.3638 12.7069C20.3164 10.7543 20.3164 7.58847 18.3638 5.63585C16.4112 3.68323 13.2453 3.68323 11.2927 5.63585L10.9392 5.98941C8.98653 7.94203 8.98653 11.1079 10.9392 13.0605L12.3534 14.4747L10.9392 15.8889L9.52494 14.4747C6.79127 11.741 6.79127 7.30886 9.52494 4.57519L9.87849 4.22164C12.6122 1.48797 17.0443 1.48797 19.778 4.22164C22.5117 6.95531 22.5117 11.3875 19.778 14.1211Z"-->
                            <!--        fill="rgba(141,32,35,1)"></path>-->
                            <!--</svg>-->
                            <input class="my-input" type="text" name="links[]" placeholder="Your link here...">
                        </div>
                        <div class="file-select-3 ">
                            <label for="actual-btn1" style=" display: flex; flex-direction: column;align-items: center;">
                                <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-3.png" style="width: 150px; margin-right: 9px; ">
                                    <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5 4H15V8H19V20H5V4ZM3.9985 2C3.44749 2 3 2.44405 3 2.9918V21.0082C3 21.5447 3.44476 22 3.9934 22H20.0066C20.5551 22 21 21.5489 21 20.9925L20.9997 7L16 2H3.9985ZM10.4999 7.5C10.4999 9.07749 10.0442 10.9373 9.27493 12.6534C8.50287 14.3757 7.46143 15.8502 6.37524 16.7191L7.55464 18.3321C10.4821 16.3804 13.7233 15.0421 16.8585 15.49L17.3162 13.5513C14.6435 12.6604 12.4999 9.98994 12.4999 7.5H10.4999ZM11.0999 13.4716C11.3673 12.8752 11.6042 12.2563 11.8037 11.6285C12.2753 12.3531 12.8553 13.0182 13.5101 13.5953C12.5283 13.7711 11.5665 14.0596 10.6352 14.4276C10.7999 14.1143 10.9551 13.7948 11.0999 13.4716Z" fill="currentColor"></path></svg>-->
                                    <p>Upload PDF</p>
                                    <input type="file" id="actual-btn1" name="pdf_old[]" class="inputFileClass" />
                                    </label>
                            <!--<svg width="95px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">-->
                            <!--    <path-->
                            <!--        d="M12 16H8V8H12C14.2091 8 16 9.79086 16 12C16 14.2091 14.2091 16 12 16ZM10 10V14H12C13.1046 14 14 13.1046 14 12C14 10.8954 13.1046 10 12 10H10ZM15 4H5V20H19V8H15V4ZM3 2.9918C3 2.44405 3.44749 2 3.9985 2H16L20.9997 7L21 20.9925C21 21.5489 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918Z"-->
                            <!--        fill="currentColor"></path>-->
                            <!--</svg>-->
                            <!--<label for="actual-btn1">Click here to upload</label>-->
                            <!--<input type="file" id="actual-btn1" name="pdf_old[]" />-->
                        </div>
                    </div>
                    <!-- col 2-->
                    <div class="file-uploading-bb b2">
                        <input class="my-input" type="text" required placeholder="Add Headline"
                            name="headings[]">
                        <textarea class="my-input" required placeholder="Type Something here" name="descriptions[]" id=""
                            cols="30" rows="10"></textarea>
                    </div>
                </div>
            </section>
            <div id="appendSections">

            </div>


            <!-- buttons -->
            <section>
                <div class="btns-container">
                    <button type="button" id="addAssetButton">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="rgba(141,32,35,1)"></path>
                        </svg>
                        Add Asset
                    </button>
                    <button type="button" id="addDividerButton">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="rgba(141,32,35,1)"></path>
                        </svg>
                        Add Divider
                    </button>
                    <button type="button" id="addContactButton">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="rgba(141,32,35,1)"></path>
                        </svg>
                        Add Contact Form
                    </button>
                    <button type="button" id="submitButton">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path d="M11 11V5H13V11H19V13H13V19H11V13H5V11H11Z" fill="rgba(141,32,35,1)"></path>
                        </svg>
                        Save
                    </button>
                </div>
            </section>
            <section class="" style="margin-top: 150px;">
                <div class="message-bar-container my-shaad">
                    <div class="pp-drop-1">
                        <p> <input type="text" name="optional_message_end" class="inputStyle" value=""
                                placeholder="Include an opening message at the end (optinal)"> </p>
                    </div>
                </div>
            </section>

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

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- aos -->
    <script src="{{ asset('website/assets/aos/aos.js') }}"></script>


    <script>
      

      

        $('.tab-button-container label').on('click', function() {
            var $this = $(this);
            var $fileUploadingBB = $this.closest('.file-uploading-bb');

            $this.addClass('active').siblings().removeClass('active');

            $fileUploadingBB.find('.file-select-1').toggleClass('active', $this.hasClass('btn1'));
            $fileUploadingBB.find('.file-select-2').toggleClass('active', $this.hasClass('btn2'));
            $fileUploadingBB.find('.file-select-3').toggleClass('active', $this.hasClass('btn3'));
        });




        document.getElementById('imageInput').addEventListener('change', function(event) {
            const files = event.target.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                // Check if the file is an image
                if (!file.type.startsWith('image/')) {
                    console.warn('Selected file is not an image:', file.name);
                    continue;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    // Set the image source directly to the image tag
                    const imgElement = document.getElementById('imagePreview');
                    imgElement.src = e.target.result;
                    imgElement.style.display = "block"; // Show the image

                    // Optionally, you can set the width and height if desired
                    imgElement.width = 150; // Adjust as needed
                };

                // Read the file as a data URL
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('imageInput2').addEventListener('change', function(event) {
            const files = event.target.files;

            for (let i = 0; i < files.length; i++) {
                const file = files[i];

                // Check if the file is an image
                if (!file.type.startsWith('image/')) {
                    console.warn('Selected file is not an image:', file.name);
                    continue;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    // Set the image source directly to the image tag
               
                    const imgElement = document.getElementById('imagePreview2');
                    console.log("imgEleme", imgElement)
                    imgElement.src = e.target.result;
                    imgElement.style.display = "block"; // Show the image

                    // Optionally, you can set the width and height if desired
                    imgElement.width = 150; // Adjust as needed
                };

                // Read the file as a data URL
                reader.readAsDataURL(file);
            }
        });
    </script>

    <!-- scripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/script.js/2.0.2/script.min.js"
        integrity="sha512-UWtTDM6wtl/qutDD6i1JOGZGiEd92dveVzuLl8sMBkMHlOHcbZdexM7ZrKkeaugW7vhqDnWc2pPD/ohEV+BBbg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('website/main.js') }}"></script>
    <script>
        var countCat = 1;
        var assetValue = 1;
        var dividerValue = 0;
        var contactFormValue = 0;
        var dataCatArray = [];

        // Function to remove the section
        function removeSection(section) {
            assetValue = assetValue - 1;
            section.remove();
        }

        function removeSectionDivider(section) {
            dividerValue = dividerValue - 1;
            section.remove();
        }

        function removeContactSection(section) {
            contactFormValue = contactFormValue - 1;
            section.remove();
        }

        // Add asset button click event
        $("#addAssetButton").click(function(e) {
            countCat = countCat + 1;
            assetValue = assetValue + 1;
            var appendSection = document.getElementById('appendSections');
            var newSection = document.createElement('div');
            newSection.setAttribute('data-cat', 'asset');


            newSection.innerHTML = `
        <section>
            <div class="uploading-container">
                <!-- col-1 -->
                <div class="file-uploading-bb b1">
                    <div class="tab-button-container">
                        <label class="my-btn btn1 active">
                            <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-1.png" style="width: 40px; margin-right: 9px; ">
                            File
                        </label>
                        <label class="my-btn btn2 " for="">
                            
                            <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-2.png" style="width: 40px; margin-right: 9px; ">
                             Link
                                            </label>
                                            <label class="my-btn btn3 " for="">
                                            <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-3.png" style="width: 40px; margin-right: 9px; ">
                                        PDF
                                    </label>
                                        </div>
                                        <div class="file-select-1 active" style=" position: relative; padding: 65px 10px; ">
                                        <label for="imageInput2${countCat}" style=" display: flex; flex-direction: column;align-items: center;">
                                        
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21 15V18H24V20H21V23H19V20H16V18H19V15H21ZM21.0082 3C21.556 3 22 3.44495 22 3.9934L22.0007 13.3417C21.3749 13.1204 20.7015 13 20 13V5H4L4.001 19L13.2929 9.70715C13.6528 9.34604 14.22 9.31823 14.6123 9.62322L14.7065 9.70772L18.2521 13.2586C15.791 14.0069 14 16.2943 14 19C14 19.7015 14.1204 20.3749 14.3417 21.0007L2.9918 21C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082ZM8 7C9.10457 7 10 7.89543 10 9C10 10.1046 9.10457 11 8 11C6.89543 11 6 10.1046 6 9C6 7.89543 6.89543 7 8 7Z" fill="currentColor"></path></svg>
                                        <input type="file" name="images_old[]" id="imageInput2${countCat}"
                                            multiple class="inputFileClass" style="width:0;">
                                            <p> Upload Image </p>
                                        </label>

<div class="">
                 
           

   </div>
   <img id="imagePreview2${countCat}" src="" alt="Image Preview"
               style="display: none;width: 100%;height: 100%;object-fit: cover;object-position: center top;position: absolute;z-index: 0;">
</div>
                    <div class="file-select-2 ">
                        <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-2.png" style="width: 150px; margin-right: 9px; ">
                        <input class="my-input" type="text" name="links[]" placeholder="Your link herer...">
                    </div>
                                            <div class="file-select-3 ">
                                            <label for="actual-btn1" style=" display: flex; flex-direction: column;align-items: center;">
                                    <img src="https://rightlinksol.com/portfolios/nbx-capital/public/website/assets/images/icon-3.png" style="width: 150px; margin-right: 9px; ">
                                    <p>Upload PDF</p>
                                    <input type="file" id="actual-btn1" name="pdf_old[]" class="inputFileClass" />
                                    </label>
                                   
                                </div>
                    <!-- Add close button -->
                    <div class="close-button" onclick="removeSection(this.parentNode.parentNode)">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z">
                            </path>
                        </svg>
                    </div>
                </div>
                <!-- col 2-->
                <div class="file-uploading-bb b2">
                    <input class="my-input" type="text" required placeholder="Add Headline" name="headings[]">
                    <textarea class="my-input" required placeholder="Type Something here" name="descriptions[]" id="" cols="30"
                        rows="10"></textarea>
                </div>
            </div>
        </section>
    `;
            appendSection.append(newSection);


            $('.tab-button-container label').on('click', function() {
                var $this = $(this);
                var $fileUploadingBB = $this.closest('.file-uploading-bb');

                $this.addClass('active').siblings().removeClass('active');

                $fileUploadingBB.find('.file-select-1').toggleClass('active', $this.hasClass('btn1'));
                $fileUploadingBB.find('.file-select-2').toggleClass('active', $this.hasClass('btn2'));
                $fileUploadingBB.find('.file-select-3').toggleClass('active', $this.hasClass('btn3'));
            });

            document.getElementById('imageInput2' + countCat).addEventListener('change', function(event) {
                const files = event.target.files;

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];

                    // Check if the file is an image
                    if (!file.type.startsWith('image/')) {
                        console.warn('Selected file is not an image:', file.name);
                        continue;
                    }

                    const reader = new FileReader();

                    reader.onload = function(e) {
                        // Set the image source directly to the image tag
                        console.log("countCats", countCat)
                        const imgElement = document.getElementById('imagePreview2' + countCat);
                        console.log("imgEleme", imgElement)
                        imgElement.src = e.target.result;
                        imgElement.style.display = "block"; // Show the image

                        // Optionally, you can set the width and height if desired
                        imgElement.width = 150; // Adjust as needed
                    };

                    // Read the file as a data URL
                    reader.readAsDataURL(file);
                }
            });


        });

        $("#addDividerButton").click(function(e) {
            dividerValue = dividerValue + 1;

            var appendSection = document.getElementById('appendSections');
            var newSection = document.createElement('div');
            newSection.setAttribute('data-cat', 'devider');

            newSection.innerHTML = `
            <div data-cat="devider">
                        <center>
                            <div class="center-line"></div>

                        </center>
                    </div>
            <!-- Add close button for divider -->
            <div class="close-button" onclick="removeSectionDivider(this.parentNode)">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z">
                    </path>
                </svg>
            </div>
    `;
            appendSection.append(newSection);
        });

        $("#addContactButton").click(function(e) {
            contactFormValue = contactFormValue + 1;
            if (contactFormValue > 1) {
                contactFormValue = contactFormValue - 1;
                alert("Can't add more than one form")
                return false;
            }
            var appendSection = document.getElementById('appendSections');
            var newSection = document.createElement('div');
            newSection.setAttribute('data-cat', 'contact');

            newSection.innerHTML = `
            <div data-cat="contact">

            <section class="bg-image-container">

    <div class="form-container new-mdl-style 123">
        <h4>CONTACT US </h4>
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="tel" placeholder="Number">
        <input type="text" placeholder="Services">
        <div class="check-box-container">
            <div>
                <label for="vehicle1"> Construction </label>
                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
            </div>
            <div>
                <label for="vehicle2"> Financing </label>
                <input type="checkbox" id="vehicle2" name="vehicle2" value="Bike">
            </div>
            <div>
                <label for="vehicle3"> Buying and Selling </label>
                <input type="checkbox" id="vehicle3" name="vehicle3" value="Bike">
            </div>
            <div>
                <label for="vehicle4"> Home Rehab </label>
                <input type="checkbox" id="vehicle4" name="vehicle4" value="Bike">
            </div>
            <div>
                <label for="vehicle5"> Investment </label>
                <input type="checkbox" id="vehicle5" name="vehicle5" value="Bike">
            </div>
            <div>
                <label for="vehicle6"> Property Management </label>
                <input type="checkbox" id="vehicle6" name="vehicle6" value="Bike">
            </div>
                  <div>
                                                    <label for="vehicle7"> Wholesale </label>
                                                    <input type="checkbox" id="vehicle7" value="Wholesale"
                                                        name="services[]" >
                                                </div>
        </div>
        <input type="text" placeholder="ZIP CODE" name="" id="">
      
        <input type="text" placeholder="How did you hear about us?" name="" id="">
        <textarea name="" placeholder="Message" id="" cols="30" rows="10"></textarea>
        <div class="close-button" onclick="removeContactSection(this.parentNode)">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41Z">
                        </path>
                    </svg>
                </div>
    </div>
</div>

</section>


    `;
            appendSection.append(newSection);


            
        });

        $("#previewButton").click(function(e) {
            $("#appendSections > div").each(function() {
                var dataCatValue = $(this).data('cat'); // Get the value of data-cat attribute
                dataCatArray.push(dataCatValue); // Push the value into the array
            });
            console.log(dataCatArray);
            var form = document.createElement('form');
            form.setAttribute('method', 'POST');
            form.setAttribute('action', '{{ route('listing-list') }}');

            // Add CSRF token input
            var csrfTokenInput = document.createElement('input');
            csrfTokenInput.setAttribute('type', 'hidden');
            csrfTokenInput.setAttribute('name', '_token');
            csrfTokenInput.setAttribute('value', '{{ csrf_token() }}'); // Add the CSRF token
            form.appendChild(csrfTokenInput);

            // Create an input field for the dataCatArray
            var input = document.createElement('input');
            input.setAttribute('type', 'hidden');
            input.setAttribute('name', 'dataCatArray');
            input.setAttribute('value', JSON.stringify(dataCatArray));

            // Append the input field to the form
            form.appendChild(input);

            // Append the form to the body and submit it
            document.body.appendChild(form);
            form.submit();
        })
        $("#submitButton").click(function(e) {
            $("#appendSections > div").each(function() {
                var dataCatValue = $(this).data('cat'); // Get the value of data-cat attribute
                dataCatArray.push(dataCatValue); // Push the value into the array
            });
            dataCatArray.unshift("asset");
            console.log("data", dataCatArray);
            $("#sequence").val(JSON.stringify(dataCatArray));
            $("#mainForm").submit();
            console.log(dataCatArray);
        })
    </script>
</body>

</html>
