<div class="container flex mx-auto border-b border-neutral-300 justify-center pt-4 pb-8">
    <button
        {{ $attributes->merge([
            'type' => 'button',
            'class' => 'inline-flex items-center
                            font-bodyBold text-body text-primary-500  
                            hover:text-primary-200 focus:text-primary-600  
                            disabled:opacity-25
                            transition ease-in-out duration-150',
        ]) }}>
        {{ $slot }}
    </button>
</div>
