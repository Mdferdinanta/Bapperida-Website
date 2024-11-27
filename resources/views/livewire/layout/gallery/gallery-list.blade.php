<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
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
    <div>
        <h2 class="font-bold text-headline text-primary-800">Foto Kegiatan</h2>
    </div>
    <div class="grid grid-cols-1 gap-4 my-8 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($albums as $albumName => $images)
            <div class="album">
                {{-- Use only the first image of the album as the album cover --}}
                @php
                    $coverImage = $images->first(); // Select the first image as the cover
                @endphp

                <div class="album-cover">
                    <a href="{{ route('image-preview', ['id' => $coverImage->id]) }}">
                        <div class="p-2 bg-white border hover:bg-primary-100 rounded-xs border-mist-300 h-60">
                            <img src="{{ asset('storage/' . $coverImage->image) }}"
                                class="object-cover w-full h-40 mb-2" alt="album cover">
                            <h3 class="mb-2 font-bold text-body md:text-subtitle text-primary-800">{{ $albumName }}
                            </h3>
                            <p class="text-gray-500 text-detail">{{ $images->count() }} Images</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    {{-- Videos --}}
    <div>
        <h2 class="font-bold text-headline text-primary-800">Video Kegiatan</h2>
    </div>
    <div class="grid grid-cols-1 gap-4 my-8 md:grid-cols-2 xl:grid-cols-3">
        @foreach ($videos as $video)
            {{-- <a class="justify-center" href="{{ route('video-preview', ['id' => $video->id]) }}" wire:navigate> --}}
            <a class="justify-center" href="" wire:navigate>
                <div class="p-4 mb-4 bg-white border rounded-xs border-mist-300 h-60">

                    <h3 class="text-body lg:text-subtitle font-subtitleBold">{{ $video->title }}</h3>
                </div>
            </a>
        @endforeach
    </div>
</div>
