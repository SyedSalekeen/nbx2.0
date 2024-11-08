@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> ALL CMS </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('cms_add') }}"><button
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
                    <th>Type</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cmspages as $key => $cms)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('cms_image/' . $cms->image) }}" style="width: 200px;"></td>
                        <td>{{ $cms->heading }}</td>
                        <td>{{ $cms->type }}</td>
                        <td><a href="{{url('cms-edit/'.$cms->id)}}">Edit</a> </td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
