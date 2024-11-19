<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        Inovasi
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
            <div class="my-8">
                <div class="p-4 bg-white border-y md:border md:rounded-xs border-mist-300">

                    {{-- List Inovasi --}}
                    <div class="space-y-4">
                        {{-- Inovasi 1 --}}
                       <x-inovasi-card></x-inovasi-card>
                       <x-inovasi-card></x-inovasi-card>
                       <x-inovasi-card></x-inovasi-card>
                       <x-inovasi-card></x-inovasi-card>
                       <x-inovasi-card></x-inovasi-card>                    
                    </div>

                </div>
            </div>

        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>

</x-app-layout>
