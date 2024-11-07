<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Agenda</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">
    <div class ="flex flex-col gap-8 lg:w-3/4 md:flex-row lg:pr-8">

            {{-- Section Tanggal --}}
            <div class="flex-none rounded-xs md:w-72 bg-teal-100 p-4 lg:h-[480px] h-[240px]">
                <h2 class="text-lg font-semibold"></h2>
            </div>

            {{-- Jadwal Harian --}}
            <div class="flex flex-col w-full py-2 bg-teal-100 divide-y-2 rounded-xs divide-neutral-500">
                <livewire:layout.pages.profiles.schedules-card />
            </div>
    </div>

    {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>
    </div>
</x-app-layout>
