<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Buletin</span>
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
            <div class="col-span-3 grid grid-cols-4 gap-4 h-svh">
                <x-buletin-card></x-buletin-card>
                <x-buletin-card></x-buletin-card>
                <x-buletin-card></x-buletin-card>
                <x-buletin-card></x-buletin-card>
                <x-buletin-card></x-buletin-card>
                <x-buletin-card></x-buletin-card>
                <x-buletin-card></x-buletin-card>
                <x-buletin-card></x-buletin-card>
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
