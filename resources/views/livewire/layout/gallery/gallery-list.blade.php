<div class="p-6 bg-white xl:w-3/4 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-6 md:flex-row">
        {{-- Search bar --}}
        <div class="relative w-full md:w-1/2">
            <div class="w-full overflow-hidden rounded-xs">
                <input wire:model.live.debounce.300ms="search" type="search" placeholder="Cari..."
                    aria-label="Cari nama atau jabatan"
                    class="w-full shadow-sm border-mist-300 rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400">
            </div>
        </div>
    </div>

    {{-- Content --}}
    {{-- Photos --}}
    <div class="mt-8 lg:mt-6">
        <h2 class="font-bold text-headline text-primary-800">Foto Kegiatan</h2>
    </div>
    <div>
        <div class="grid grid-cols-1 gap-4 md:gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($albums as $album)
                <div class="group">
                    {{-- Use first image as the album cover --}}
                    @php
                        $images = App\Models\Image::where('album_id', $album->id)->get();
                        $firstImage = $images->first();
                    @endphp

                    <a href="{{ route('image-preview', ['id' => $firstImage->id]) }}">
                        <div>
                            <img src="{{ asset('storage/' . $firstImage->image) }}"
                                class="object-cover group-hover:shadow-md group-hover:-translate-y-2 transform transition-transform duration-300 ease-in-out rounded-xs shadow-sm shadow-slate-300 w-full aspect-video"
                                alt="album {{ $firstImage->album->name }}">
                            <div
                                class="flex sm:flex-col justify-between sm:justify-center sm:items-start items-center p-2">
                                <h3
                                    class="sm:mb-2 font-bold text-body group-hover:underline md:text-subtitle group-hover:text-primary-700">
                                    {{ $firstImage->album->name }}
                                </h3>
                                <small class="text-gray-500 text-detail">
                                    {{ $images->count() }} {{ $images->count() > 1 ? 'Images' : 'Image' }}
                                </small>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="w-full sm:col-span-2 lg:col-span-3">
                    <h4 class="text-gray-500 text-center">Tidak ada hasil yang sesuai.</h4>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div>
            {{ $albums->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
        </div>
    </div>

    {{-- Videos --}}
    <div class="mt-6 pt-6 border-t border-mist-300">
        <h2 class="font-bold text-headline text-primary-800">Video Kegiatan</h2>
    </div>

    <div>
        <div class="grid grid-cols-1 gap-4 md:gap-6 mt-6 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($videos as $video)
                <div class="group">
                    <a href="{{ route('video-preview', ['id' => $video->id]) }}">
                        <div>
                            <img src="{{ $video->thumbnail ? asset('storage/' . $video->thumbnail) : asset('assets/logo/Logo.png') }}"
                                class="object-cover group-hover:shadow-md group-hover:-translate-y-2 transform transition-transform duration-300 ease-in-out rounded-xs shadow-sm shadow-slate-300 w-full aspect-video"
                                alt="playlist {{ $video->title }}">
                            <div
                                class="flex sm:flex-col justify-between sm:justify-center sm:items-start items-center p-2">
                                <h3
                                    class="sm:mb-2 font-bold text-body group-hover:underline md:text-subtitle group-hover:text-primary-700">
                                    {{ $video->title }}
                                </h3>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
                <div class="w-full sm:col-span-2 lg:col-span-3">
                    <h4 class="text-gray-500 text-center">Tidak ada hasil yang sesuai.</h4>
                </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div>
            {{ $videos->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
        </div>
    </div>

    {{-- <div class="grid grid-cols-1 gap-1 md:gap-6 my-8 sm:grid-cols-3">
        @foreach ($playlists as $video)
            <div class="group"> --}}
    {{-- Use only the first image of the album as the album cover --}}
    {{-- @php
                    $coverVideo = $video->first(); // Select the first image as the cover
                @endphp --}}

    {{-- <a href="{{ route('image-preview', ['id' => $coverVideo->id]) }}">
                    <div>
                        <img src="{{ $coverVideo->thumbnail ? asset('storage/' . $coverVideo->thumbnail) : asset('assets/logo/Logo.png') }}"
                            class="object-cover group-hover:shadow-lg group-hover:-translate-y-2 transform transition-transform duration-300 ease-in-out rounded-xs shadow-sm shadow-slate-300 w-full aspect-video"
                            alt="album {{ $video->first()->title }}">
                        <div
                            class="flex sm:flex-col justify-between sm:justify-center sm:items-start items-center py-2">
                            <h3 class="sm:mb-2 font-bold text-body group-hover:underline md:text-subtitle group-hover:text-primary-700">
                                {{ $video->first()->title }}
                            </h3>
                            <small class="text-gray-500 text-detail">
                                {{ $video->count() }} {{ $video->count() > 1 ? 'Videos' : 'Video' }}
                            </small>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div> --}}
</div>
