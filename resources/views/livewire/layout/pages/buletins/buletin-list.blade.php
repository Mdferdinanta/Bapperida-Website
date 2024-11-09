<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Buletin Pembangunan') }}
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
            <div class="grid grid-cols-2 gap-4 my-8 md:grid-cols-3 xl:grid-cols-4">
                @foreach ($documents as $document)
                    <livewire:layout.pages.buletins.buletin-card :document="$document" />
                @endforeach
            </div>


        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
