<x-app-layout>
    
    {{-- Hero Section --}}
    <x-hero>
        <span>Galeri Kegiatan</span>
    </x-hero>

      {{-- Content --}}
      <main class="container mx-auto py-8 px-6">

        {{-- Search --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3">
                <div class="flex justify-end items-center mb-4">
                    <div class="relative">
                        <x-search-input></x-search-input>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="flex justify-start items-center mb-4">
                    <div class="relative">
                        <h2 class="text-headline font-semibold">Berita Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>


        {{-- Grids --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3 grid grid-cols-3 gap-4 h-svh">
                <div class="p-4 bg-white rounded-xs border border-mist-300 h-60">
                    <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="w-full h-40 object-cover mb-2"
                        height="200" alt="video thumbnail">
                        <h3 class="text-subtitle font-h3Bold ">Judul Kegiatan</h3>
                        <p class="text-detail mb-2">Tanggal Berita</p>
                </div>
            </div>

            {{-- Berita Section --}}
            <div class="col-auto grid grid-rows-3 gap-4">
                <x-berita-card></x-berita-card>
                <x-berita-card></x-berita-card>
                <x-berita-card></x-berita-card>
            </div>
            </div>
            </div>
        </div>

        {{-- Footer --}}
        <div></div>

    </main>
</x-app-layout>