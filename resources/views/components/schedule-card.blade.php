<div class="inline-flex lg:flex-col items-center justify-start w-full px-4 py-4 lg:px-8 lg:py-16 bg-white shadow-lg lg:h-auto rounded-md lg:rounded-lg">
    <div class="flex items-center h-full lg:w-full justify-center rounded-xs">
        <img src="{{ asset('assets/vectors/CalendarIcon.svg') }}" alt="" class="w-8 md:w-16 lg:w-20 xl:w-32">
    </div>
    <div class="lg:text-center lg:mt-4 max-lg:ms-4">
        <h3 class="font-black tracking-wide text-primary-700 text-subtitle">Day, 00 Desember 2000</h3>
        <p class="mt-2 max-xl:text-detail">Keterangan agenda yang dijadwalkan</p>
    </div>
</div>





{{-- <div class="w-full p-4 mb-4 bg-white rounded-lg shadow-md">
    <h3 class="text-lg font-semibold">{{ $schedule->title }}</h3>
    <p class="text-sm text-gray-600">{{ $schedule->date->format('F j, Y') }}</p>
    <p class="mt-2">{{ $schedule->description }}</p>
</div> --}}


{{-- controller --}}
{{-- <php
public function showSchedules()
{
    $schedules = Schedule::where('date', '>=', now())->orderBy('date')->take(5)->get();
    return view('schedules', compact('schedules'));
} --}}

{{-- route --}}
{{-- <php
Route::get('/schedules', [ScheduleController::class, 'showSchedules'])->name('schedules'); --}}
