@php
    $classes = 'inline-flex
    items-center px-4 py-2
    bg-primary-500
    rounded-xs font-semibold
    text-detail text-white
    tracking-wider uppercase
    hover:bg-primary-700
    focus:bg-primary-700
    active:bg-primary-900
    focus:outline-none
    focus:ring-2
    focus:ring-primary-500
    focus:ring-offset-1
    transition ease-in-out
    duration-150';
@endphp

<button {{ $attributes->merge([
            'type' => 'submit',
            'class' => $classes,
        ]) }}>
    {{ $slot }}
</button>
