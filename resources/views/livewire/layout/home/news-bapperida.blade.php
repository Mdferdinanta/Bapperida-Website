<div>
    <div class="max-w-full">
        <div
            class="flex flex-col items-center justify-center px-4 py-4 mx-auto overflow-hidden bg-white shadow-sm">

            {{-- Section Title --}}
            <x-section-title>{{ __('Berita Terbaru') }}</x-section-title>

            <div class="container justify-center w-full text-justify lg:grid max-lg:divide-y-2 lg:px-4 divide-neutral-300 lg:gap-8 lg:grid-cols-2">

                {{-- Left Card --}}
                {{-- Main Card --}}
                <x-news-main-card>
                    <x-slot:thumbnail>{{ asset('assets/img/gallery-4.jpg') }}</x-slot:thumbnail>
                    <x-slot:title>{{ __('Judul Berita') }}</x-slot:title>
                    <x-slot:datetime>{{ __('Tanggal | Waktu') }}</x-slot:datetime>
                    {{ __('Deskripsi Berita') }}
                </x-news-main-card>

                {{-- Right Cards --}}
                <div class="grid max-md:divide-y-2 md:gap-x-8 md:grid-rows-2 md:grid-cols-2 divide-neutral-300">

                    {{-- Cards --}}
                    <x-news-small-card>
                        <x-slot:thumbnail>{{ asset('assets/img/gallery-4.jpg') }}</x-slot:thumbnail>
                        <x-slot:title>{{ __('Judul Berita') }}</x-slot:title>
                        <x-slot:datetime>{{ __('Tanggal | Waktu') }}</x-slot:datetime>
                        {{ __('Deskripsi Berita') }}
                    </x-news-small-card>
                    <x-news-small-card>
                        <x-slot:thumbnail>{{ asset('assets/img/gallery-4.jpg') }}</x-slot:thumbnail>
                        <x-slot:title>{{ __('Judul Berita') }}</x-slot:title>
                        <x-slot:datetime>{{ __('Tanggal | Waktu') }}</x-slot:datetime>
                        {{ __('Deskripsi Berita') }}
                    </x-news-small-card>
                    <x-news-small-card>
                        <x-slot:thumbnail>{{ asset('assets/img/gallery-4.jpg') }}</x-slot:thumbnail>
                        <x-slot:title>{{ __('Judul Berita') }}</x-slot:title>
                        <x-slot:datetime>{{ __('Tanggal | Waktu') }}</x-slot:datetime>
                        {{ __('Deskripsi Berita') }}
                    </x-news-small-card>
                    <x-news-small-card>
                        <x-slot:thumbnail>{{ asset('assets/img/gallery-4.jpg') }}</x-slot:thumbnail>
                        <x-slot:title>{{ __('Judul Berita') }}</x-slot:title>
                        <x-slot:datetime>{{ __('Tanggal | Waktu') }}</x-slot:datetime>
                        {{ __('Deskripsi Berita') }}
                    </x-news-small-card>

                </div>

            </div>

        </div>
    </div>
</div>
