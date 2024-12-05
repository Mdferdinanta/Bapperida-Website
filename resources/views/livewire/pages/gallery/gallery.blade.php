<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            {{ __('Galeri Kegiatan') }}
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <livewire:layout.gallery.gallery-list />

    </x-container>

</x-app-layout>
