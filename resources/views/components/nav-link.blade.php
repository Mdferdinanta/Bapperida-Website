@props(['active'])

@php
    $classes =
        $active ?? false
            ? 'inline-flex items-center
            px-1 pt-1
            border-b-2 border-primary-400
            font-medium text-primary-800
            transition duration-150 ease-in-out'
            : 'inline-flex items-center
            px-1 pt-1
            border-b-2 border-transparent
            font-normal text-neutral-700
            hover:text-neutral-950 hover:border-neutral-300
            transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
