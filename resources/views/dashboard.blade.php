<x-app-layout>
    <x-slot:header>
        <div
            class="relative w-full h-96 sm:h-[540px] xl:h-[640px] overflow-hidden flex flex-col justify-center items-center">
            <div class="brightness-50 absolute inset-0 object-cover aspect-auto overflow-hidden max-w-full min-h-screen bg-top bg-cover"
                style="background-image: url({{ asset('assets/hero/hero-1.jpg') }});">
            </div>
            <div class="z-10 w-full content-center h-full">
                <div
                    class="flex flex-col text-center text-shadow shadow-black justify-center w-full items-center px-4 md:px-0">
                    <span
                        class="text-white font-black text-headline sm:text-h3 xl:text-h1 tracking-tight font-display uppercase">Badan
                        Perencanaan
                        Pembangunan Riset Dan Inovasi Daerah</span>
                    <span
                        class="text-yellow-200 font-black text-headline sm:text-h3 xl:text-h1 tracking-tight font-display uppercase">Kota
                        Bogor</span>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    const images = [
                        "{{ asset('assets/hero/hero-1.jpg') }}",
                        "{{ asset('assets/hero/hero-2.jpg') }}"
                    ];
                    let currentIndex = 0;
                    const bgElement = document.querySelector('.brightness-50');

                    function changeBackground() {
                        currentIndex = (currentIndex + 1) % images.length;
                        bgElement.style.backgroundImage = `url(${images[currentIndex]})`;
                    }

                    setInterval(changeBackground, 5000); // Change image every 5 seconds
                });
            </script>
        </div>
    </x-slot:header>

    {{-- Tabs --}}
    <div class="py-12">
        <div class="mx-auto max-w-7xl overflow-hidden bg-white shadow-sm sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Tabs') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bapperida News --}}
    <div class="py-12 bg-white shadow-sm">
        <div class="mx-auto max-w-7xl overflow-hidden sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Bapperida News') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Infographics --}}
    <div class="py-12">
        <div class="mx-auto max-w-7xl overflow-hidden bg-white shadow-sm sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Infographics') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bogor News --}}
    <div class="py-12 bg-white shadow-sm">
        <div class="mx-auto max-w-7xl overflow-hidden sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Bogor News') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Schedules --}}
    <div class="py-12">
        <div class="mx-auto max-w-7xl overflow-hidden bg-white shadow-sm sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Schedules') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Activity Gallery --}}
    <div class="py-12 bg-white shadow-sm">
        <div class="mx-auto max-w-7xl overflow-hidden sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Activity Gallery') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Social Media --}}
    <div class="py-12">
        <div class="mx-auto max-w-7xl overflow-hidden bg-white shadow-sm sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Social Media') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div class="py-12 bg-white shadow-sm">
        <div class="mx-auto max-w-7xl overflow-hidden sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Contact') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Maps --}}
    <div class="py-12">
        <div class="mx-auto max-w-7xl overflow-hidden bg-white shadow-sm sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Maps') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bapperida News --}}
    <div class="py-12 bg-white shadow-sm">
        <div class="mx-auto max-w-7xl overflow-hidden sm:rounded-sm">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
