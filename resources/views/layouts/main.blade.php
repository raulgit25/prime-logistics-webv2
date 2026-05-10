<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title', 'Autoavaluació')
    </title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>

<body class="bg-stone-200">
    <nav class="fixed top-0 z-50 w-full bg-secondary border-b border-default">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start rtl:justify-end">
                    <button data-drawer-target="top-bar-sidebar" data-drawer-toggle="top-bar-sidebar"
                        aria-controls="top-bar-sidebar" type="button"
                        class="sm:hidden text-heading bg-transparent box-border border border-transparent hover:bg-neutral-secondary-medium focus:ring-4 focus:ring-neutral-tertiary font-medium leading-5 rounded-base text-sm p-2 focus:outline-none">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="M5 7h14M5 12h14M5 17h10" />
                        </svg>
                    </button>
                    <a href="" class="flex ms-2 md:me-24">
                        <img src="{{ asset('') }}" class="h-6 me-3" alt="">
                        <span
                            class="self-center text-black text-lg font-semibold whitespace-nowrap dark:text-white">Autoavaluació</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <span class="text-white me-4 hidden sm:inline-block">
                        {{-- @if (Auth::check())
                            Benvingut, {{ Auth::user()->nom }} {{ Auth::user()->cognoms }}
                        @endif --}}

                    </span>
                </div>
            </div>
        </div>
    </nav>

    <aside id="top-bar-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-full transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-neutral-primary-soft border-e border-default">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="{{ url('/tipus_incoterm') }}"
                        class="flex items-center px-2 py-1.5 text-body rounded-base hover:bg-neutral-tertiary hover:text-primary group">
                        <svg class="w-6 h-6 text-gray-800 dark:text-body group-hover:text-primary" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 19V6a1 1 0 0 1 1-1h4.032a1 1 0 0 1 .768.36l1.9 2.28a1 1 0 0 0 .768.36H16a1 1 0 0 1 1 1v1M3 19l3-8h15l-3 8H3Z" />
                        </svg>
                        <span class="ms-3">Incoterms</span>
                    </a>
                </li>

            </ul>
        </div>
    </aside>

    <div class="p-4 sm:ml-64 mt-14">
        <div id="app">
            @yield('content')
        </div>
    </div>


    {{-- <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script> --}}

    {{-- <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script> --}}


    <script src="/vue_video_alumnes/node_modules/flowbite/dist/flowbite.min.js"></script>
    {{-- <script src="../../../node_modules/flowbite/dist/flowbite.min.js"></script> --}}

</body>

</html>
