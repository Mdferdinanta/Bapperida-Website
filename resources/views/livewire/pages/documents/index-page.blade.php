<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            {{ __('Indeks Daerah Kota Bogor') }}
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <livewire:layout.documents.index-content />

    </x-container>

</x-app-layout>
