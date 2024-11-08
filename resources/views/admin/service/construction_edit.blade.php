@extends('admin.layout.master')

@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3">Edit Service</h3>
        <form method="POST" action="{{ route('service_section_construction_update', $service->id) }}" class="w-full max-w-lg"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <h1 class="text-2xl font-bold mb-6">First Section</h1>
            <div id="formContainer1" class="flex flex-wrap -mx-3 mb-6">
                @foreach ($service->serviceConstruction as $index => $section)
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="heading1">
                            Heading
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="heading1" type="text" name="sections[{{ $index }}][heading]"
                            value="{{ $section->heading }}" required>
                    </div>
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="description1">
                            Description
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="description1" type="text" name="sections[{{ $index }}][description]"
                            value="{{ $section->description }}" required>
                    </div>
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image1">
                            Image
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="image1" type="file" name="sections[{{ $index }}][image]">
                        @if ($section->image)
                            <img src="{{ asset('path_to_images/' . $section->image) }}" alt="Image" width="100">
                        @endif
                    </div>
                @endforeach
            </div>

            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded mb-6" type="button"
                onclick="addFields('formContainer1', {{ count($service->serviceConstruction) }})">Add More</button>


            <h1 class="text-2xl font-bold mb-6">Middle Section</h1>
            <div id="formContainerMiddle" class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="heading_middle">
                        Heading
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="heading_middle" type="text" name="heading_middle" value="{{ $service->heading_middle }}"
                        required>
                </div>
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="description_middle">
                        Description
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="description_middle" type="text" name="description_middle"
                        value="{{ $service->description_middle }}" required>
                </div>
            </div>

            <h1 class="text-2xl font-bold mb-6">Second Section</h1>
            <div id="formContainer2" class="flex flex-wrap -mx-3 mb-6">
                @foreach ($service->serviceConstructionTwo as $index => $section)
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="heading2">
                            Heading
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="heading2" type="text"
                            name="sections[{{ $index + count($service->serviceConstruction) }}][heading]"
                            value="{{ $section->heading }}" required>
                    </div>
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                            for="description2">
                            Description
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="description2" type="text"
                            name="sections[{{ $index + count($service->serviceConstruction) }}][description]"
                            value="{{ $section->description }}" required>
                    </div>
                    <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image2">
                            Image
                        </label>
                        <input
                            class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                            id="image2" type="file"
                            name="sections[{{ $index + count($service->serviceConstruction) }}][image]">
                        @if ($section->image)
                            <img src="{{ asset('path_to_images/' . $section->image) }}" alt="Image" width="100">
                        @endif
                    </div>
                @endforeach
            </div>

            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded mb-6" type="button"
                onclick="addFields('formContainer2', {{ count($service->serviceConstruction) + count($service->serviceConstructionTwo) }})">Add
                More</button>

            <button
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Update
            </button>
        </form>
    </div>
@endsection

@section('script')
    <script>
        function addFields(containerId, sectionIndex) {
            const container = document.getElementById(containerId);
            const newFields = document.createElement('div');
            newFields.classList.add('flex', 'flex-wrap', '-mx-3', 'mb-6');
            newFields.innerHTML = `
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="heading">
                        Heading
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           type="text" name="sections[${sectionIndex}][heading]" placeholder="Heading" required>
                </div>
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description">
                        Description
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           type="text" name="sections[${sectionIndex}][description]" placeholder="Description" required>
                </div>
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image">
                        Image
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                           type="file" name="sections[${sectionIndex}][image]" placeholder="Image">
                </div>`;
            container.appendChild(newFields);
        }
    </script>
@endsection
