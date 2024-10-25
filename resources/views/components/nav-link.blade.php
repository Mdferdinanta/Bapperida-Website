@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 h-full border-b-4 border-primary-500 text-body font-bodyNormal text-primary-600 focus:outline-none focus:border-primary-600 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 h-full border-b-4 border-transparent text-body font-bodyNormal text-neutral-900 hover:text-primary-400 focus:outline-none focus:text-primary-600 focus:border-primary-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
