<div class="flex flex-col gap-4">
    @foreach ($news as $item)
        <div class="flex flex-col w-full rounded-xs md:flex-row border-mist-300">
            <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate class="relative w-full overflow-hidden rounded-xs md:basis-2/3 group">
                <img src="{{ asset('storage/' . $item->image) }}"
                    class="object-cover w-full h-full border-none aspect-video">
                <div class="absolute top-0 right-0 flex items-center justify-center h-full px-4 text-white transition-transform duration-300 ease-in-out transform translate-x-full bg-gray-900 bg-opacity-80 group-hover:translate-x-0">
                    Lihat Selengkapnya &raquo;</div>
            </a>
            <div class="flex flex-col justify-center w-full gap-2 py-4 ms-4 max-md:mt-2">
                <small
                    class="tracking-wide text-yellow-500 text-shadow text-tiny sm:text-detail">{{ $item->created_at->format('d F Y | H:i') }}</small>
                <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate
                    class="font-bold tracking-wide capitalize line-clamp-1 text-subtitle sm:text-headline">{{ $item->title }}</a>
                <div class="">
                    <p class="text-justify text-gray-700 text-wrap">{!! Str::limit($item->content, 255) !!}
                        <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate
                            class="underline text-primary-500 hover:text-primary-700 active:text-primary-800">Selengkapnya
                            &raquo;</a>
                    </p>
                </div>
            </div>
        </div>
    @endforeach

    {{-- Pagination --}}
    <div class="mt-2">
        {{ $news->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
    </div>
</div>
