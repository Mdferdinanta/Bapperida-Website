<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        {{ __('Buletin Pembangunan') }}
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4 ">

            {{-- Search Kategori --}}
            <div class="flex flex-col gap-4 mx-8 ml-auto md:flex-row min-md:items-end">
                <x-dropdown-select></x-dropdown-select>
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="m-8 ">
                <div>
                    <div class="p-4 bg-white border rounded-xs border-mist-300">
                        <h1 class="font-bold text-center text-body md:text-subtitle lg:text-subtitle xl:text-headline ">
                            {{ $document->nama }}</h1>
                        {{-- Iframe for PDF preview --}}
                        <div class="relative mt-4 overflow-hidden">
                            <iframe src="{{ $fileUrl }}" class="w-full h-[60vh] md:h-[95vh] lg:h-[100vh]"
                                frameborder="0">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>

</x-app-layout>
