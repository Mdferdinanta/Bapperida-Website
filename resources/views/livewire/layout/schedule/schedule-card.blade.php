<div
    class="inline-flex items-center justify-start w-full px-4 py-4 bg-white shadow-md cursor-pointer sm:rounded-xs lg:flex-col xl:px-8 lg:py-16 lg:h-auto lg:rounded-md">
    <div class="flex items-center justify-center h-full lg:w-full rounded-xs">
        <img src="{{ asset('assets/vectors/CalendarIcon.svg') }}" alt="" class="w-8 md:w-16 lg:w-32 xl:w-48">
    </div>
    <div class="lg:text-center lg:mt-4 max-lg:ms-4">
        <h3 class="font-black tracking-wide text-primary-700 text-subtitle">
            {{ $schedule->date->translatedFormat('l, j F Y') }}</h3>
        <p class="mt-2 font-semibold max-md:text-detail">{{ $schedule->title }}</p>
    </div>
</div>
