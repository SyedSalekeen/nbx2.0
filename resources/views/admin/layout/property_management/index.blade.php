@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Property Managements </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('property-managements-add') }}"><button
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
                @foreach ($properties as $key => $property)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('property_managment/' . $property->image) }}"></td>
                        <td>{{ $property->heading }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($property->description, 150) }}</td>
                        <td>
                            @if ($property->status == '1')
                            Active
                            @else
                            Inactive
                            @endif
                        </td>
                        <td><a href="{{url('property-managements/edit/'.$property->id)}}">Edit</a> | <a href="{{url('property-managements/remove/'.$property->id)}}" onclick="return confirm('Are you sure you want to delete?')">Remove</a></td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
