@extends('main.templates.index')
@section('content')
    <div class="w-full max-w-5xl p-5 pb-10 max-auto mb-10 columns-2 md:columns-3 lg:columns-4 xl:columns-5 space-y-5">
        @foreach ($foto as $f)
            <a href="/detailFoto/{{ $f->id_foto }}" class="block hover:scale-105 ease-in-out duration-300 hover:cursor-pointer h-auto w-auto shadow-xl">
                <img src="{{ asset('storage/' . $f->path_foto) }}" alt="pro-galeri" class="rounded-lg">
            </a>
        @endforeach
    </div>

    <div data-dial-init class="fixed end-6 bottom-6 group">
        <a href="/newImage" data-dial-toggle="speed-dial-menu-default" aria-controls="speed-dial-menu-default" aria-expanded="false"
            class="flex items-center justify-center text-white bg-blue-700 rounded-full w-14 h-14 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none dark:focus:ring-blue-800">
            <svg class="w-5 h-5 transition-transform" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 18 18">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 1v16M1 9h16" />
            </svg>
        </a>
    </div>
@endsection
