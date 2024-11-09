<button
    {{ $attributes->merge([
        'type' => 'button',
        'class' => 'inline-flex
                    items-center
                    px-4 py-2
                    bg-transparent border
                    border-mist-300
                    rounded-xs
                    font-semibold
                    text-xs text-gray-700
                    uppercase tracking-widest
                    shadow-sm hover:bg-primary-100
                    focus:outline-none
                    focus:bg-primary-100
                    disabled:opacity-25
                    transition
                    ease-in-out
                    duration-150',
    ]) }}>
    {{ $slot }}
</button>
