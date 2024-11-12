<div>
    @foreach ($videos as $video)
        <a class="justify-center" href="{{ route('video-preview', ['id' => $video->id]) }}" wire:navigate>

            <div class="p-4 mb-4 bg-white border rounded-xs border-mist-300 h-60">

                <img src="{{ asset('storage/' . $video->thumbnail) }}" class="object-cover w-full h-40 mb-4"
                    alt="video thumbnail">
                <h3 class="text-body lg:text-subtitle font-subtitleBold">{{ $video->judul }}</h3>

            </div>

        </a>
    @endforeach
</div>
