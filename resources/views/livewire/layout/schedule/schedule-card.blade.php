<div
    class="inline-flex items-center justify-start w-full px-4 py-4 bg-white shadow-md cursor-pointer shadow-slate-300 hover:shadow-lg group rounded-xs lg:flex-col xl:px-8 lg:py-8 lg:h-auto lg:rounded-md">
    <div class="flex items-center justify-center h-full px-4 py-4 duration-100 ease-in-out lg:w-full lg:px-16 rounded-xs lg:group-hover:py-0 lg:group-hover:px-12">
        <img src="{{ asset('assets/images/vectors/CalendarIcon.svg') }}" alt="" class="w-full">
    </div>
    <div class="lg:text-center lg:my-4 max-lg:ms-4">
        <h3 class="font-black tracking-wide text-primary-700 text-subtitle">
            {{ $schedule->date->translatedFormat('l, j F Y') }}</h3>
        <p class="mt-2 font-semibold max-md:text-detail line-clamp-1">{{ $schedule->title }}</p>
    </div>
</div>
