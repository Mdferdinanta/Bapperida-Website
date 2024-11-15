<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Agenda Kegiatan') }}
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col py-8 mx-auto lg:flex-row">

        {{-- Cards --}}
        <div class="flex flex-col gap-8 lg:w-3/4 md:flex-row">

            {{-- Calendar Card --}}
            <div class="flex-none p-4 bg-white shadow-md rounded-xs md:w-72 h-fit">
                <livewire:layout.pages.profiles.calendar />
            </div>

            {{-- Events --}}
            <div class="flex flex-col w-full p-2 bg-white shadow-md rounded-xs">
                <livewire:layout.pages.profiles.schedules-card />
            </div>
        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>
    </main>
</x-app-layout>
