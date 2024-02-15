@extends('main.templates.index')
@section('content')
    <div class="w-full max-w-2xl p-5 pb-10 mx-auto mb-10">
        <form action="/addImage" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 class="text-4xl font-semibold mb-5 border-b-4 border-gray-500 w-max">Add Photo</h1>
            <div class="mb-6">

                <label class="block mb-2 text-sm font-medium text-gray-900" for="file_input">Upload
                    file</label>
                <input name="photo"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50"
                    id="file_input" type="file" required>
            </div>

            <div class="mb-6">
                <label for="small-input" class="block mb-2 text-sm font-medium text-gray-900">Title</label>
                <input type="text" name="title" id="small-input"
                    class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-gray-500 focus:border-gray-500" required>
            </div>
            <div class="mb-6">

                <label for="message" class="block mb-2 text-sm font-medium text-gray-900">Your
                    message</label>
                <textarea id="message" rows="4" name="deskripsi"
                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-gray-500 focus:border-gray-500"
                    placeholder="Write your thoughts here..."></textarea>
            </div>

            <button type="submit"
                class="text-white bg-gray-700 hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
@endsection
