<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Agenda</span>
    </x-hero>

    {{-- Content --}}
    <main class="container px-6 py-8 mx-auto">

        {{-- Search --}}
        <div class="grid grid-cols-4 gap-16">

            <div class="flex items-center justify-end col-span-3">

                <div class="flex col-span-1 col-start-2">
                    <div class="flex items-center justify-end mb-4 mr-4">
                        <div class="relative">
                            <x-dropdown-select></x-dropdown-select>
                        </div>
                    </div>
                </div>
                <div class="flex col-span-1 col-start-3">
                    <div class="flex items-center justify-end mb-4">
                        <div class="relative">
                            <x-search-input></x-search-input>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span 1">
                <div class="flex items-center justify-start mb-4">
                    <div class="relative">
                        <h2 class="font-semibold text-headline">Berita Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>


        {{-- Grids --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3">
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>

            </div>

            {{-- Berita Section --}}
            <div class="grid col-span-1 grid-rows-3 gap-4">
                <x-berita-card></x-berita-card>
            </div>
        </div>
        </div>
        </div>

        {{-- Footer --}}
        <div></div>

    </main>
    <div class="grid grid-cols-4 gap-16 p-4 bg-cyan-200">
        <div class="col-span-3 bg-red-200">
            <div class="grid h-full grid-cols-9 gap-8 p-4 bg-yellow-300">
                <div class="col-span-3 bg-purple-300">1</div>
                <div class="col-span-6 bg-purple-300">
                    <h2 class="bg-teal-200">2nd</h2>
                </div>
            </div>
        </div>
        <div class="col-span-1 bg-red-200">
            <div class="p-4">
                <h2>Berita Harian</h2>
            </div>
            <div class="p-4">
                <h2>Berita Harian</h2>
            </div>
            <div class="p-4">
                <h2>Berita Harian</h2>
            </div>
            <div class="p-4">
                <h2>Berita Harian</h2>
            </div>
            <div class="p-4">
                <h2>Berita Harian</h2>
            </div>
            <div class="p-4">
                <h2>Berita Harian</h2>
            </div>
        </div>
    </div>
    </main>


</x-app-layout>
