<div>
    @foreach ($latestNews as $news)
        <a href="{{ route('news-preview', ['id' => $news->id]) }}">
            <div class="py-4 max-md:mx-4">
                <img src="{{ asset('storage/' . $news->thumbnail) }}" class="object-cover w-full mb-4 h-52 rounded-xs"
                    alt="berita thumbnail">
                <h3 class="text-subtitle">{{ $news->judul }}</h3>
                <p class="mt-2 text-detail">{{ $news->created_at->format('d M Y | H:i') }}</p>
            </div>
        </a>
    @endforeach
</div>
