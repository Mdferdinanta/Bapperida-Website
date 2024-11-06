<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Video') }}
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4">

            {{-- Search Kategori --}}
            <div class="flex flex-col gap-4 mx-8 ml-auto lg:flex-row min-md:items-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="grid grid-cols-1 gap-4 m-8 md:grid-cols-2 xl:grid-cols-3">
                <livewire:layout.pages.videos.video-card />
            </div>

            {{-- Pagination --}}
            {{-- <div class="m-8">
                {{ $videos->links() }}
            </div> --}}

        </div>

        {{-- Berita --}}
        <div class="h-full lg:w-1/4 lg:pl-8 lg:border-l-2 border-misty-300">
            {{-- Judul --}}
            <div class="max-lg:my-8">
                <h3 class="text-subtitle lg:text-headline font-subtitleBold">
                    <i class="ri-arrow-right-s-line"></i>
                    Berita Terbaru
                </h3>
            </div>

            {{-- Konten --}}
            <div>
                {{-- <x-berita-card></x-berita-card> --}}
            </div>
        </div>

    </main>

</x-app-layout>
