@props(['disabled' => false])

@php
    $classes =
        'w-full border-mist-300 rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400';
@endphp

<div class="w-full md:w-1/2">
    <input @disabled($disabled)
        {{ $attributes->merge([
            'type' => 'search',
            'class' => $classes,
        ]) }}>
</div>
