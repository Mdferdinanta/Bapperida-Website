<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Galeri Kegiatan</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4 ">

            {{-- Search Kategori --}}
            <div class="flex flex-col gap-4 mx-8 ml-auto md:flex-row min-md:items-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="m-8 ">
                <div>
                    <div class="p-2 bg-white border rounded-xs border-mist-300">
                        <h1 class="mb-2 text-body font-h1Bold md:text-subtitle lg:text-subtitle xl:text-headline">Judul Kegiatan pada hari sesuai tanggalnya</h1>
                        <p class="text-tiny md:text-detail lg:text-detail xl:text-body">Tanggal Kegiatan</p>
                        <div class="text-white ">
                            <div class="container py-8 mx-auto">
                                <div class="relative">
                                    <div class="flex items-center justify-between">
                                        <!-- Previous Button -->
                                        <button class="absolute left-0 text-2xl text-white transform -translate-y-1/2 top-1/2 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="grey">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                                            </svg>
                                        </button>

                                        <!-- Main Image -->
                                        <div class="flex justify-center w-full">
                                            <img alt="A group of people in a meeting room with a presentation on the screen"
                                                 class="w-4/6 h-auto rounded"
                                                 src="{{ asset('assets/img/gallery-5.jpg') }}"
                                                 width="1200"/>
                                        </div>

                                        <!-- Next Button -->
                                        <button class="absolute right-0 text-2xl text-white transform -translate-y-1/2 top-1/2 focus:outline-none">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="grey">
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


        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
