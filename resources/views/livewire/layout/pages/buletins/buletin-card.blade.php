<a href="{{ route('buletin-preview', ['id' => $document->id]) }}">
    <div class="p-2 bg-white border  hover:bg-primary-100 rounded-xs border-mist-300 h-100 w-50">
        <img src="{{ asset('storage/' . $document->thumbnail) }}" class="object-cover w-full mx-auto mb-2 rounded-2xs"
            height="200" alt="">
        <h3 class="font-semibold text-center text-detail xl:text-body text-primary-800">{{ $document->nama }}</h3>
        <p></p>
    </div>
</a>
