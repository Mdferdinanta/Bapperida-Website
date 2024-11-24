<div class="xl:bg-white p-6 xl:w-1/4">
    <div>
        {{-- Section Title --}}
        <a href="" class="text-subtitle font-bold tracking-wider uppercase" wire.navigate>
            <i class="ri-arrow-right-s-line ri-lg text-primary-500"></i>
            {{ __('Berita Terbaru') }}
        </a>

        {{-- News Cards --}}
        <div class="flex flex-col md:max-xl:flex-row gap-4 mt-6">
            {{-- Card --}}
            <div class="relative bg-gray-300 rounded-xs w-full h-64 overflow-hidden xl:h-48">
                <div
                    class="absolute bg-gray-900 gap-2 w-full bg-opacity-50 flex flex-col bottom-0 p-4">
                    <span class="text-detail text-yellow-200 tracking-wide">00 December 0000 | 00:00</span>
                    <span class="text-subtitle text-white font-semibold text-justify truncate">News title that is long enough to fill all the available
                        space for the news title. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                </div>
            </div>
            {{-- Card --}}
            <div class="relative bg-gray-300 rounded-xs w-full h-64 overflow-hidden xl:h-48">
                <div
                    class="absolute bg-gray-900 gap-2 w-full bg-opacity-50 flex flex-col bottom-0 p-4">
                    <span class="text-detail text-yellow-200 tracking-wide">00 December 0000 | 00:00</span>
                    <span class="text-subtitle text-white font-semibold text-justify truncate">News title that is long enough to fill all the available
                        space for the news title. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                </div>
            </div>
            {{-- Card --}}
            <div class="relative bg-gray-300 rounded-xs w-full h-64 overflow-hidden xl:h-48">
                <div
                    class="absolute bg-gray-900 gap-2 w-full bg-opacity-50 flex flex-col bottom-0 p-4">
                    <span class="text-detail text-yellow-200 tracking-wide">00 December 0000 | 00:00</span>
                    <span class="text-subtitle text-white font-semibold text-justify truncate">News title that is long enough to fill all the available
                        space for the news title. Lorem ipsum dolor sit, amet consectetur adipisicing elit.</span>
                </div>
            </div>
        </div>
    </div>
</div>
