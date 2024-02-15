@extends('main.templates.index')
@section('content')
    <div class="w-full max-w-2xl p-5 pb-10 mx-auto mb-10">
        <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
                src="{{ asset('storage/' . $foto->path_foto) }}" alt="">
            <div class="flex flex-col justify-between p-4 leading-normal">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $foto->judul_foto }} | {{ $foto->nama_foto }}</h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $foto->deskripsi ?? 'Tidak Ada Deskripsi' }}</p>
            </div>
        </div>
        <div class="mt-5">
            <form action="/hapusFoto/{{ $foto->id_foto }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Hapus Foto</button>
            </form>
        </div>
    </div>
@endsection
