<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Homepage') }}
        </h2>
    </x-slot> --}}

    {{-- Hero --}}
    <livewire:layout.home.hero>

    {{-- Bogor City News --}}
    <livewire:layout.home.news-bapperida />

    {{-- Bogor City News --}}
    <livewire:layout.home.infographics />

    {{-- Bogor City News --}}
    <livewire:layout.home.news-bogor />

    {{-- Schedule --}}
    <livewire:layout.home.schedules />

    {{-- Activity Gallery --}}
    <livewire:layout.home.activities />

    {{-- Social Media --}}
    <livewire:layout.home.media />

    {{-- Contact --}}
    <livewire:layout.home.contact />

    {{-- Map Section --}}
    <x-gmaps />

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check if the URL contains the #contact anchor
            if (window.location.hash === '#contact') {
                const targetElement = document.getElementById('contact');
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop,
                        behavior: 'smooth'
                    });
                }
            }
        });
    </script>


</x-app-layout>
