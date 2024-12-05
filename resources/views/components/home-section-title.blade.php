<div class="flex flex-col items-center w-full justify-start gap-2 mb-4 shrink">
    <a class="font-bold text-primary-900 lg:text-h3 text-headline">
        {{ $slot }}
    </a>
    <div class="inline-flex items-center self-stretch justify-center">
        <div class="w-8 h-px lg:w-16 bg-neutral-300"></div>
        <div class="w-8 h-0.5 lg:h-1 lg:w-16 bg-primary-500"></div>
        <div class="w-8 h-px lg:w-16 bg-neutral-300"></div>
    </div>
</div>
