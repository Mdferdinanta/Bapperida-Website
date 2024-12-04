<div class="py-12 bg-white xl:shadow-md shadow-slate-300">
    <div class="flex flex-col gap-4 lg:gap-6 mx-auto overflow-hidden px-4 md:max-xl:px-8 lg:flex-row max-w-7xl">
        {{-- Left Main Card --}}
        @if ($leftNews)
            <div class="relative overflow-hidden rounded-xs max-sm:aspect-video sm:h-96 lg:h-[400px] lg:basis-1/2 group">
                <a href="{{ route('news-preview', ['id' => $leftNews->id]) }}" wire:navigate>
                    <img src="{{ asset('storage/' . $leftNews->image) }}" class="object-cover w-full h-full">
                    <div class="absolute bottom-0 flex flex-col w-full gap-2 p-4 bg-gray-900 bg-opacity-80 transition-transform transform translate-y-9 group-hover:translate-y-0">
                        <small
                            class="tracking-wide text-yellow-200 text-tiny sm:text-detail">{{ $leftNews->created_at->format('d F Y | H:i') }}</small>
                        <span
                            class="font-semibold tracking-wide text-justify text-white truncate text-subtitle sm:text-headline">{{ $leftNews->title }}</span>
                        <span
                            class="font-semibold tracking-wide text-justify text-gray-200 max-sm:text-detail">Lihat
                            selengkapnya &raquo;</span>
                    </div>
                </a>
            </div>
        @endif

        {{-- Right cards --}}
        <div class="flex flex-wrap gap-4 max-sm:flex-col rounded-xs lg:basis-1/2">
            {{-- Cards --}}
            @foreach ($rightNews as $item)
                <div
                    class="relative flex-auto overflow-hidden rounded-xs max-sm:aspect-video sm:h-48 md:h-56 lg:h-48 sm:basis-2/5 group">
                    <img src="{{ asset('storage/' . $item->image) }}" class="object-cover w-full h-full">
                    <div class="absolute bottom-0 flex flex-col w-full gap-2 px-4 py-2 bg-gray-900 bg-opacity-80 transition-transform transform translate-y-6 cursor-pointer group-hover:translate-y-0">
                        <small
                            class="tracking-wide text-yellow-200 text-tiny">{{ $item->created_at->format('d F Y | H:i') }}</small>
                        <span
                            class="font-semibold tracking-wide text-justify text-white capitalize truncate max-sm:text-subtitle">{{ $item->title }}</span>
                        <span
                            class="font-semibold tracking-wide text-justify text-gray-200 text-tiny sm:text-detail">Lihat
                            selengkapnya &raquo;</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Navigate Link --}}
    <x-section-navigate :href="route('news')" wire:navigate>{{ __('Lihat semua berita') }} &raquo;</x-section-navigate>
</div>
