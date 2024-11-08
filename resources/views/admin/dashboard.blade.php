@extends('admin.layout.master')
<?php 
$construction = App\Models\LeadsContact::where("lead_type",'construction')->get();
$construction = count($construction);

$financing = App\Models\LeadsContact::where("lead_type",'financing')->get();
$financing = count($financing);


$home_buying_and_selling = App\Models\LeadsContact::where("lead_type",'home buying and selling')->get();
$home_buying_and_selling = count($home_buying_and_selling);

$home_rehab = App\Models\LeadsContact::where("lead_type",'home rehab')->get();
$home_rehab = count($home_rehab);

$investmentC = App\Models\LeadsContact::where("lead_type",'investment')->get();
$investmentC = count($investmentC);

$property_management = App\Models\LeadsContact::where("lead_type",'property management')->get();
$property_management = count($property_management);
$wholesale = App\Models\LeadsContact::where("lead_type",'wholesale')->get();
$wholesale = count($wholesale);

$contact_us_form = App\Models\LeadsContact::where("lead_type",'contact us form')->get();
$contact_us_form = count($contact_us_form);
?>
@section('content')
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Lead Registered </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 grid-1 gap-4 mb-10">
            <a href="{{ route('contact_us_message') }}">
            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{ $construction }}</p>
                    <h5 class="text-xl font-semibold">Construction</h5>
                    <br>
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </a>
        <a href="{{ route('contact_us_message') }}">

            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{ $financing }}</p>
                    <h5 class="text-xl font-semibold">Financing</h5>
                     <br>
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </a>
        <a href="{{ route('contact_us_message') }}">

            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{ $home_buying_and_selling }}</p>
                    <h5 class="text-xl font-semibold">Home Buying and Selling</h5>
                    
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </a>
        <a href="{{ route('contact_us_message') }}">

            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{ $home_rehab }}</p>
                    <h5 class="text-xl font-semibold">Home Rehab</h5>
                     <br>
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </a>
        <a href="{{ route('contact_us_message') }}">

    
            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{$investmentC}}</p>
                    <h5 class="text-xl font-semibold">Investment</h5>
                     <br>
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </a>
        <a href="{{ route('contact_us_message') }}">

            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{$property_management}}</p>
                    <h5 class="text-xl font-semibold">Property Management</h5>
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </a>
        
            <a href="{{ route('contact_us_message') }}">

            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{$wholesale}}</p>
                    <h5 class="text-xl font-semibold">Wholesale</h5>
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </a>
        
        
        <a href="{{ route('contact_us_message') }}">

            <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex justify-between items-center">
                <div>
                    <p class="text-3xl font-bold">{{ $contact_us_form }}</p>
                    <h5 class="text-xl font-semibold">Contact us</h5>
                     <br>
                </div>
                <svg class="fill-black w-[35px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001L11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L23 11.0001L20 11.0001V20.0001C20 20.5524 19.5523 21.0001 19 21.0001ZM13 19.0001H18V9.15757L12 3.70302L6 9.15757V19.0001H11V13.0001H13V19.0001Z">
                    </path>
                </svg>
            </div>
        </div>
    </a>
    </div>
@endsection
