<div class="py-12 bg-white xl:shadow-md shadow-slate-300">
    {{-- Title --}}
    <x-home-section-title>
        {{ __('Galeri Kegiatan') }}
    </x-home-section-title>

    {{-- Content --}}
    <div class="mx-auto overflow-hidden max-w-7xl px-4 md:max-xl:px-8">
        <div class="grid items-center justify-center grid-cols-6 gap-2 md:gap-4 md:grid-cols-8">
            @foreach ($images as $index => $image)
                @php
                    $classes = [
                        'col-start-2',
                        'col-start-4',
                        'col-start-1 md:col-start-6',
                        'col-start-3 md:col-start-1',
                        'col-start-5 md:col-start-3',
                        'col-start-2 md:col-start-5',
                        'col-start-4 md:col-start-7',
                    ];
                    $class = $classes[$index % count($classes)];
                @endphp
                <div
                    class="relative col-span-2 aspect-[4/3] w-full shadow-md shadow-slate-300 rounded-xs overflow-hidden group {{ $class }}">
                    <img src="{{ asset('storage/' . $image->image) }}" alt="{{ $image->name }}"
                        class="w-full h-full object-cover">
                    {{-- Hovered Information --}}
                    <div
                        class="absolute top-0 left-0 flex flex-col items-center justify-center h-full w-full px-4 text-white transition-transform duration-300 ease-in-out transform translate-y-full bg-gray-900 bg-opacity-80 group-hover:translate-y-0">
                        <small class="tracking-wide text-yellow-200 text-detail">{{ $image->date }}</small>
                        <span
                            class="font-semibold text-justify text-white capitalize truncate">{{ $image->name }}</span>
                    </div>
                </div>
            @endforeach


        </div>

        {{-- Link --}}
        <x-section-navigate :href="route('gallery')" wire:navigate>{{ __('Lihat semua dokumentasi') }} &raquo;</x-section-navigate>
    </div>
</div>
