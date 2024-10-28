<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Homepage') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex p-6">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    {{-- Social Media --}}
    <div class="">
        <div class="max-w-full mx-20 sm:px-6 lg:px-8">
            <div class="flex justify-center px-64 py-8 overflow-hidden bg-white shadow-sm">
                <iframe src="https://snapwidget.com/embed/1066641" class="snapwidget-widget post-ig border-0 overflow-hidden bg-red-200 w-full xl:h-[800px] lg:h-[200px] md:h-[200px]"
                    allowtransparency="true" frameborder="0" scrolling="no" title="Posts from Instagram">
                </iframe>
            </div>
        </div>
    </div>


    {{-- Contact --}}
    <livewire:layout.home.contact />

    {{-- Map Section --}}
    <x-gmaps />

</x-app-layout>
