@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center
            px-2 border-y-2
            border-t-transparent border-b-primary-400
            text-body font-semibold
            text-gray-900
            focus:outline-none
            focus:border-primary-700
            transition duration-150 ease-in-out'
            : 'inline-flex items-center
            px-2
            border-y-2 border-transparent
            text-body
            text-gray-700
            hover:text-gray-900
            hover:border-gray-300
            focus:outline-none
            focus:text-gray-700
            focus:border-gray-300
            transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
