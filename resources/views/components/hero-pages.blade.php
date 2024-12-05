<div class="relative w-full h-40 sm:h-56 xl:h-64 overflow-hidden flex flex-col justify-center items-center">
    <div class="absolute inset-0 object-cover max-w-full min-h-screen overflow-hidden bg-center bg-cover brightness-50 aspect-auto"
        style="background-image: url({{ asset('assets/hero/hero-1.jpg') }});">
    </div>
    <div class="z-10 content-center w-full h-full">
        <div class="flex flex-col items-center justify-center w-full px-4 text-center text-shadow shadow-black md:px-0">
            <span
                class="font-black tracking-widest text-white uppercase text-h3 sm:text-h2 lg:text-h1 xl:text-display font-display">{{ $slot }}</span>
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
