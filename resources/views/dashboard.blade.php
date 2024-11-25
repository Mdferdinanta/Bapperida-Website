<x-app-layout>
    <x-slot:header>
        <x-hero-home></x-hero-home>
    </x-slot:header>

    {{-- Tabs --}}
    <div class="py-12">
        <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Tabs') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bapperida News --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden max-w-7xl xl:rounded-md">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Bapperida News') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Infographics --}}
    <div class="py-12">
        <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Infographics') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bogor News --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden max-w-7xl xl:rounded-md">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Bogor News') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Schedules --}}
    <div class="py-12">
        <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Schedules') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Activity Gallery --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden max-w-7xl xl:rounded-md">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Activity Gallery') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Social Media --}}
    <div class="py-12">
        <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Social Media') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Contact --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden max-w-7xl xl:rounded-md">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Contact') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Maps --}}
    <div class="py-12">
        <div class="mx-auto overflow-hidden bg-white max-w-7xl xl:rounded-md xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __('Maps') }}
                </div>
            </div>
        </div>
    </div>

    {{-- Bapperida News --}}
    <div class="py-12 bg-white xl:shadow-md shadow-slate-300">
        <div class="mx-auto overflow-hidden max-w-7xl xl:rounded-md">
            <div class="">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
