<div class="py-12">
    <div class="mx-auto max-w-7xl">
        <!-- Set up your HTML -->
        <div class="owl-carousel owl-theme" wire:ignore>
            @foreach ($infographics as $infographic)
                <div class="flex flex-col items-center item">
                    <img src="{{ asset('storage/' . $infographic->image) }}" alt="{{ $infographic->name }}">
                    <div class="p-2 mt-4">
                        <span class="font-semibold tracking-wide text-gray-700 sm:text-subtitle">{{ $infographic->name }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('.owl-carousel').owlCarousel({
                autoplay: true,
                autoplayTimeout: 5000,
                autoplayHoverPause: false,
                center: true,
                loop: true,
                margin: 30,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    620: {
                        items: 2,
                        nav: false
                    },
                    1280: {
                        items: 3,
                        nav: false,
                    }
                }
            })
        });
    </script>
</div>
