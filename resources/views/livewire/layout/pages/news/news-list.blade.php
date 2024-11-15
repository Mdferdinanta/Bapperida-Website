<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Berita BAPPERIDA') }}
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col py-8 mx-auto lg:flex-row">

        {{-- Cards --}}
        <div class="flex flex-col maxlg:mx-4 lg:w-3/4 lg:pr-4">

            {{-- Search Kategori --}}
            <div class="flex flex-col w-full gap-4 sm:flex-row sm:justify-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="flex flex-col gap-4 my-8">
                @foreach ($news as $item)
                    <livewire:layout.pages.news.news-card :news="$item" />
                @endforeach
            </div>
        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
