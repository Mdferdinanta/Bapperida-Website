<x-app-layout>
    <x-slot:header>
        <x-hero-home></x-hero-home>
    </x-slot:header>

    {{-- Bapperida News --}}
    <livewire:layout.news.home-news />

    {{-- Infographics --}}
    <livewire:layout.home.infographics />

    {{-- Bogor News --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden bg-red-200 max-w-7xl">
            <div class="">
                <div class="p-6">
                    {{ __('Bogor News') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Schedules --}}
    <livewire:layout.home.home-schedule />

    {{-- Activity Gallery --}}
    <livewire:layout.home.home-gallery />


    {{-- Social Media --}}
    <div class="py-12">
        <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="p-6">
                    {{ __('Social Media') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden bg-red-200 max-w-7xl">
            <div class="">
                <div class="p-6">
                    {{ __('Contact') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Maps --}}
    <div class="py-12">
        <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="p-6">
                    {{ __('Maps') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bapperida News --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden bg-red-200 max-w-7xl">
            <div class="">
                <div class="p-6">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
