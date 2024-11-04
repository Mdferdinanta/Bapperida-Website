<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Agenda</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col lg:flex-row mx-auto py-8 px-6">
    <div class ="lg:w-3/4 flex gap-8 flex-col md:flex-row lg:pr-8">
        
            {{-- Section Tanggal --}}
            <div class="flex-none rounded-xs md:w-72 bg-teal-100 p-4 lg:h-[480px] h-[240px]">
                <h2 class="text-lg font-semibold"></h2>
            </div>

            {{-- Jadwal Harian --}}
            <div class="flex flex-col rounded-xs py-2 w-full bg-teal-100 divide-y-2 divide-neutral-500">
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
                <x-kegiatan-card></x-kegiatan-card>
            </div>
    </div>

    {{-- Berita --}}
    <div class="lg:w-1/4 h-full lg:pl-8 lg:border-l-2 border-misty-300">
        {{-- Judul --}}
        <div class="max-lg:my-8">
            <h3 class="text-subtitle lg:text-headline font-subtitleBold">
                <i class="ri-arrow-right-s-line"></i>
                Berita Terbaru
            </h3>
        </div>

        {{-- Konten --}}
        <div>
            <x-berita-card></x-berita-card>
        </div>
    </div>
</x-app-layout>
