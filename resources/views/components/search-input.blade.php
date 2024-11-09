@props(['disabled' => false])

<div class="relative w-1/2">
    <input @disabled($disabled) type="text" placeholder="Search"
        class="w-full px-4 border shadow-sm border-mist-300 rounded-xs focus:border-primary-300 focus:ring-primary-300">
    <x-secondary-button class="absolute top-0 right-0 h-full rounded-l-none">
        <i class="ri-search-line"></i>
    </x-secondary-button>
</div>
