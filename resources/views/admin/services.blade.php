@extends('admin.layout.master')

@section('content')
    <div class="Services">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Home Sections </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <div class="grid md:grid-cols-2 grid-1 gap-4">
            {{-- <a href="{{ route('advantage') }}">
                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">Advantage Section</h5>
                </div>
            </a> --}}
            <a href="{{ route('service_section') }}">

                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">Service Section</h5>
                </div>
            </a>
            <a href="{{ route('landmark_section_first') }}">

                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">Landmarks  Section</h5>
                </div>
            </a>
            {{-- <a href="{{ route('landmark_section_second') }}">

                <div class="bg-[#c1c0c5] rounded-[22px] px-[3rem] py-[2rem] flex items-center justify-center">
                    <h5 class="text-3xl font-semibold">Landmarks Second Section</h5>
                </div>
            </a> --}}
        </div>

    </div>
    </div>
@endsection
