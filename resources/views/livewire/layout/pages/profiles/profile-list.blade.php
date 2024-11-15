<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Pejabat BAPPERIDA') }}
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4 lg:pr-8">

            {{-- Search Kategori --}}
            <div class="flex flex-col w-full gap-4 sm:flex-row sm:justify-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="grid items-end gap-4 my-8 md:grid-cols-3 xl:grid-cols-4">
                @foreach ($staffs as $staff)
                    <livewire:layout.pages.profiles.profile-card :staff="$staff" />
                @endforeach

            </div>

            {{ $staffs->links() }}

        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
