<a
    {{ $attributes->merge([
        'class' => 'block w-full px-4 py-2 
                    text-start text-sm 
                    leading-5 text-neutral-900 
                    hover:bg-mist-100 focus:outline-none 
                    focus:bg-mist-100 transition duration-150 ease-in-out',
    ]) }}>
    {{ $slot }}</a>