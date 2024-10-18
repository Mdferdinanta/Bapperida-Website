<div class="h-[200px] md:h-[500px] hero" style="background-image: url({{ asset('assets/img/3.jpg') }});">
    <div
        class="flex items-center justify-center h-full text-center bg-opacity-40 bg-slate-900 hero-content text-neutral-50">
        <div class="max-w-3xl">
            <h1 class="text-h2 font-bold md:text-h1 md:font-extrabold drop-shadow-xl">
                {{ $slot }}
            </h1>
        </div>
    </div>
</div>
