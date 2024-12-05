<div class="py-12">
    {{-- Title --}}
    <x-home-section-title>
        {{ __('Infografis') }}
    </x-home-section-title>

    {{-- Content --}}
    <div class="mx-auto max-w-7xl">
        <!-- Set up your HTML -->
        <div class="owl-carousel infograph-carousel owl-theme">
            @foreach ($infographics as $infographic)
                <div class="flex flex-col items-center item">
                    <img src="{{ asset('storage/' . $infographic->image) }}" alt="{{ $infographic->name }}"
                        class="shadow-lg shadow-slate-300 rounded-xs">
                    <div class="p-2 mt-4">
                        <span class="font-semibold tracking-wide text-gray-700 sm:text-subtitle">{{ $infographic->name }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
