<div>
    <div class="max-w-full">
        <div class="flex flex-col items-center justify-center px-8 py-4 overflow-hidden bg-white shadow-sm xl:px-64 lg:px-32 md:px-16">

            {{-- Section Title --}}
            <x-section-title>{{ __('Kegiatan') }}</x-section-title>

            <div class="grid items-center justify-center grid-cols-6 gap-4 py-4 md:grid-cols-8">
                <img src="{{ asset('storage/assets/thumbnails/gallery-1.jpg') }}" alt="Image 1" class="col-span-2 col-start-2 rounded-xs">
                <img src="{{ asset('storage/assets/thumbnails/gallery-3.jpg') }}" alt="Image 1" class="col-span-2 col-start-4 rounded-xs">
                <img src="{{ asset('storage/assets/thumbnails/gallery-6.jpg') }}" alt="Image 1" class="col-span-2 col-start-1 rounded-xs md:col-start-6">
                <img src="{{ asset('storage/assets/thumbnails/gallery-2.jpg') }}" alt="Image 1" class="col-span-2 col-start-3 rounded-xs md:col-start-1">
                <img src="{{ asset('storage/assets/thumbnails/gallery-8.jpg') }}" alt="Image 1" class="col-span-2 col-start-5 rounded-xs md:col-start-3">
                <img src="{{ asset('storage/assets/thumbnails/gallery-4.jpg') }}" alt="Image 1" class="col-span-2 col-start-2 rounded-xs md:col-start-5">
                <img src="{{ asset('storage/assets/thumbnails/gallery-3.jpg') }}" alt="Image 1" class="col-span-2 col-start-4 rounded-xs md:col-start-7">

                {{-- Additional Items --}}
                <img src="{{ asset('storage/assets/thumbnails/gallery-1.jpg') }}" alt="Image 1" class="hidden col-span-2 col-start-2 rounded-xs md:block">
                <img src="{{ asset('storage/assets/thumbnails/gallery-5.jpg') }}" alt="Image 1" class="hidden col-span-2 col-start-4 rounded-xs md:block">
                <img src="{{ asset('storage/assets/thumbnails/gallery-2.jpg') }}" alt="Image 1" class="hidden col-span-2 col-start-6 rounded-xs md:block">
            </div>

            {{-- Link --}}
            <x-section-redirect-all>{{ __('Lihat Semua') }}</x-section-redirect-all>

        </div>
    </div>
</div>
