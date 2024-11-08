@extends('admin.layout.master')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Case Studies </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('case_studies_create') }}"><button
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
                    <th>Short Description</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($caseStudeis as $key => $case)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td><img src="{{ asset('case_studies/' . $case->image) }}" style="width: 200px;"></td>
                        <td>{{ $case->heading }}</td>
                        <td>{{ $case->description }}</td>
                        <td><?php if($case->status == "1") { echo "Active";} else {echo "Inactive";} ?></td>

                        <td><a href="{{ url('case-studies-edit/' . $case->id) }}">Edit</a> </td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
