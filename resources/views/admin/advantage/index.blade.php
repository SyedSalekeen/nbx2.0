@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> ALL Advantage Section Listings </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('advantage_add') }}"><button
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
                Add
            </button></a>

        <!-- datatable -->
        <table id="example" class="display bg-white">
            <thead>
                <tr>
                    <th>#</th>

                    <th>Heading</th>
                    <th>Description</th>
                    <th>Status</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($advantages as $key => $advantage)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $advantage->heading }}</td>
                        <td>{{ $advantage->description }}</td>
                        <td><?php if ($advantage->status == '1') {
                            echo 'Active';
                        } else {
                            echo 'Inactive';
                        } ?></td>
                        <td><a href="{{ url('advantage-edit/' . $advantage->id) }}">Edit</a> </td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
