<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'inline-flex items-center 
                    px-4 py-2 
                    bg-white 
                    border-2 border-primary-200 
                    rounded-xs 
                    font-semibold text-xs text-neutral-900 
                    uppercase tracking-widest 
                    hover:bg-primary-50 focus:bg-primary-200 
                    active:bg-primary-50 focus:border-primary-400 
                    active:ring-2 active:ring-primary-200 active:ring-offset-2 
                    disabled:opacity-25 
                    transition ease-in-out duration-150',
    ]) }}>
    {{ $slot }}
</button>
