<div>
    <div class="container grid items-center justify-center w-full grid-cols-2 mx-auto">

        {{-- Left Card --}}
        @if($latestNews)
        <div class="h-full p-4">
            <a href="{{ route('berita_bapperida') }}"></a>
            <div class="flex h-2/3">
                <img src="{{ asset('storage/' . $latestNews->thumbnail) }}" alt="{{ $latestNews->judul }}"
                    class="object-cover w-full border border-mist-200 rounded-xs">
            </div>
            <div class="mt-4 h-1/3">
                <h3 class="text-h3 font-h3Bold">{{ $latestNews->judul }}</h3>
                <p>{{ $latestNews->date_published->format('d M, Y') }}</p>
                <h5 class="mt-4 text-subtitle">{{ \Illuminate\Support\Str::limit($latestNews->konten, 100) }}</h5>
            </div>
        </div>
        @endif

        {{-- Right Card --}}
        <div class="grid h-full grid-cols-2 gap-8 p-4">
            @foreach ($otherNews as $item)
            <div class="col-span-1">
                <div class="flex h-2/3">
                    <img src="{{ asset('storage/' . $item->thumbnail) }}" alt="{{ $item->judul }}"
                        class="object-cover w-full border border-mist-200 rounded-xs">
                </div>
                <div class="mt-4 h-1/3">
                    <h3 class="text-h3 font-h3Bold">{{ $item->judul }}</h3>
                    <p>{{ $item->date_published->format('d M, Y') }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <x-link-button :href="route('berita_bapperida')" wire:navigate>
        Lihat semua
        <i class="ml-2 ri-arrow-right-double-line"></i>
    </x-link-button>
</div>
