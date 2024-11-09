@foreach ($latestNews as $news)
    <a href="{{ route('berita-preview') }}">
        <div class="my-8 border-b-2 max-md:mx-4 border-mist-100">
            <img src="{{ asset('storage/' . $news->thumbnail) }}" class="object-cover w-full mb-4 h-52 rounded-xs"
                alt="berita thumbnail">
            <h3 class="text-subtitle">{{ $news->judul }}</h3>
            <p class="mt-2 text-detail">{{ $news->created_at->format('d M Y | H:i') }}</p>
        </div>
    </a>
@endforeach