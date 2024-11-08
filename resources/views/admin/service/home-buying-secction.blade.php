@extends('admin.layout.master')

@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3">Advantage/Create</h3>
        <form method="POST" action="{{ route('service_section_home_buying_store') }}" class="w-full max-w-lg"
            enctype="multipart/form-data">
            @csrf
            <h1 class="text-2xl font-bold mb-6">Hero Section</h1>

            <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="heading1">
                    Heading
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="heading1" type="text" name="heading_middle" placeholder="Heading" required>
            </div>

            <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description1">
                    Description
                </label>
                <input
                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="description1" type="text" name="description_middle" placeholder="Description" required>
            </div>
            <h1 class="text-2xl font-bold mb-6">Grid Section</h1>
            <div id="formContainer1" class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="heading1">
                        Heading
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="heading1" type="text" name="sections[0][heading]" placeholder="Heading" required>
                </div>
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="description1">
                        Description
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="description1" type="text" name="sections[0][description]" placeholder="Description" required>
                </div>
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="image1">
                        Image
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="image1" type="file" name="sections[0][image]" required>
                </div>
            </div>

            <button class="bg-blue-500 text-white font-bold py-2 px-4 rounded mb-6" type="button"
                onclick="addFields('formContainer1', 0)">Add More</button>


            <h1 class="text-2xl font-bold mb-6">Bottom Section</h1>
            <h2>First CKEditor</h2>
            <textarea name="editor1" id="editor1" rows="10" cols="80"></textarea>

            <h2>Second CKEditor</h2>
            <textarea name="editor2" id="editor2" rows="10" cols="80"></textarea>

            <h2>Third CKEditor</h2>
            <textarea name="editor3" id="editor3" rows="10" cols="80"></textarea>





            <button
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Create
            </button>
        </form>
    </div>
@endsection

@section('script')
    <script>
        CKEDITOR.replace('editor1');
        CKEDITOR.replace('editor2');
        CKEDITOR.replace('editor3');
    </script>
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
                           type="file" name="sections[${sectionIndex}][image]" required>
                </div>
                <div class="w-full px-3 mb-6 remove-button">
                    <button class="bg-red-500 text-white font-bold py-2 px-4 rounded" type="button" onclick="removeField(this)">Remove</button>
                </div>
            `;
            container.appendChild(newFields);
        }

        function removeField(button) {
            const fieldGroup = button.closest('.flex');
            fieldGroup.remove();
        }
    </script>
@endsection
