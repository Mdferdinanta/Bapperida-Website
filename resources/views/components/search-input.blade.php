@props(['disabled' => false])

<div
    {{ $attributes->merge([
        'class' => 'bg-mist-50 px-4 border border-mist-200 rounded-xs shadow-sm',
    ]) }}>
    <input @disabled($disabled) type="text" placeholder="Search"
        class="border-0 bg-mist-50 focus:border-0 focus:ring-0">
    <button type="submit">
        <i class="ri-search-2-line"></i>
    </button>
</div>
