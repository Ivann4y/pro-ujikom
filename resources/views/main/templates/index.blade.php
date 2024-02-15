<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ env('APP_NAME') }} | {{ $title }}</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-stone-400">
    <main>
        @yield('content')
    </main>

    @if (session('Berhasil') || session('Gagal'))
        <div class="fixed flex items-center w-full max-w-xs p-4 space-x-4 text-gray-200 bg-rose-400 divide-x rtl:divide-x-reverse divide-gray-200 rounded-lg shadow bottom-5 left-5 dark:text-gray-400 dark:devide-gray-700 space-x" role="alert">
            <div class="text-sm font-normal">{{ session('Berhasil') ?? session('Gagal') }}</div>
        </div>
    @endif
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>

</html>
