<div>
    <div class="max-w-full">
        <div
            class="flex flex-col items-center justify-center px-8 py-4 overflow-hidden shadow-sm bg-mist-100 xl:px-64 lg:px-32 md:px-16">

            {{-- Section Title --}}
            <x-section-title href="">{{ __('Agenda Kegiatan') }}</x-section-title>

            <div class="w-full mt-4 sm:mt-8">
                <div class="grid w-full gap-4 lg:gap-8 lg:grid-cols-3">

                    @foreach ($schedules as $schedule)
                        <x-schedule-card :schedule="$schedule" />
                    @endforeach

                </div>
            </div>

            {{-- Link --}}
            <x-section-redirect-all :href="route('page-schedules')"
                class="flex justify-center px-16 mt-4 md:shadow-md md:bg-white rounded-xs md:hover:bg-primary-100"
                wire:navigate>{{ __('Lihat Semua') }}</x-section-redirect-all>

        </div>
    </div>
</div>
