@php

    $classes = 'inline-block
                py-2 mt-2
                font-medium
                cursor-pointer
                text-detail
                text-primary-500
                hover:underline
                hover:text-primary-800';

@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
    &raquo
</a>
