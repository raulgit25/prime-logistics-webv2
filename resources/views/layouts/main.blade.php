<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Prime Logistics web')
    </title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-stone-200">
    <div id="app">
        @yield('content')
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script> --}}


    <script src="/vue_video_alumnes/node_modules/flowbite/dist/flowbite.min.js"></script>
    {{-- <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script> --}}

</body>

</html>
