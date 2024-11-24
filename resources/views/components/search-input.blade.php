@props(['disabled' => false])

@php
    // $classes = 'relative w-full overflow-hidden rounded-xs lg:w-1/2';
    $inputClasses = 'w-full px-4 rounded-xs border-gray-300 focus:border-primary-300 focus:ring-primary-300';
    // $buttonClasses = 'absolute top-0 right-0 h-full px-4 font-semibold text-gray-500 hover:text-primary-500';
@endphp

<form class="relative w-full overflow-hidden rounded-xs lg:w-1/2">
    <input @disabled($disabled) {{ $attributes->merge([
        'type' => 'search',
        'class' => $inputClasses,
    ]) }}>
    {{-- <button {{ $attributes->merge([
        'type' => 'submit',
        'class' => $buttonClasses,
    ]) }}">
        <i class="ri-search-line"></i>
    </button> --}}
</form>
