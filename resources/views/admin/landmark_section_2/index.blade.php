@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Landmark Section Second </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('landmark_section_second_craete') }}"><button
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
                Add
            </button></a>
        <!-- datatable -->
        <table id="example" class="display bg-white">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>Description</th>

                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($landmarkSection as $key => $landmarkSec)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('landmark_section/' . $landmarkSec->image) }}" style="width: 200px;"></td>
                        <td>{{ $landmarkSec->heading }}</td>
                        <td>{{ $landmarkSec->description }}</td>
                        <td><?php if($landmarkSec->status == "1") { echo "Active";} else {echo "Inactive";} ?></td>

                        <td><a href="{{url('landmark_section-second-edit/'.$landmarkSec->id)}}">Edit</a> </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
