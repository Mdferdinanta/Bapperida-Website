<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Galeri Kegiatan') }}
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col py-8 mx-auto lg:flex-row">

        {{-- Content --}}
        <div class="flex flex-col lg:w-3/4">

            {{-- Search Kategori --}}
            <div class="flex flex-col gap-4 max-lg:mx-8 sm:flex-row sm:justify-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="grid grid-cols-1 gap-4 mx-4 my-8 md:grid-cols-2 xl:grid-cols-3">
                @foreach ($albums as $albumName => $images)
                    <div class="album">
                        {{-- Use only the first image of the album as the album cover --}}
                        @php
                            $coverImage = $images->first(); // Select the first image as the cover
                        @endphp

                        <div class="album-cover">
                            <a href="{{ route('galeri-preview', ['id' => $coverImage->id]) }}">
                                <div class="flex flex-col justify-between overflow-hidden bg-white shadow-md h-80 rounded-xs">
                                    <img src="{{ asset('storage/' . $coverImage->foto) }}"
                                        class="object-cover w-full h-60" alt="album cover">
                                    <div class="px-4 mb-4 bg-red-200">
                                        <h3 class="mb-2 font-bold text-body md:text-subtitle text-primary-800">
                                            {{ $albumName }}</h3>
                                        <p class="text-gray-500 text-detail">{{ $images->count() }} Images</p>
                                    </div>
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
