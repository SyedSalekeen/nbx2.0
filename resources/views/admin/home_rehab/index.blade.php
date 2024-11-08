@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Home Rehabs </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('home-rehabs-add') }}"><button
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
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homeRehabs as $key => $homeRehab)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('home_rehab/' . $homeRehab->image) }}"></td>
                        <td>{{ $homeRehab->heading }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($homeRehab->description, 150) }}</td>
                        <td>
                            @if ($homeRehab->status == '1')
                            Active
                            @else
                            Inactive
                            @endif
                        </td>
                        <td><a href="{{url('home-rehabs/edit/'.$homeRehab->id)}}">Edit</a> | <a href="{{url('home-rehabs/remove/'.$homeRehab->id)}}" onclick="return confirm('Are you sure you want to delete?')">Remove</a></td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
