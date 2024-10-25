<div class="h-[200px] md:h-[300px] mt-[76px]" style="background-image: url({{ asset('assets/img/3.jpg') }});">
    <div
        class="flex items-center justify-center h-full text-center bg-opacity-40 bg-slate-900 hero-content text-neutral-50">
        <div class="max-w-6xl">
            <h1 class="text-display font-displayBold text-shadow-lg shadow-black">
                {{ $slot }}
            </h1>
        </div>
    </div>
</div>
