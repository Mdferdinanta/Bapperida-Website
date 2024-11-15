<a class="justify-center" href="{{ route('video-preview', ['id' => $video->id]) }}" wire:navigate>
    <div class="w-64 h-48">
        <img src="{{ $video->thumbnail ? asset('storage/' . $video->thumbnail) : asset('assets/logo/Logo.png') }}"
            class="object-cover w-full h-3/4 bg-neutral-900 mb-4" alt="video thumbnail">
        <h3 class="text-tiny lg:text-detail text-center font-semibold">{{ $video->judul }}</h3>
    </div>
</a>
