<div class="rounded-md overflow-hidden line border">
    <div class="h-64 bg-[url('/public/img/house-1.jpg')]"></div>

    <section class="p-4 flex flex-col gap-4">
        <h3 class="text-xl font-medium">{{$property->title}}</h3>

        <p class="text-lg flex items-center gap-2">
            <i class="fa-solid fa-location-dot"></i>
            {{$property->address}}
        </p>

        <div class="flex gap-6">
            <p class="text-lg flex items-center gap-2">
                <i class="fa-solid fa-bed"></i>
                {{$property->bedrooms}}
            </p>

            <p class="text-lg flex items-center gap-2">
                <i class="fa-solid fa-bath"></i>
                {{$property->bathrooms}}
            </p>

            <p class="text-lg flex items-center gap-2">
                <i class="fa-solid fa-ruler"></i>
                {{$property->area}} m²
            </p>
        </div>
    </section>

    <section class="p-4 border-t">
        <p class="text-lg font-bold text-end">$ {{number_format($property->price, 2)}} MXN</p>
    </section>


</div>