<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Galeri Kegiatan</span>
    </x-hero>

    {{-- Content --}}
    <main class="container px-6 py-8 mx-auto">

        {{-- Search --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3">
                <div class="flex items-center justify-end mb-4">
                    <div class="relative">
                        <x-search-input></x-search-input>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="flex items-center justify-start mb-4">
                    <div class="relative">
                        <h2 class="font-semibold text-headline">Berita Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>


        {{-- Grids --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="grid grid-cols-3 col-span-3 gap-4 h-svh">
                <div class="p-4 bg-white border rounded-xs border-mist-300 h-60">
                    <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="object-cover w-full h-40 mb-2"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-h3Bold ">Judul Kegiatan</h3>
                    <p class="mb-2 text-detail">Tanggal Berita</p>
                </div>
            </div>

            {{-- Berita Section --}}
            <div class="grid col-auto grid-rows-3 gap-4">
                <x-berita-card></x-berita-card>
            </div>
        </div>

        {{-- Footer --}}
        <div></div>

    </main>
</x-app-layout>
