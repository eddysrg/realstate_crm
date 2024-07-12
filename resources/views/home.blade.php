<x-app-layout>
    <div
        class="bg-[rgb(0,0,0,0.5)] bg-blend-multiply h-[32rem] bg-[url('/public/img/index_hero_background.jpg')] bg-no-repeat bg-cover">
        <div class="w-11/12 h-full container mx-auto flex flex-col justify-center items-center gap-12">
            <h1 class="text-6xl text-white" id="home">Find your new home here</h1>
            <p class="text-lg text-white">We are a real estate agency dedicated to helping you find the home of your
                dreams. Let's talk
                about how to
                make
                your dream home a reality!
            </p>
            <x-search-bar />
        </div>
    </div>

    <div class="my-14">
        <div class="container mx-auto">
            <div class="text-center">
                <p class="text-base uppercase text-orange-500 font-bold">Featured properties</p>
                <h2 class="text-3xl font-semibold mb-14" id="features">Recommended for you</h2>
            </div>

            <div class="grid grid-cols-3 gap-8">
                @foreach ($properties as $property)
                <x-property-card :property="$property" />
                @endforeach
            </div>

            <a href=""
                class="block my-14 bg-orange-500 mx-auto w-max px-7 py-4 text-sm text-white font-medium rounded">View
                Properties</a>
        </div>
    </div>

    <div class="py-14 bg-slate-100">
        <div class="container mx-auto">
            <p class="text-base uppercase text-orange-500 font-bold">Our Services</p>
            <h2 class="text-3xl font-semibold mb-14" id="about">What are we doing?</h2>

            <div class="grid grid-cols-3 gap-x-8">
                <div class="flex flex-col gap-4">
                    <i class="fa-solid fa-face-smile-beam text-4xl text-orange-500"></i>
                    <h3 class="text-xl font-bold">Buy your new home</h3>
                    <p>
                        Discover the house of your dreams effortlessly. Explore various properties and receive
                        professional
                        guidance for a perfect buying experience.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <i class="fa-solid fa-door-open text-4xl text-orange-500"></i>
                    <h3 class="text-xl font-bold">Rent</h3>
                    <p>
                        We offer a wide variety of options with all the comforts and services you are looking for.
                        Our
                        team of experts will guide you every step of the process to ensure you find the perfect home
                        for
                        you.
                    </p>
                </div>

                <div class="flex flex-col gap-4">
                    <i class="fa-solid fa-house-circle-check text-4xl text-orange-500"></i>
                    <h3 class="text-xl font-bold">Sell ​​your house</h3>
                    <p>
                        Sell ​​your property with us easily and safely. Our team of experts will take care of the
                        entire
                        process, from valuation to negotiation, to ensure you get the best price for your property.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="py-14 bg-[url('/public/img/dots2.webp')]">
        <div class="container mx-auto">
            <h2 class="text-3xl font-semibold mb-14 w-fit py-4 border-t-8 border-orange-500" id="contact-form">
                Schedule your visit
            </h2>

            <div class="w-2/4 mx-auto">

                @if (session('success'))
                <h3 class="mb-6 bg-green-600 text-white py-5 rounded text-center message-success">
                    {{session('success')}}
                </h3>
                @endif

                @include('form.contact-form')
            </div>

        </div>
    </div>

</x-app-layout>