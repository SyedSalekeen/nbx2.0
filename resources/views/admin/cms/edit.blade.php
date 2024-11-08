@extends('admin.layout.master')
<style>
    .hide {
        display: none;
    }
</style>
@section('content')
    <!-- dashboard -->
    <div class="dashboard">
        <h3 class="text-[#8d2023] text-2xl font-semibold my-3"> CMS/Edit </h3>
        <!-- search and filters -->
        <div class="flex flex-wrap"> </div>
        <form method="POST" action="{{ route('cms_update',$cms->id) }}" class="w-full max-w-lg" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Heading
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" value="{{ $cms->heading }}" name="heading" placeholder="Heading" required>
                </div>

                <div class="w-full md:w-1/1 px-3 mb-6 md:mb-0  <?php if($cms->id != "1")  echo "hide"; ?>">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                        Description
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="text" value="{{ $cms->description }}" name="description" placeholder="description" >
                </div>

                <div class="w-full md:w-1/1 px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                        Image
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="grid-last-name" type="file" name="image" placeholder="Doe" >
                        <img src="{{ asset('cms_image/'.$cms->image) }}">
                </div>




            </div>
            <button
                class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Update
            </button>
        </form>
    </div>
@endsection
