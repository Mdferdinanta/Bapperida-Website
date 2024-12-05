@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center
            px-2 border-y-2
            border-t-transparent border-b-primary-400
            text-body font-semibold
            text-gray-900
            transition duration-150 ease-in-out'
            : 'inline-flex items-center
            px-2
            border-y-2 border-transparent
            text-body
            text-gray-700
            hover:text-gray-900
            hover:border-b-mist-300
            transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
