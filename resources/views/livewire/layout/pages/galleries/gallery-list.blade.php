<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        Galeri Kegiatan
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4 ">

            {{-- Search Kategori --}}
            <div class="flex flex-col gap-4 mx-8 ml-auto lg:flex-row min-md:items-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="grid grid-cols-1 gap-4 m-8 md:grid-cols-2 xl:grid-cols-3">
                <livewire:layout.pages.galleries.image-card />
            </div>


        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
