{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'RealTest') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/7c072a50bb.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">


    <!-- Page Content -->
    <main>
        <header class="ml-48 px-8 py-5">
            <h2 class="text-xl"><span class="font-semibold">Hello,</span> {{auth()->user()->name}}</h2>
        </header>

        <div class="flex">
            <aside class="w-48 fixed left-0 top-0 p-5 shadow bg-orange-500 h-screen">
                <h2 class="text-3xl text-white text-center">Real<span class="text-slate-800 font-medium">Test</span>
                </h2>


                <nav class="space-y-4 mt-6 text-white">
                    <div>
                        <p class="text-sm font-bold mb-2">Main Menu</p>
                        <ul class="flex flex-col gap-3">
                            <li
                                class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                <i class="fa-solid fa-shop"></i>
                                Dashboard
                            </li>
                            <li>
                                <a class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600"
                                    href="{{route('properties')}}">
                                    <i class="fa-solid fa-house"></i>
                                    Properties
                                </a>
                            </li>
                            <li
                                class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                <i class="fa-solid fa-door-open"></i>
                                Type
                            </li>
                            <li
                                class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Transactions
                            </li>
                            <li
                                class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                <i class="fa-solid fa-chart-pie"></i>
                                Analytics
                            </li>
                        </ul>
                    </div>
                    <div>
                        <p class="text-sm font-bold mb-2">Others</p>
                        <ul>
                            <li
                                class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                <i class="fa-solid fa-user"></i>
                                Customer
                            </li>
                            <li
                                class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                <i class="fa-solid fa-inbox"></i>
                                Messages
                            </li>
                            <li
                                class="p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                <i class="fa-solid fa-gear"></i>
                                Settings
                            </li>
                            <form method="POST" action="{{route('logout')}}">
                                @csrf
                                <button type="submit"
                                    class="w-full p-2 rounded-xl flex items-center gap-4 cursor-pointer transition duration-500 hover:bg-orange-600">
                                    <i class="fa-solid fa-power-off"></i>
                                    Log Out
                                </button>
                            </form>
                        </ul>
                    </div>
                </nav>
            </aside>

            <div class="ml-48 p-8 flex gap-10">
                <section class="grow-[2] w-3/5 grid grid-cols-3 gap-5">
                    @foreach ($properties as $property)
                    <x-property-dashboard :property="$property" />
                    @endforeach
                </section>

                <section class="grow-0 border rounded-lg p-5 h-max">
                    <div>
                        <h2 class="font-semibold">Recent Messages</h2>

                        <div class="flex gap-4 items-center py-5 border-b">
                            <div class="w-10 h-10 rounded-full aspect-square  overflow-hidden">
                                <img src="{{asset('img/user-image.png')}}" alt="User image">
                            </div>

                            <div>
                                <h3>James Benny</h3>
                                <p class="text-gray-500 text-sm">Hey, Let me know if you´re still available</p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-center py-5 border-b">
                            <div class="w-10 h-10 rounded-full aspect-square  overflow-hidden">
                                <img src="{{asset('img/user-image.png')}}" alt="User image">
                            </div>

                            <div>
                                <h3>William Chynita</h3>
                                <p class="text-gray-500 text-sm">Okay thanks</p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-center py-5 border-b">
                            <div class="w-10 h-10 rounded-full aspect-square  overflow-hidden">
                                <img src="{{asset('img/user-image.png')}}" alt="User image">
                            </div>

                            <div>
                                <h3>Henry David</h3>
                                <p class="text-gray-500 text-sm">Alright I'll get back to you ASAP</p>
                            </div>
                        </div>

                        <div class="flex gap-4 items-center py-5">
                            <div class="w-10 h-10 rounded-full aspect-square  overflow-hidden">
                                <img src="{{asset('img/user-image.png')}}" alt="User image">
                            </div>

                            <div>
                                <h3>Charlotte Flair</h3>
                                <p class="text-gray-500 text-sm">Sound good buddy</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class="font-semibold my-3">Map View</h2>
                        <div class="">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d60141.20353282239!2d-99.23461119999999!3d19.5919872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1720982775117!5m2!1ses-419!2smx"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </main>


</body>

</html>