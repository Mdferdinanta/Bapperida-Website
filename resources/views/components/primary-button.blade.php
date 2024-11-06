<button
    {{ $attributes->merge([
        'type' => 'submit',
        'class' => 'inline-flex items-center
                    px-3 py-2
                    bg-primary-500 rounded-xs
                    border border-transparent
                    text-white tracking-widest
                    hover:bg-primary-700 focus:bg-primary-800
                    active:bg-primary-900 focus:outline-none
                    :ring-2 focus:ring-indigo-500 focus:ring-offset-2
                    transition ease-in-out duration-150',
    ]) }}>
    {{ $slot }}
</button>
