@php
    $classes = 'inline-flex
    items-center
    bg-white
    border
    rounded-xs
    shadow-sm
    focus:ring-1
    disabled:opacity-25
    transition ease-in-out
    duration-150';
@endphp

<button {{ $attributes->merge([
            'type' => 'button',
            'class' => $classes,
        ]) }}>
    {{ $slot }}
</button>
