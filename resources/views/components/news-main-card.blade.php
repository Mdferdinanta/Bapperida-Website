@php

    $classes = 'flex flex-col w-full gap-4 py-4';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>

    {{-- Thumbnail --}}
    <div class="overflow-hidden rounded-sm h-52 md:h-80 lg:h-[440px] cursor-pointer">
        <img src={{ $thumbnail }} alt="" class="object-cover w-full h-full">
    </div>

    {{-- Details --}}
    <div>
        <h3 class="font-bold text-subtitle lg:text-headline">{{ $title }}</h3>
        <h6 class="mt-2 font-light text-detail">{{ $datetime }}</h6>
        <p class="mt-2 font-light leading-normal lg:text-subtitle">{{ $slot }}</p>
    </div>

</a>
