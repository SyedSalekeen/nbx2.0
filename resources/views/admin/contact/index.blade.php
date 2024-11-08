@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> All Leads </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>


        <!-- datatable -->
        <table id="example" class="display bg-white">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Message</th>
                    <th>lead type</th>
                    <th>Details</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($leads as $key => $lead)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $lead->name }}</td>
                        <td>{{ $lead->email }}</td>
                        <td>{{ $lead->number }}</td>
                        <td>{{ $lead->message }}</td>
                        <td>{{ $lead->lead_type }}</td>
                        <td><a href="{{ route('lead_details',$lead->id) }}">check more</a></td>

                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
