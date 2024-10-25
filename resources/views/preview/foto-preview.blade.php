<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Galeri Kegiatan</span>
    </x-hero>

    {{-- body --}}
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
            <div class="col-span-3 gap-4 h-svh">
                <div>                    
                    <div class="p-2 bg-white rounded-xs border border-mist-300">
                        <h1 class="text-headline font-h1Bold mb-2">Judul Kegiatan pada hari sesuai tanggalnya</h1>
                        <p class="text-body mb-4 ">Tanggal Kegiatan</p>
                        <div class=" text-white">
                            <div class="container mx-auto py-8">
                                <div class="relative">
                                    <div class="flex justify-between items-center">
                                        <!-- Previous Button -->
                                        <button class="text-white text-2xl absolute left-0 top-1/2 transform -translate-y-1/2 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="grey">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                            </svg>
                                        </button>
            
                                        <!-- Main Image -->
                                        <div class="w-full flex justify-center">
                                            <img alt="A group of people in a meeting room with a presentation on the screen"
                                                 class="w-4/6 h-auto rounded" 
                                                 src="{{ asset('assets/img/gallery-5.jpg') }}" 
                                                 width="1200"/>
                                        </div>
            
                                        <!-- Next Button -->
                                        <button class="text-white text-2xl absolute right-0 top-1/2 transform -translate-y-1/2 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="grey">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
            
                                <!-- Thumbnails Grid -->
                                <div class="grid grid-cols-5 gap-4 mt-4">
                                    <div class="col-span-1">
                                        <img alt="A group of people standing on a stage with a banner in the background" 
                                             class="w-40 rounded"
                                             src="{{ asset('assets/img/gallery-1.jpg') }}" 
                                             width="300"/>
                                    </div>
                                    <div class="col-span-1">
                                        <img alt="A group of people standing on a stage with a banner in the background" 
                                             class="w-40 rounded"
                                             src="{{ asset('assets/img/gallery-2.jpg') }}" 
                                             width="300"/>
                                    </div>
                                    <div class="col-span-1">
                                        <img alt="A group of people standing on a stage with a banner in the background" 
                                             class="w-40 rounded"
                                             src="{{ asset('assets/img/gallery-3.jpg') }}" 
                                             width="300"/>
                                    </div>
                                    <div class="col-span-1">
                                        <img alt="A group of people standing on a stage with a banner in the background" 
                                             class="w-40 rounded" 
                                             src="{{ asset('assets/img/gallery-4.jpg') }}" 
                                             width="300"/>
                                    </div>
                                    <div class="col-span-1">
                                        <img alt="A group of people standing on a stage with a banner in the background" 
                                             class="w-40 rounded" 
                                             src="{{ asset('assets/img/gallery-6.jpg') }}" 
                                             width="300"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
