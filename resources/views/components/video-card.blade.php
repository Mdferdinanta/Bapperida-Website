<a href="{{ route('video-preview') }}">
    <div class="p-4 bg-white rounded-xs border border-mist-300 h-60">
        <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="w-full h-40 object-cover mb-4"
            height="200" alt="video thumbnail">
        <h3 class="text-subtitle font-semibold">Judul Inovasi</h3>
        <p></p>
    </div>
    
    {{-- <div class="p-4 bg-white border rounded-xs border-mist-300 h-60">
    <img src="{{ asset('assets/img/gallery-5.jpg') }}" class="object-cover w-full h-40 mb-4"
        height="200" alt="video thumbnail">
    <h3 class="font-semibold text-subtitle">Judul Inovasi</h3>
    <p></p>
</div> --}}

<iframe class="bg-red-200 rounded-xs" height="240" src="https://www.youtube.com/embed/HEqY4lO9r3o"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
{{-- 

<iframe class="bg-red-200 rounded-xs" height="240" src="https://www.youtube.com/embed/{{ video_id }}"
    title="YouTube video player" frameborder="0"
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}
</a>