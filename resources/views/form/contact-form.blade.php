<form method="POST" action="{{route('home')}}" novalidate
    class="flex flex-col gap-5 contact-form {{$errors->any() ? 'has-errors' : ''}}">
    @csrf
    <div class="flex flex-col gap-2">
        <label class="text-sm" for="name">Name</label>
        <input class="p-2 border bg-gray-100" type="text" placeholder="Your full name" id="name" name="name"
            value="{{old('name')}}">
        <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-sm" for="email">Email</label>
        <input class="p-2 border bg-gray-100" type="email" placeholder="Your email" id="email" name="email"
            value="{{old('email')}}">
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-sm" for="phone">WhatsApp</label>
        <input class="p-2 border bg-gray-100" type="phone" placeholder="Your phone number" id="phone" name="phone"
            value="{{old('phone')}}" maxlength="10">
        <x-input-error :messages="$errors->get('phone')" class="mt-2" />
    </div>

    <div class="flex flex-col gap-2">
        <label class="text-sm" for="message">Message</label>
        <textarea class="p-2 border bg-gray-100" name="message" id="message" cols="30" rows="5"
            placeholder="Insert a message">{{old('message')}}</textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
    </div>

    <input
        class="w-fit bg-orange-500 px-16 py-4 rounded text-base text-white cursor-pointer hover:bg-orange-600 transition-colors"
        type="submit" value="Send">
</form>