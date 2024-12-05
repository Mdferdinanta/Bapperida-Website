<x-app-layout>

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

                    <div class="container relative my-4 w-full mx-auto">
                        <iframe class="w-full lg:rounded-xs aspect-video"
                            src="{{ $video->link_type === 'youtube' ? 'https://www.youtube.com/embed/' . $video->url : 'https://drive.google.com/file/d/' . $video->url . '/preview' }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                        </iframe>
                    </div>
                    <p class="mb-4 tracking-wide text-justify text-detail lg:text-body font-medium">
                        {!! $video->description !!}
                    </p>
                </div>

                <div class="p-4 rounded-xs border border-mist-300">
                    <h3 class="font-bold mb-4 tracking-wide lg:text-subtitle">
                        <i class="font-bold ri-arrow-right-s-line text-primary-500"></i>
                        {{ __('Rekomendasi Video') }}
                    </h3>

                    <div class="flex flex-col gap-4 lg:gap-6 justify-center items-center mt-6 md:flex-row">
                        {{-- Recommended Video Cards --}}
                        @foreach ($recommended as $video)
                            <a href="{{ route('video-preview', ['id' => $video->id]) }}" wire:navigate
                                class="relative w-full max-md:h-56 rounded-xs overflow-hidden group hover:shadow-md shadow-slate-300 md:aspect-video">
                                <img src="{{ asset('storage/' . $video->thumbnail) }}"
                                    class="object-cover w-full h-full">
                                <div
                                    class="absolute left-0 top-0 flex flex-col justify-between w-full h-1/2 px-4 py-2 -translate-y-full transition-transform duration-300 ease-in-out bg-gray-900 group-hover:translate-y-0 bg-opacity-80">
                                    <span
                                        class="font-semibold text-justify text-white capitalize truncate">{{ $video->title }}</span>
                                    <span
                                        class="text-justify py-1 text-gray-100 text-tiny truncate">{{ $video->click_count }}
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
