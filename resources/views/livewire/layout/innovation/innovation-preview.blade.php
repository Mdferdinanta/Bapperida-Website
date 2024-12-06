<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            {{ __('Etalase Inovasi') }}
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <div class="p-6 space-y-4 bg-white xl:w-3/4 max-xl:shadow-md shadow-slate-300">
            <div class="flex flex-col gap-6">
                <div class="lg:max-xl:px-4">
                    {{-- Title --}}
                    @if ($video->department)
                        <div class="flex flex-col space-y-4">
                            <h3 class="font-bold tracking-wide capitalize text-headline lg:text-h3">{{ $video->title }}
                            </h3>
                            <small class="text-gray-500 text-tiny md:text-detail">{{ $video->department }}<span
                                    class="mx-2">|</span>{{ $video->date->format('Y') }}</small>
                        </div>
                    @endif

                    <div class="container relative w-full mx-auto my-4">
                        <iframe class="w-full lg:rounded-xs aspect-video"
                            src="{{ $video->link_type === 'youtube' ? 'https://www.youtube.com/embed/' . $video->url : 'https://drive.google.com/file/d/' . $video->url . '/preview' }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mb-4 font-medium tracking-wide text-justify text-detail lg:text-body">
                        {!! $video->description !!}
                    </p>
                    <div class="py-4 my-4">
                        <a href="https://wa.me/6281210818070" class="px-4 py-2 font-medium text-white bg-green-600 rounded-full">Layanan Hotline Inovasi <i class="ri-md ms-2 ri-whatsapp-line"></i></a>
                    </div>
                </div>

                <div class="p-4 border rounded-xs border-mist-300">
                    <h3 class="mb-4 font-bold tracking-wide lg:text-subtitle">
                        <i class="font-bold ri-arrow-right-s-line text-primary-500"></i>
                        {{ __('Rekomendasi Video') }}
                    </h3>

                    <div class="flex flex-col items-center justify-center gap-4 mt-6 lg:gap-6 md:flex-row">
                        {{-- Recommended Video Cards --}}
                        @foreach ($recommended as $video)
                            <a href="{{ route('video-preview', ['id' => $video->id]) }}" wire:navigate
                                class="relative w-full overflow-hidden max-md:h-56 rounded-xs group hover:shadow-md shadow-slate-300 md:aspect-video">
                                <img src="{{ asset('storage/' . $video->thumbnail) }}"
                                    class="object-cover w-full h-full">
                                <div
                                    class="absolute top-0 left-0 flex flex-col justify-between w-full px-4 py-2 transition-transform duration-300 ease-in-out -translate-y-full bg-gray-900 h-1/2 group-hover:translate-y-0 bg-opacity-80">
                                    <span
                                        class="font-semibold text-justify text-white capitalize truncate">{{ $video->title }}</span>
                                    <span
                                        class="py-1 text-justify text-gray-100 truncate text-tiny">{{ $video->click_count }}
                                        Views</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </x-container>

</x-app-layout>
