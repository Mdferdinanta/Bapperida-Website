@props(['disabled' => false])

<div class="relative w-full lg:w-1/2">
    <input @disabled($disabled) type="text" placeholder="Search"
        class="w-full px-4 border-none rounded-sm shadow-md border-mist-300 focus:border-primary-300 focus:ring-primary-300">
    <x-secondary-button class="absolute top-0 right-0 h-full border-none rounded-sm rounded-l-none hover:bg-transparent hover:text-primary-500">
        <i class="ri-search-line"></i>
    </x-secondary-button>
</div>
