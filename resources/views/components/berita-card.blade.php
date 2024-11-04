@foreach ($latestNews as $news)
    <a href="{{ route('berita-preview') }}">
        <div class="border-b-2 my-8 max-md:mx-4 border-mist-100">
            <img src="{{ asset('storage/' . $news->thumbnail) }}" class="object-cover w-full h-52 mb-4 rounded-xs" 
                alt="berita thumbnail">
            <h3 class="text-subtitle">{{ $news->judul }}</h3>
            <p class="mt-2 text-detail">{{ $news->created_at }}</p>
        </div>
    </a>
@endforeach