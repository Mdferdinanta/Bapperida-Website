<div>
    <div class="max-w-full">
        <div class="flex flex-col items-center justify-center px-8 py-4 overflow-hidden shadow-sm bg-mist-100 xl:px-64 lg:px-32 md:px-16">

            {{-- Section Title --}}
            <x-section-title href="">{{ __('Agenda') }}</x-section-title>

            <div class="w-full mt-4 mb-8 sm:mt-8">
                <div class="grid w-full gap-4 lg:grid-cols-3">

                    <x-schedule-card />
                    <x-schedule-card />
                    <x-schedule-card />

                </div>
            </div>

        </div>
    </div>
</div>


{{-- <div class="w-full mt-4">
    @foreach ($schedules as $schedule)
        <x-schedule-card :schedule="$schedule" />
    @endforeach
</div> --}}
