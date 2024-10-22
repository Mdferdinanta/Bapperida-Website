<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center 
                    px-4 py-2 
                    bg-primary-500 rounded-sm  
                    border border-transparent 
                    font-bodyBold text-neutral-50
                    tracking-widest 
                    hover:bg-primary-700 focus:bg-primary-900 
                    active:bg-primary-500 focus:outline-none 
                    active:ring-2 active:ring-primary-400 active:ring-offset-2 
                    transition ease-in-out duration-150',
    ]) }}>
    {{ $slot }}
</button>
