<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Video Inovasi</span>
    </x-hero>

    {{-- Content --}}
    <main class="container mx-40 py-8 px-6">

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
                    <img src="{{ asset('assets/img/gallery-2.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Inovasi</h3>
                    <p></p>
                </div>
                <div class="p-4 bg-white rounded-xs border border-mist-300 h-60">
                    <img src="{{ asset('assets/img/gallery-2.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Inovasi</h3>
                    <p></p>
                </div>
                <div class="p-4 bg-white rounded-xs border border-mist-300 h-60">
                    <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Inovasi</h3>
                    <p></p>
                </div>
                <div class="p-4 bg-white rounded-xs border border-mist-300 h-60">
                    <img src="{{ asset('assets/img/gallery-3.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Inovasi</h3>
                    <p></p>
                </div>
                <div class="p-4 bg-white rounded-xs border border-mist-300 h-60">
                    <img src="{{ asset('assets/img/gallery-4.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Inovasi</h3>
                    <p></p>
                </div>
                <div class="p-4 bg-white rounded-xs border border-mist-300 h-60">
                    <img src="{{ asset('assets/img/gallery-6.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Inovasi</h3>
                    <p></p>
                </div>
            </div>
            <div class="col-auto grid grid-rows-3 gap-4">
                <div class="p-4 bg-white rounded-xs border border-mist-300">
                    <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Berita</h3>
                    <p class="text-detail mt-2">Tanggal Berita</p>
                </div>
                <div class="p-4 bg-white rounded-xs border border-mist-300">
                    <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Berita</h3>
                    <p class="text-detail mt-2">Tanggal Berita</p>
                </div>
                <div class="p-4 bg-white rounded-xs border border-mist-300">
                    <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="w-full h-40 object-cover mb-4"
                        height="200" alt="video thumbnail">
                    <h3 class="text-subtitle font-semibold">Judul Berita</h3>
                    <p class="text-detail mt-2">Tanggal Berita</p>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div></div>

    </main>

</x-app-layout>
