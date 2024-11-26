<div class="py-12">
    <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
        <div class="w-full owl-carousel"> {{-- owl-carousel owl-theme --}}
            <!-- Slides -->
            <div class="p-2 sm:p-4">
                <img src="{{ asset('assets/placeholder/infograph/asn_berakhlak_pak_kaban.jpg') }}" alt="Image 1"
                    class="w-full shadow-lg">
                <div>
                    <h5 class="mt-2 font-semibold text-center">nama Infografis</h5>
                </div>
            </div>
            <div class="p-2 sm:p-4">
                <img src="{{ asset('assets/placeholder/infograph/asn_berakhlak_pak_kaban.jpg') }}" alt="Image 1"
                    class="w-full shadow-lg">
                <div>
                    <h5 class="mt-2 font-semibold text-center">nama Infografis</h5>
                </div>
            </div>
            <div class="p-2 sm:p-4">
                <img src="{{ asset('assets/placeholder/infograph/asn_berakhlak_pak_kaban.jpg') }}" alt="Image 1"
                    class="w-full shadow-lg">
                <div>
                    <h5 class="mt-2 font-semibold text-center">nama Infografis</h5>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
</div>
