<div>
    @foreach ($latestNews as $news)
        <div class="border-dashed even:border-y border-mist-300">
            <a href="{{ route('news-preview', ['id' => $news->id]) }}">
                <div class="flex flex-col py-4 max-md:mx-4">
                    <img src="{{ asset('storage/' . $news->thumbnail) }}" class="object-cover w-full mb-4 h-52 rounded-xs"
                        alt="berita thumbnail">
                    <h3 class="font-semibold text-body hover:text-primary-600">{{ $news->judul }}</h3>
                    <p class="mt-2 text-detail text-neutral-500">{{ $news->created_at->format('d M Y | H:i') }}</p>
                </div>
            </a>
        </div>
    @endforeach
</div>
