<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Homepage') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-full">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex p-6">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bogor City News --}}
    <livewire:layout.home.news-bapperida />

    {{-- Bogor City News --}}
    <livewire:layout.home.infographics />

    {{-- Bogor City News --}}
    <livewire:layout.home.news-bogor />

    {{-- Schedule --}}
    <livewire:layout.home.schedules />

    {{-- Activity Gallery --}}
    <livewire:layout.home.activities />

    {{-- Social Media --}}
    <livewire:layout.home.media />

    {{-- Contact --}}
    <livewire:layout.home.contact />

    {{-- Map Section --}}
    <x-gmaps />

</x-app-layout>
