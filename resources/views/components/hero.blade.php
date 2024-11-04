<div class="bg-top bg-no-repeat bg-cover"
    style="background-image: url({{ asset('assets/img/tugu-2.jpg') }});">
    <div
        class="flex items-center justify-center h-full text-center bg-indigo-950 bg-opacity-60 hero-content">
        <div class="flex flex-col items-center py-20 mx-auto text-shadow lg:text-shadow-lg shadow-black lg:py-40">
            <h1 class="font-black tracking-wider text-white uppercase text-h3 md:text-h2 lg:text-h1 xl:text-display">{{ $slot }}</h1>
        </div>
    </div>
</div>
