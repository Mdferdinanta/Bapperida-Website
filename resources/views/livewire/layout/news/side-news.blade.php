<div class="py-6 xl:bg-white xl:w-1/4">
    <div class="px-6 border-l border-mist-300 h-full">
        {{-- Section Title --}}
        <a href="{{ route('news') }}" class="font-bold tracking-wider uppercase text-subtitle" wire:navigate>
            <i class="ri-arrow-right-s-line ri-lg text-primary-500"></i>
            {{ __('Berita Terbaru') }}
        </a>

        {{-- News Cards --}}
        <div class="flex flex-col gap-6 mt-6 md:max-xl:flex-row">
            {{-- Card --}}
            @foreach ($news as $index => $item)
                <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate
                    class="relative w-full h-64 overflow-hidden rounded-xs xl:h-48 group">
                    <img src="{{ asset('storage/' . $item->image) }}" class="object-cover w-full h-full">
                    <div class="absolute bottom-0 flex flex-col w-full gap-1 px-4 py-4 duration-100 ease-in-out bg-gradient-to-t from-gray-900/100 to-gray-900/0 group-hover:py-6">
                        <span
                            class="font-semibold text-justify text-white capitalize truncate">{{ $item->title }}</span>
                        <small
                            class="tracking-wide text-amber-200 text-shadow-sm shadow-black text-detail">{{ $item->created_at->format('d F Y | H:i') }}</small>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
