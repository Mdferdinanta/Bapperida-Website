<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        Video
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
            <div class="my-8">
                <div class="p-4 bg-white border-y md:border md:rounded-xs border-mist-300">
                    <h1 class="font-bold text-center md:text-subtitle lg:text-subtitle xl:text-headline ">
                        {{ $video->judul }}</h1>

                    <div class="text-white ">
                        <div class="container py-4 mx-auto">
                            <div class="relative">
                                <div class="flex items-center justify-between">

                                    <div class="flex justify-center w-full aspect-video aspect-ratio:16/9">
                                        <iframe class="w-full rounded-xs"
                                            src="https://www.youtube.com/embed/{{ $video->embed }}"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                        </iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p
                        class="mb-4 leading-relaxed tracking-wide text-justify text-detail md:text-body lg:text-subtitle ">
                        {{ $video->deskripsi }}</p>
                </div>
            </div>


        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
