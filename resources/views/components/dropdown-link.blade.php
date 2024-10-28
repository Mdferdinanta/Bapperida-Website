@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'block w-full
                px-4 py-2
                text-start text-body text-neutral-900
                bg-primary-100
                transition duration-150 ease-in-out'
            : 'block w-full
                px-4 py-2
                text-start text-body text-neutral-900
                hover:bg-primary-100
                focus:outline-none focus:bg-primary-100
                transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
