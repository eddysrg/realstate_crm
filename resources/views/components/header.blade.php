<div class="px-10 py-8 border-b bg-white shadow flex justify-between items-center">
    <h2 class="text-3xl">Real<span class="text-orange-500 font-medium">Test</span></h2>

    <nav class="flex">
        <ul class="text-sm flex font-semibold uppercase gap-5 pr-5 border-r border-gray-700">
            <li class="cursor-pointer">
                <a href="#home" class="link-smooth-scroll">
                    Home
                </a>
            </li>
            <li class="cursor-pointer">
                <a href="#features" class="link-smooth-scroll">
                    Properties
                </a>
            </li>

            <li class="cursor-pointer">
                <a href="#about" class="link-smooth-scroll">
                    About Us
                </a>
            </li>

            <li class="cursor-pointer">
                <a href="#contact-form" class="link-smooth-scroll">
                    Contact
                </a>
            </li>
        </ul>

        <div class="flex gap-5 text-sm font-semibold uppercase pl-5">
            <a class="cursor-pointer" href="{{route('login')}}">Sign in</a>
            <a class="text-orange-500 cursor-pointer" href="{{route('register')}}">Sign up</a>
        </div>
    </nav>
</div>