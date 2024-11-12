<div>

    <div class="max-w-full">
        <div class="flex flex-col items-center justify-center px-8 py-4 mx-auto overflow-hidden shadow-sm bg-mist-100">

            {{-- Section Title --}}
            <x-section-title href="">{{ __('Infografis') }}</x-section-title>

            <div class="w-full my-4 sm:my-8 owl-carousel owl-theme">
                <!-- Slides -->
                @foreach ($infographics as $infographic)
                    <div class="p-2 sm:p-4">
                        <img src="{{ asset('storage/' . $infographic->thumbnail) }}" alt=""
                            class="w-full shadow-lg">
                        <div>
                            <h5 class="mt-2 font-semibold text-center">{{ $infographic->judul }}</h5>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

</div>
