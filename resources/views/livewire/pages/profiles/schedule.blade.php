<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            {{ __('Agenda Kegiatan') }}
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        <div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
            <div class="flex flex-col gap-6 md:flex-row">
                {{-- Calendar --}}
                <livewire:layout.schedule.calendar />

                {{-- Schedules --}}
                <livewire:layout.schedule.schedule-list />
            </div>
        </div>

    </x-container>

</x-app-layout>
