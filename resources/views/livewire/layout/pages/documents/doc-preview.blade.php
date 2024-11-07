<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        Penelitian Pengembangan
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
                    <div class="p-2 bg-white border rounded-xs border-mist-300">
                        <h1 class="text-center text-body font-h1Bold md:text-subtitle lg:text-subtitle xl:text-headline ">SmartWaste: Inovasi Pengelolaan Sampah Berbasis Teknologi AI</h1>
                            {{-- Iframe for PDF preview --}}
                            <div class="relative mt-4 overflow-hidden">
                                <iframe
                                    src="{{ asset('assets/doc/doc-1.pdf') }}"
                                    class="w-full h-[60vh] md:h-[95vh] lg:h-[100vh]">
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
