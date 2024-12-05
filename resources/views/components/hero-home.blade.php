<div
            class="relative w-full h-96 sm:h-[540px] xl:h-[640px] overflow-hidden flex flex-col justify-center items-center">
            <div class="absolute inset-0 object-cover max-w-full min-h-screen overflow-hidden bg-top bg-cover brightness-50 aspect-auto"
                style="background-image: url({{ asset('assets/hero/hero-1.jpg') }});">
            </div>
            <div class="z-10 content-center w-full h-full">
                <div
                    class="flex flex-col items-center justify-center w-full px-4 text-center text-shadow shadow-black md:px-0">
                    <span
                        class="font-black tracking-tight text-white uppercase text-headline sm:text-h3 xl:text-h1 font-display">Badan
                        Perencanaan
                        Pembangunan Riset Dan Inovasi Daerah</span>
                    <span
                        class="font-black tracking-tight text-yellow-200 uppercase text-headline sm:text-h3 xl:text-h1 font-display">Kota
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
