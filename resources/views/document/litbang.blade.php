<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Penelitian Pengembangan</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col lg:flex-row mx-auto py-8 px-6">

        {{-- dokumen --}}
        <div class="lg:w-3/4 flex flex-col">

            {{-- Search Kategori --}}
            <div class="flex flex-col md:flex-row gap-4 mx-8 ml-auto min-md:items-end">
                <x-dropdown-select></x-dropdown-select>
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="m-8">
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
            </div>


        </div>

        {{-- Berita --}}
        <div class="lg:w-1/4 h-full lg:pl-8 lg:border-l-2 border-misty-300">
            {{-- Judul --}}
            <div class="max-lg:my-8">
                <h3 class="text-subtitle lg:text-headline font-subtitleBold">
                    <i class="ri-arrow-right-s-line"></i>
                    Berita Terbaru
                </h3>
            </div>

            {{-- Konten --}}
            <div>
                <x-berita-card></x-berita-card>
            </div>
        </div>

    </main>


</x-app-layout>