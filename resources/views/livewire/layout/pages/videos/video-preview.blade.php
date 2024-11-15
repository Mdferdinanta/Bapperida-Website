<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        Video
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4">

            {{-- Search Kategori --}}
            <div class="flex flex-col gap-4 max-lg:mx-8 sm:flex-row sm:justify-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="my-8 flex flex-col gap-8">
                <div class="p-4 bg-white sm:rounded-sm shadow-md">
                    <h1
                        class="font-black text-primary-900 text-center md:text-subtitle lg:text-subtitle xl:text-headline ">
                        {{ $video->judul }}
                    </h1>

                    <div class="container relative py-4 mx-auto">
                        <iframe class="w-full md:rounded-xs aspect-video aspect-ratio:16/9"
                            src="{{ $video->type === 'Youtube' ? 'https://www.youtube.com/embed/' . $video->embed : 'https://drive.google.com/file/d/' . $video->embed . '/preview' }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                    <p class="tracking-wide my-4 text-justify text-detail lg:text-body">
                        {{ $video->deskripsi }}
                    </p>
                </div>

                <div class="p-2 bg-white space-y-4 sm:rounded-sm shadow-md">

                    <h3 class="font-bold p-2 text-subtitle lg:text-headline">
                        <i class="font-bold ri-arrow-right-s-line text-primary-500"></i>
                        Rekomendasi Video
                    </h3>

                    <div class="flex justify-evenly">
                        {{-- Recommended Video Cards --}}
                        @foreach ($recommended as $item)
                            <livewire:layout.pages.videos.video-rec-card :video="$item" />
                        @endforeach
                    </div>

                </div>
            </div>


        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
