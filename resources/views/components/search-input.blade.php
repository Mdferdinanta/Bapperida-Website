@props(['disabled' => false])

<div
    {{ $attributes->merge([
        'class' => 'px-4 bg-white border shadow-sm border-mist-200 rounded-xs focus:border-mist-300 focus:ring-0 focus:bg-primary-50',
    ]) }}>
    <input @disabled($disabled) type="text" placeholder="Search"
        class="bg-transparent border-0 focus:border-0 focus:ring-0">
    <button type="submit">
        <i class="ri-search-2-line"></i>
    </button>
</div>
