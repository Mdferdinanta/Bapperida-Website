@foreach ($latestNews as $news)
    <a href="{{ route('berita-preview') }}">
        <div class="border rounded-xs border-mist-100">
            <img src="{{ asset('storage/' . $news->thumbnail) }}" class="object-cover w-full h-40 mb-4" height="100"
                alt="berita thumbnail">
            <h3 class="font-semibold text-subtitle">{{ $news->judul }}</h3>
            <p class="mt-2 text-detail">{{ $news->created_at }}</p>
        </div>
    </a>
@endforeach