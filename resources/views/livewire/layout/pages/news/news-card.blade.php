<div class="flex flex-col w-full cursor-pointer lg:flex-row rounded-xs lg:bg-white lg:shadow-md">
    <div class="overflow-hidden h-52 lg:h-full lg:w-1/3 rounded-xs lg:rounded-r-none">
        <img src="{{ asset('storage/' . $news->thumbnail) }}"
            class="object-cover w-full h-full" alt="berita thumbnail">
    </div>

    <div class="flex flex-col justify-center w-auto p-4 text-justify lg:w-2/3 lg:ml-4 max-md:ml-0">
        <h3 class="font-bold text-subtitle lg:text-headline">{{ $news->judul }}</h3>
        <p class="mt-2 font-light leading-normal lg:text-subtitle">{{ Str::limit($news->artikel, 200) }}</p>
        <p class="mt-2 font-light text-detail text-primary-600">
            {{ $news->created_at->translatedFormat('l, j F Y | H:i') }}
        </p>
    </div>
</div>
