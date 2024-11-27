<div class="py-12">
    <div class="flex flex-col items-center justify-center mx-auto overflow-hidden max-w-7xl">
        {{-- <div  class="px-8 py-4 overflow-hidden shadow-sm bg-mist-100 md:px-16"> --}}

            <div class="w-full sm:max-xl:px-4">
                <div class="grid w-full gap-4 lg:gap-8 lg:grid-cols-3">

                    @foreach ($schedules as $schedule)
                        <livewire:layout.schedule.schedule-card :schedule="$schedule" />
                    @endforeach

                </div>
            </div>

            {{-- Link --}}
            <x-section-navigate :href="route('schedule')" wire:navigate>{{ __('Lihat semua') }} &raquo;</x-section-navigate>

        {{-- </div> --}}
    </div>
</div>
