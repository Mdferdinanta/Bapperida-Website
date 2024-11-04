<div class="container inline-flex items-center justify-center max-w-full py-8">
    <div class="inline-flex flex-col items-center self-stretch justify-start gap-5 grow shrink basis-0">
        <h2 class="text-primary-800 text-h2 font-h1Bold">
            {{ $slot }}
        </h2>
        <div class="inline-flex items-center self-stretch justify-center">
            <div class="w-16 h-px bg-neutral-300"></div>
            <div class="w-16 h-1 bg-primary-500"></div>
            <div class="w-16 h-px bg-neutral-300"></div>
        </div>
    </div>
</div>
