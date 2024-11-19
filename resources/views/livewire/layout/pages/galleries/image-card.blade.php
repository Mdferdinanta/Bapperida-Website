<a href="{{ route('galeri-preview', ['id' => $album->id]) }}">
    <div class="p-4 bg-white border rounded-xs border-mist-300 h-60">
        <p class="mb-2 text-detail">{{ $album->created_at->format('d F Y') }}</p>
        <img src="{{ asset('storage/' . $album->foto) }}" class="object-cover w-full h-40 mb-2"
            alt="video thumbnail">
        <h3 class="mb-2 text-body font-h3Bold ">{{ $album->nama }}</h3>
    </div>
</a>
