@php
    $classes = 'flex
    items-center justify-center
    mx-auto mt-4 font-medium
    text-primary-500
    hover:text-primary-700
    hover:underline
    max-md:text-detail
    max-w-7xl';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
