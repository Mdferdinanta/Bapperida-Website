<div class="p-6 xl:bg-white xl:w-1/4">
    <div>
        {{-- Section Title --}}
        <a href="{{ route('news') }}" class="font-bold tracking-wider uppercase text-subtitle" wire.navigate>
            <i class="ri-arrow-right-s-line ri-lg text-primary-500"></i>
            {{ __('Berita Terbaru') }}
        </a>

        {{-- News Cards --}}
        <div class="flex flex-col gap-4 mt-6 md:max-xl:flex-row">
            {{-- Card --}}
            @foreach ($news as $index => $item)
                <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate
                    class="relative w-full h-64 overflow-hidden bg-gray-300 rounded-xs xl:h-48 group">
                    <img src="{{ asset('storage/' . $item->image) }}" class="object-cover w-full h-full">
                    <div class="absolute bottom-0 flex flex-col w-full gap-2 px-4 py-2 duration-100 ease-in-out bg-gray-900 group-hover:py-4 bg-opacity-80">
                        <small
                            class="tracking-wide text-yellow-200 text-detail">{{ $item->created_at->format('d F Y | H:i') }}</small>
                        <span
                            class="font-semibold text-justify text-white capitalize truncate">{{ $item->title }}</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>