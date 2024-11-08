@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Service Section Listings </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        {{-- <a href="{{ route('service_section_create') }}"><button
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
                Add
            </button></a> --}}

        <!-- datatable -->
        <table id="example" class="display bg-white">
            <thead>
                <tr>
                    <th>#</th>

                    <th>Image</th>
                    <th>Heading</th>
                    <th>Description</th>
        
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($services as $key => $service)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{asset('service_section/'.$service->image)}}"></td>
                        <td>{{ $service->heading }}</td>
                        <td>{{ $service->description }}</td>
         
                        <td><a href="{{ url('service-section-edit/' . $service->id) }}">Edit</a> </td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
