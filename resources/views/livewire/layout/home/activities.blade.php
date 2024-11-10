<div>
    <div class="max-w-full">
        <div
            class="flex flex-col items-center justify-center px-8 py-4 overflow-hidden bg-white shadow-sm xl:px-64 lg:px-32 md:px-16">

            {{-- Section Title --}}
            <x-section-title>{{ __('Kegiatan') }}</x-section-title>

            <div class="grid items-center justify-center grid-cols-6 gap-4 py-4 md:grid-cols-8">
                @foreach ($images as $index => $image)
                    @php
                        $classes = [
                            'col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-2 rounded-xs',
                            'col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-4 rounded-xs',
                            'col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-1 rounded-xs md:col-start-6',
                            'col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-3 rounded-xs md:col-start-1',
                            'col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-5 rounded-xs md:col-start-3',
                            'col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-2 rounded-xs md:col-start-5',
                            'col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-4 rounded-xs md:col-start-7',
                            'hidden col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-2 rounded-xs md:block',
                            'hidden col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-4 rounded-xs md:block',
                            'hidden col-span-2 h-20 sm:h-32 lg:h-48 object-cover w-full col-start-6 rounded-xs md:block',
                        ];
                        $class = $classes [ $index % count($classes) ];
                    @endphp
                    <img src="{{ asset('storage/' . $image->foto) }}" alt="{{ $image->nama }}" class="{{ $class }}">
                @endforeach
            </div>

            {{-- Link --}}
            <x-section-redirect-all>{{ __('Lihat Semua') }}</x-section-redirect-all>

        </div>
    </div>
</div>
