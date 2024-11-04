<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Berita</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col py-8 mx-auto lg:flex-row">

        {{-- News Field --}}
        <div class="flex flex-col lg:mr-8 lg:w-3/4">

            {{-- Content --}}
            <div class="p-8 bg-white lg:rounded-xs">
                <h1 class="mb-2 font-bold text-justify text-subtitle font-h3Bold md:text-headline xl:text-h3">
                    {{ $news->judul }}</h1>
                <p class="mb-4 text-detail md:text-body lg:text-body xl:text-subtitle ">
                    {{ $news->created_at->format('d M Y | H:i') }}</p>
                <div class="text-white ">
                    <div class="container py-2 mx-auto">
                        <div class="relative">
                            <div class="flex items-center justify-between">
                                <!-- Main Image -->
                                <div class="flex justify-center w-full">
                                    <img alt="berita terkini" class="w-full h-auto rounded"
                                        src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->judul }}"
                                        width="1200" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="my-4 leading-relaxed tracking-wide text-justify indent-8 text-detail lg:text-detail xl:text-body">
                    <p>{{ $news->artikel }}</p>
                </div>
            </div>

        </div>

        {{-- Berita --}}
        <div class="h-full lg:w-1/4 lg:pl-8 lg:border-l-2 border-misty-300">
            {{-- Judul --}}
            <div class="max-lg:my-8 ">
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
