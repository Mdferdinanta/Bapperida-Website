<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Berita</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col py-8 mx-auto lg:flex-row">

        {{-- News Field --}}
        <div class="flex flex-col bg-red-200 lg:mr-8 lg:w-3/4">

            {{-- Content --}}
            <div class="bg-white">

            </div>

        </div>

        {{-- Berita --}}
        <div class="h-full lg:w-1/4 lg:pl-8 lg:border-l-2 border-misty-300">
            {{-- Judul --}}
            <div class="max-lg:my-8 ">
                <h3 class="text-subtitle lg:text-headline font-subtitleBold">
                    <i class="ri-arrow-right-s-line"></i>
                    Berita Terbaru
                </h3>
            </div>

            {{-- Konten --}}
            <div>
                {{-- <x-berita-card></x-berita-card> --}}
            </div>
        </div>

    </main>


</x-app-layout>
