<?php $footer = App\Models\Footer::where('id','1')->first(); ?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        whitesmoke: 'whitesmoke',
                    }
                }
            }
        }
    </script>
    <style>
        .addButtonCss {
            background: #932425 !important;
            color: white !important;
            padding: 10px !important;
            border-radius: 16px !important;
        }
    </style>
    <!-- data table -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
    <title>Dashboard</title>
        <link rel="icon" type="image/x-icon" href="{{ asset('home_rehab/'.$footer->logo) }}">
</head>

<body>
    <section class="bg-whitesmoke h-full">

        <div class="mx-auto flex relative">
            <div onclick="" class="opemsidebar absolute z-[20] right-[40px] top-[30px] lg:hidden">
                <svg class="fill-black w-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3 4H21V6H3V4ZM3 11H15V13H3V11ZM3 18H21V20H3V18Z" fill="currentColor"></path></svg>
            </div>
            <div onclick="" class="opemsidebar sfd-vds-vsdf absolute z-[20] right-[40px] top-[35px] bg-whitesmoke hidden">
                <svg class="fill-black w-[30px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 22C6.47715 22 2 17.5228 2 12C2 6.47715 6.47715 2 12 2C17.5228 2 22 6.47715 22 12C22 17.5228 17.5228 22 12 22ZM12 10.5858L9.17157 7.75736L7.75736 9.17157L10.5858 12L7.75736 14.8284L9.17157 16.2426L12 13.4142L14.8284 16.2426L16.2426 14.8284L13.4142 12L16.2426 9.17157L14.8284 7.75736L12 10.5858Z" fill="currentColor"></path></svg>
            </div>
            <!-- sideBar -->
            <div class="side-dar-bar lg:left-0 -left-[300px] absolute lg:relative h-screen lg:w-[20%] z-[20] w-full bg-white px-4 h-full py-8 lg:flex items-center flex-col lg:relative absolute lg:max-w-auto max-w-[300px] ">
                
                <img src="{{ asset('admin/assets/images/logo.svg') }}" alt="Image">
                <div class="mt-10">
                    <a href="{{ route('dashboard') }}">

                        <div class="flex items-center <?php if (request()->is('dashboard*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M10 8H14V6.5C14 4.567 15.567 3 17.5 3C19.433 3 21 4.567 21 6.5C21 8.433 19.433 10 17.5 10H16V14H17.5C19.433 14 21 15.567 21 17.5C21 19.433 19.433 21 17.5 21C15.567 21 14 19.433 14 17.5V16H10V17.5C10 19.433 8.433 21 6.5 21C4.567 21 3 19.433 3 17.5C3 15.567 4.567 14 6.5 14H8V10H6.5C4.567 10 3 8.433 3 6.5C3 4.567 4.567 3 6.5 3C8.433 3 10 4.567 10 6.5V8ZM8 8V6.5C8 5.67157 7.32843 5 6.5 5C5.67157 5 5 5.67157 5 6.5C5 7.32843 5.67157 8 6.5 8H8ZM8 16H6.5C5.67157 16 5 16.6716 5 17.5C5 18.3284 5.67157 19 6.5 19C7.32843 19 8 18.3284 8 17.5V16ZM16 8H17.5C18.3284 8 19 7.32843 19 6.5C19 5.67157 18.3284 5 17.5 5C16.6716 5 16 5.67157 16 6.5V8ZM16 16V17.5C16 18.3284 16.6716 19 17.5 19C18.3284 19 19 18.3284 19 17.5C19 16.6716 18.3284 16 17.5 16H16ZM10 10V14H14V10H10Z">
                                </path>
                            </svg>
                            Dashboard
                        </div>
                    </a>
                    <a href="{{ route('home_page') }}">

                        <div class="flex items-center <?php if (request()->is('home-page*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M21 19.9997C21 20.552 20.5523 20.9997 20 20.9997H4C3.44772 20.9997 3 20.552 3 19.9997V9.48882C3 9.18023 3.14247 8.88893 3.38606 8.69947L11.3861 2.47725C11.7472 2.19639 12.2528 2.19639 12.6139 2.47725L20.6139 8.69947C20.8575 8.88893 21 9.18023 21 9.48882V19.9997ZM19 18.9997V9.97791L12 4.53346L5 9.97791V18.9997H19Z">
                                </path>
                            </svg>
                            Home Page
                        </div>
                    </a>
                    {{-- <a href="{{ route('services') }}">

                        <div class="flex items-center <?php if (request()->is('services*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M13 15V19H16V21H8V19H11V15H4C3.44772 15 3 14.5523 3 14V4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V14C21 14.5523 20.5523 15 20 15H13ZM5 13H19V5H5V13ZM8 8H16V10H8V8Z">
                                </path>
                            </svg>
                            Services
                        </div>
                    </a> --}}

                    <a href="{{ url('all-services') }}">
                        <div class="flex items-center <?php if (request()->is('all-services*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M15 4H5V20H19V8H15V4ZM3 2.9918C3 2.44405 3.44749 2 3.9985 2H16L20.9997 7L21 20.9925C21 21.5489 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918ZM12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5ZM7.52746 17C7.77619 14.75 9.68372 13 12 13C14.3163 13 16.2238 14.75 16.4725 17H7.52746Z">
                                </path>
                            </svg>
                            All Services
                        </div>
                    </a>
                    {{-- <a href="{{ url('home-rehabs') }}">
                        <div class="flex items-center <?php if (request()->is('home-rehabs*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z">
                                </path>
                            </svg>
                            Home Rehabs
                        </div>
                    </a> --}}


                    <a href="{{ url('properties-listing') }}">

                        <div class="flex items-center <?php if (request()->is('properties-listing*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z">
                                </path>
                            </svg>
                            Properties Listing
                        </div>
                    </a>


            

                    <a href="{{ route('contact_us_message') }}">

                        <div class="flex items-center <?php if (request()->is('contact_us_message*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z">
                                </path>
                            </svg>
                            Leads Message
                        </div>
                    </a>


                    <a href="{{ route('testemonials') }}">

                        <div class="flex items-center <?php if (request()->is('testemonials*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z">
                                </path>
                            </svg>
                            Testimonials
                        </div>
                    </a>
                    <a href="{{ route('footer') }}">

                        <div class="flex items-center <?php if (request()->is('footer*')) {
                            echo 'text-[#8d2023]';
                        } else {
                            echo 'text-[#aaaaaa]';
                        } ?> font-semibold mt-5 text-xl">
                            <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z">
                                </path>
                            </svg>
                            Footer
                        </div>
                    </a>

                    {{-- <div class="flex items-center text-[#aaaaaa] font-semibold mt-5 text-xl">
                    <svg  class="fill-[#aaaaaa] w-6 mr-2"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M15 4H5V20H19V8H15V4ZM3 2.9918C3 2.44405 3.44749 2 3.9985 2H16L20.9997 7L21 20.9925C21 21.5489 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5447 3 21.0082V2.9918ZM12 11.5C10.6193 11.5 9.5 10.3807 9.5 9C9.5 7.61929 10.6193 6.5 12 6.5C13.3807 6.5 14.5 7.61929 14.5 9C14.5 10.3807 13.3807 11.5 12 11.5ZM7.52746 17C7.77619 14.75 9.68372 13 12 13C14.3163 13 16.2238 14.75 16.4725 17H7.52746Z"></path></svg>
                    User
                </div>
                <div class="flex items-center text-[#aaaaaa] font-semibold mt-5 text-xl">
                    <svg class="fill-[#aaaaaa] w-6 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z"></path></svg>
                    Message
                </div> --}}

                </div>
            </div>
            <div class="lg:w-[80%] w-full lg:px-10 px-4 py-[3rem]">
                <!-- dashboard header -->
                <div class="flex justify-between items-center">
                    <div class="">
                    </div>
                    <!--<div class="flex items-center">-->
                    <!--    <svg class="fill-black w-[45px] pr-5 b-r border-gray-400 mr-5"-->
                    <!--        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">-->
                    <!--        <path-->
                    <!--            d="M20 17H22V19H2V17H4V10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10V17ZM18 17V10C18 6.68629 15.3137 4 12 4C8.68629 4 6 6.68629 6 10V17H18ZM9 21H15V23H9V21Z">-->
                    <!--        </path>-->
                    <!--    </svg>-->
                    <!--    <div class="flex items-center">-->
                    <!--        <img class="w-12 h-12 rounded-full overflow-hidden object-cover"-->
                    <!--            src="https://cdn.hswstatic.com/gif/play/0b7f4e9b-f59c-4024-9f06-b3dc12850ab7-1920-1080.jpg"-->
                    <!--            alt="">-->
                    <!--        <div class="ml-4">-->
                    <!--            <p class="text-base font-semibold">Talanda Herron</p>-->
                    <!--            <p class="text-[13px] text-gray-800">Admin</p>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->
                </div>
                @yield('content')


            </div>
        </div>

    </section>

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <!-- data tabel -->
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('admin/main.js') }}"></script>
    @yield('script')
    
    
    <script>
        $('.opemsidebar').on('click', () => {
            $('.side-dar-bar').toggleClass('-left-[300px]');
            $('.sfd-vds-vsdf').toggleClass('hidden')
        })
    </script>
</body>

</html>
