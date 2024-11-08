@extends('admin.layout.master')
<style>
    .hidden {
        display: none;
    }
</style>
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Property Listings </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <a href="{{ route('properties-listing-add') }}"><button
                class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow mb-4">
                Add
            </button></a>

        <!-- datatable -->
        <table id="example" class="display bg-white">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Property</th>
                    <th class="hidden">URL</th>
                    <th>URL</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($properties as $key => $property)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>@if($property->cover_image)<img style="width: 200px;" src="{{ asset('property_managment_listing/'.$property->cover_image) }}">@else No Image @endif</td>
                        <td>{{ $property->hero_heading }}</td>
                        <td class="urlCell hidden" >{{ $property->url }}</td>
                        <td><button class="copyButton" onclick="copyUrl(this)">Copy URL</button></td>


                        <td><a href="{{ url('property-listng/edit/' . $property->id) }}">Edit</a> | <a href="{{url('property-listng/delete/'.$property->id)}}"
                                onclick="return confirm('Are you sure you want to delete?')">Remove</a></td>
                    </tr>
                @endforeach


            </tbody>

        </table>
    </div>
@endsection
@section('script')
<script>
    function copyUrl(button) {
        // Traverse the DOM to find the corresponding URL cell
        var urlCell = button.parentElement.previousElementSibling;

        // Get the text content from the cell
        var urlToCopy = urlCell.innerText;

        // Create a temporary input element
        var tempInput = document.createElement('input');
        tempInput.value = urlToCopy;
        document.body.appendChild(tempInput);

        // Select the text in the input element
        tempInput.select();
        tempInput.setSelectionRange(0, 99999); /* For mobile devices */

        // Copy the text to the clipboard
        document.execCommand('copy');

        // Remove the temporary input element
        document.body.removeChild(tempInput);

        // Optionally, provide some feedback to the user
        alert('URL copied: ' + urlToCopy);
    }
</script>

@endsection
