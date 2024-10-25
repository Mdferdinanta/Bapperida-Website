<x-app-layout>
    
    {{-- Hero Section --}}
    <x-hero>
        <span>Agenda</span>
    </x-hero>
        {{-- Content --}}
        <main class="container mx-auto py-8 px-6">

            {{-- Search --}}
            <div class="grid grid-cols-4 gap-16">
                <div class="col-span-3">
                    <div class="flex justify-end items-center mb-4">
                        <div class="relative">
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
    
            <div class=" grid grid-cols-4 gap-16">
                <div class="col-span-3 grid grid-col-3 gap-8">
                    {{-- calendar --}}
                    <div class="bg-teal-200 col-span-1">
                        <h2> bulan </h2>
                    </div>

                    {{-- content --}}
                    <div class="bg-gray-500 col-auto">
                        <h1> divisi
                        </h1>
                    </div>
                </div>
              
                {{-- Berita Section --}}
                <div class="col-auto grid grid-rows-3 gap-4">
                    <x-berita-card></x-berita-card>
                    <x-berita-card></x-berita-card>
                    <x-berita-card></x-berita-card>
                </div>
            </div>
</x-app-layout>