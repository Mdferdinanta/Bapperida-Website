<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            {{ __('Profil Pejabat BAPPERIDA') }}
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <livewire:layout.staff.staff-content />

    </x-container>

</x-app-layout>
