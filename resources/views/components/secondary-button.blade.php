@php
    $classes = 'inline-flex
    items-center px-4 py-2
    bg-white
    border border-primary-300
    rounded-xs font-semibold
    text-detail text-primary-700
    uppercase tracking-wider
    shadow-sm hover:bg-primary-50
    focus:outline-none
    focus:ring-2
    focus:ring-indigo-500
    focus:ring-offset-2
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
