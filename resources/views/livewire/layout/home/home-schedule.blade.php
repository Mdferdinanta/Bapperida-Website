<div class="py-12">
    {{-- Title --}}
    <x-home-section-title>
        {{ __('Agenda Kegiatan') }}
    </x-home-section-title>

    {{-- Content --}}
    <div class="flex flex-col items-center justify-center mx-auto overflow-hidden max-w-7xl">
        {{-- <div  class="px-8 py-4 overflow-hidden shadow-sm bg-mist-100 md:px-16"> --}}

        <div class="w-full px-4 md:max-xl:px-8">
            <div class="grid w-full gap-4 lg:gap-8 lg:grid-cols-3">

                @forelse ($schedules as $schedule)
                    <livewire:layout.schedule.schedule-card :schedule="$schedule" />
                @empty
                    {{-- if no schedule then show this instead --}}
                    <div
                        class="inline-flex items-center justify-start lg:col-start-2 w-full px-4 py-4 bg-white shadow-md cursor-pointer rounded-xs lg:flex-col xl:px-8 lg:py-16 lg:h-auto lg:rounded-md">
                        <div class="flex items-center justify-center h-full lg:w-full rounded-xs">
                            <img src="{{ asset('assets/images/vectors/CalendarIcon.svg') }}" alt=""
                                class="w-8 md:w-16 lg:w-32 xl:w-48">
                        </div>
                        <div class="lg:text-center lg:mt-4 max-lg:ms-4">
                            <h3 class="font-black tracking-wide text-primary-700 text-subtitle"></h3>
                            <p class="mt-2 font-semibold max-md:text-detail">Tidak ada jadwal yang tersedia saat ini</p>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>

        {{-- Link --}}
        <x-section-navigate :href="route('schedule')" wire:navigate>{{ __('Lihat semua') }} &raquo;</x-section-navigate>

        {{-- </div> --}}
    </div>
</div>
