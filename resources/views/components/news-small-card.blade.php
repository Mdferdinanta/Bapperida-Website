<a class="flex flex-col w-full gap-4 py-4">

    {{-- Thumbnail --}}
    <div class="overflow-hidden h-52 rounded-xs">
        <img src={{ $thumbnail }} alt="" class="object-cover w-full h-full">
    </div>

    {{-- Details --}}
    <div>
        <h3 class="font-bold">{{ $title }}</h3>
        <h6 class="mt-2 font-light text-detail">{{ $datetime }}</h6>
        <p class="mt-4 font-light leading-normal md:hidden">{{ $slot }}</p>
    </div>

</a>
