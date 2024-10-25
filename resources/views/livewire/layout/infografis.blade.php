<div>
    <div class="container w-full h-[540px] flex gap-4 mx-auto justify-center items-center">

        {{-- <button type="submit" class="px-2 leading-loose rounded-full hover:bg-primary-50 focus:bg-primary-100">
            <i class="ri-arrow-left-wide-line ri-3x text-primary-800"></i>
        </button>

        Cards
        <div class="h-auto p-4 w-80">
            Image
            <div>
                <img src="{{ asset('assets/img/Buletin-2.jpg') }}" alt=""
                    class="object-cover shadow-md rounded-xs">
            </div>
            Label
            <div class="my-4">
                <h3 class="text-center text-subtitle font-subtitleBold">Judul Infografis</h3>
            </div>
        </div>

        <button type="submit" class="px-2 leading-loose rounded-full hover:bg-primary-50 focus:bg-primary-100">
            <i class="ri-arrow-right-wide-line ri-3x"></i>
        </button> --}}



        <div id="controls-carousel" class="relative w-full mx-auto" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative w-56 overflow-hidden rounded-md h-80">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out w-80" data-carousel-item>
                    <img src="{{ asset('assets/img/Buletin-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                    <img src="{{ asset('assets/img/Buletin-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Buletin-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Buletin-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ asset('assets/img/Buletin-2.jpg') }}"
                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer start-0 group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M5 1 1 5l4 4" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button"
                class="absolute top-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer end-0 group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>

    </div>
    <div class="flex justify-center my-4">
        <x-link-button>
            Lihat semua
            <i class="ml-2 ri-arrow-right-double-line"></i>
            </x-secondary-button>
    </div>
</div>
