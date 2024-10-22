<div class="container max-w-full py-8 justify-center items-center inline-flex">
    <div class="grow shrink basis-0 self-stretch flex-col justify-start items-center gap-5 inline-flex">
        <h2 class="text-primary-800 text-h2 font-h1Bold">
            {{ $slot }}
        </h2>
        <div class="self-stretch justify-center items-center inline-flex">
            <div class="w-16 h-px bg-neutral-300"></div>
            <div class="w-16 h-1 bg-primary-500"></div>
            <div class="w-16 h-px bg-neutral-300"></div>
        </div>
    </div>
</div>