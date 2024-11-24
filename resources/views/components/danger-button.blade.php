@php
    $classes = 'inline-flex
    items-center px-4 py-2
    bg-red-500
    rounded-xs font-semibold
    text-detail text-white
    tracking-wider uppercase
    hover:bg-red-700
    focus:bg-red-700
    active:bg-red-900
    focus:outline-none
    focus:ring-2
    focus:ring-red-500
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
