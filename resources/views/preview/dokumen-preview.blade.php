<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Dokumen</span>
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
            <div class="col-span-3 gap-4 h-auto ">
                <div>                    
                    <div class="p-4 bg-white rounded-xs border border-mist-300">
                        <h1 class="text-headline font-h1Bold mb-2 text-center ">SmartWaste: Inovasi Pengelolaan Sampah Berbasis Teknologi AI</h1>
                            {{-- Iframe for PDF preview --}}
                            <div class="mt-4 relative overflow-hidden h-[18cm]">
                                <iframe src="{{ asset('assets/doc/doc-1.pdf')}}" class="w-full h-full rounded-md" frameborder="0">
                                </iframe>
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
