@extends('admin.layout.master')

@section('content')
    <div class="Pages">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Home page </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-4">
            <a href="{{ route('home') }}">

                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">Home</h5>
                </div>
            </a>
            <a href="{{ route('update_about_us') }}">
                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">About Us</h5>
                </div>
            </a>
            <a href="{{ route('all-services') }}">
                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">Services</h5>
                </div>
            </a>
            <a href="{{ route('case_studies') }}">
                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">Case Studies</h5>
                </div>
            </a>
            <a href="{{ url('cms-edit/8') }}">
                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold"> Contact Us </h5>
                </div>
            </a>
            {{-- <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                <h5 class="text-3xl font-semibold">Blog </h5>
            </div> --}}
            <a href="{{ route('cms') }}">
                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold"> Banner Image / Videos </h5>
                </div>
            </a>
        </div>
    </div>
@endsection
