@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> ALL Testimonials </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('testemonials_add') }}"><button
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
                @foreach ($testimonials as $key => $testimonial)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('testimonials/' . $testimonial->image) }}" style="width: 200px;"></td>
                        <td>{{ $testimonial->heading }}</td>
                        <td>{{ $testimonial->description }}</td>

                        <td><?php if($testimonial->status == "1") { echo "Active";} else { echo "Inactive";} ?></td>
                        <td><a href="{{ url('testimonials-edit/' . $testimonial->id) }}">Edit</a> </td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
