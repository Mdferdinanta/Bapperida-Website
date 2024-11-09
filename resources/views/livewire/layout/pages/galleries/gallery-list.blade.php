<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Galeri Kegiatan') }}
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4 lg:pr-8">

            {{-- Search Kategori --}}
            <div class="flex flex-col w-full gap-4 sm:flex-row sm:justify-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="grid grid-cols-1 gap-4 my-8 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($albums as $albumName => $images)
                <div class="album">
                    {{-- Use only the first image of the album as the album cover --}}
                    @php
                        $coverImage = $images->first(); // Select the first image as the cover
                    @endphp

                    <div class="album-cover">
                        <a href="{{ route('galeri-preview', ['id' => $coverImage->id]) }}">
                            <div class="p-4 bg-white border rounded-xs border-mist-300 h-60">
                                <img src="{{ asset('storage/' . $coverImage->foto) }}" class="object-cover w-full h-40 mb-2" alt="album cover">
                                <h3 class="mb-2 text-body font-h3Bold">{{ $albumName }}</h3>
                                <p class="text-sm text-gray-500">{{ $images->count() }} Images</p>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>


        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
