<a class="justify-center" href="{{ route('video-preview', ['id' => $video->id]) }}" wire:navigate>
    <div class="bg-white rounded-xs overflow-hidden shadow-md h-60">
        <img src="{{ $video->thumbnail ? asset('storage/' . $video->thumbnail) : asset('assets/logo/Logo.png') }}"
            class="object-cover w-full bg-neutral-900 h-3/4 mb-4" alt="video thumbnail">
        <h3 class="text-body px-4 font-semibold">{{ $video->judul }}</h3>
    </div>
</a>
