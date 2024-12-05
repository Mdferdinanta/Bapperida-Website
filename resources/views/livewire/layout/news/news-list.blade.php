<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-4 md:flex-row">
        {{-- Search bar --}}
        <x-search-input wire:model.live.debounce.300ms="search" placeholder="Cari..."
            aria-label="Cari nama atau jabatan"></x-search-input>
    </div>
    <div class="flex flex-col gap-4">
        @forelse ($news as $item)
            <div class="flex flex-col w-full rounded-xs md:flex-row border-mist-300">
                <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate
                    class="relative w-full overflow-hidden rounded-xs md:basis-1/2 group">
                    <img src="{{ asset('storage/' . $item->image) }}"
                        class="object-cover w-full h-full border-none aspect-video">
                    <div
                        class="absolute top-0 right-0 flex items-center justify-center h-full px-4 text-white transition-transform duration-300 ease-in-out transform translate-x-full bg-gray-900 bg-opacity-80 group-hover:translate-x-0">
                        Lihat Selengkapnya &raquo;</div>
                </a>
                <div class="flex flex-col justify-center w-full gap-2 py-4 md:ms-4">
                    <small
                        class="tracking-wide text-yellow-500 font-medium text-tiny sm:text-detail">{{ $item->created_at->format('d F Y | H:i') }}</small>
                    <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate
                        class="font-bold tracking-wide capitalize line-clamp-1 text-subtitle sm:text-headline">{{ $item->title }}</a>
                    <div class="">
                        <p class="text-justify text-gray-700 text-wrap">{!! Str::limit($item->content, 150) !!}
                            <a href="{{ route('news-preview', ['id' => $item->id]) }}" wire:navigate
                                class="underline text-gray-500 hover:text-primary-700 active:text-primary-800">Selengkapnya
                                &raquo;</a>
                        </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="w-full">
                <h4 class="text-gray-500 text-center">Tidak ada data.</h4>
            </div>
        @endforelse

        {{-- Pagination --}}
        <div class="mt-2">
            {{ $news->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
        </div>
    </div>
</div>
