<x-app-layout>
    <x-slot:header>
        <x-hero-home></x-hero-home>
    </x-slot:header>

    {{-- Bapperida News --}}
    <livewire:layout.home.home-news />

    {{-- Infographics --}}
    <livewire:layout.home.infographics />

    {{-- Bogor News --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        {{-- Title --}}
        <x-home-section-title>
            {{ __('Berita Kota Bogor') }}
        </x-home-section-title>

        {{-- Content --}}
        <div class="mx-auto overflow-hidden max-w-7xl">
            <div class="flex justify-center items-center text-center p-6">

                {{-- API --}}

            </div>
        </div>
    </div>

    {{-- Schedules --}}
    <livewire:layout.home.home-schedule />

    {{-- Activity Gallery --}}
    <livewire:layout.home.home-gallery />

    {{-- Social Media --}}
    <div class="py-12">
        {{-- Title --}}
        <x-home-section-title>
            {{ __('Media Sosial') }}
        </x-home-section-title>

        {{-- Content --}}
        <div class="mx-auto p-6 overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="flex justify-center items-center">
                {{-- <iframe src="https://snapwidget.com/embed/1066641"
                    allowtransparency="true" frameborder="0" scrolling="no" title="Posts from Instagram">
                </iframe> --}}
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <livewire:layout.home.home-contact />

    {{-- Form Visit --}}
    <div class="py-12">
        {{-- Content --}}
        <div
            class="mx-auto px-6 pt-8 overflow-hidden bg-gradient-to-r to-primary-300 from-primary-500 max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="flex justify-center items-center">
                <div class="h-80 hidden md:block shrink-0">
                    <img src="{{ asset('assets/images/vectors/pns-ils.png') }}" class="h-full">
                </div>
                <div class="mx-6 flex flex-col gap-6 pb-8">
                    <h5 class="text-subtitle font-bold tracking-wide lg:text-headline text-pretty">Mau berkunjung ke
                        BAPPERIDA Kota Bogor?</h5>
                    <span class="max-lg:text-detail font-medium tracking-wide text-justify text-pretty">Kami menerima
                        kunjungan dari luar khusus setiap hari Rabu. Silahkan isi formulir permohonan kunjungan,
                        kemudian tunggu email konfirmasi persetujuan dari kami.</span>
                    <div>
                        <a href='{{ route('visit') }}'" wire:navigate
                            class="px-4 py-2 inline-flex items-center bg-white border rounded-xs shadow-sm focus:ring-1 transition ease-in-out duration-150 text-detail lg:text-body text-primary-700 hover:bg-gray-100 hover:shadow-inner font-semibold">
                            <i class="ri-pencil-fill mr-2"></i>
                            {{ __('Form Kunjungan') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Maps --}}
    {{-- <x-maps></x-maps> --}}

</x-app-layout>
