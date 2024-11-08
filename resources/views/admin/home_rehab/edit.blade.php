@extends('admin.layout.master')
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> Property Management/Edit </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <form method="POST" action="{{ url('home-rehab-update/'.$homeRehab->id) }}" class="w-full max-w-lg"
            enctype="multipart/form-data">
            @csrf
            @method('PUT');
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Heading
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" name="heading" placeholder="Heading" value="{{ $homeRehab->heading }}" required>
                </div>
                <div class="w-full md:w-1/1 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Description
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" name="description" placeholder="Description" value="{{ $homeRehab->description }}" required>
                </div>
                <div class="w-full md:w-1/1 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Image
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="file" name="image" placeholder="Doe">
                        <img src="{{ asset('property_managment/'.$homeRehab->image) }}">
                </div>

                <div class="w-full md:w-1/1 px-3">
                    <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                    <select id="" name="status" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="1" <?php if($homeRehab->status == "1") echo "selected"; ?>>Active</option>
                        <option value="0" <?php if($homeRehab->status == "0") echo "selected"; ?>>Inactive</option>

                    </select>
                </div>


            </div>
            <button
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Update
            </button>
        </form>
    </div>
@endsection
