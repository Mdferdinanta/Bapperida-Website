<div>
    <div class="max-w-full">
        <div class="flex flex-col items-center justify-center px-4 py-4 mx-auto overflow-hidden bg-white shadow-sm">

            {{-- Section Title --}}
            <x-section-title>{{ __('Berita Terbaru') }}</x-section-title>

            <div
                class="container justify-center w-full text-justify lg:grid max-lg:divide-y-2 lg:px-4 divide-neutral-300 lg:gap-8 lg:grid-cols-2">

                {{-- Main Left Card --}}
                @if ($latestNews)
                    <x-news-main-card :href="route('news-preview', ['id' => $latestNews->id])" wire:navigate>
                        <x-slot:thumbnail>{{ asset('storage/' . $latestNews->thumbnail) }}</x-slot:thumbnail>
                        <x-slot:title>{{ $latestNews->judul }}</x-slot:title>
                        <x-slot:datetime>{{ $latestNews->created_at->format('d F Y | H:i') }}</x-slot:datetime>
                        {{ Str::limit($latestNews->artikel, 100) }}
                    </x-news-main-card>
                @endif

                {{-- Right Cards --}}
                <div class="grid max-md:divide-y-2 md:gap-x-8 md:grid-rows-2 md:grid-cols-2 divide-neutral-300">

                    {{-- Cards --}}
                    @foreach ($otherNews as $news)
                        <x-news-small-card :href="route('news-preview', ['id' => $news->id])" wire:navigate>
                            <x-slot:thumbnail>{{ asset('storage/' . $news->thumbnail) }}</x-slot:thumbnail>
                            <x-slot:title>{{ $news->judul }}</x-slot:title>
                            <x-slot:datetime>{{ $news->created_at->format('d F Y | H:i') }}</x-slot:datetime>
                            {{ Str::limit($news->artikel, 100) }}
                        </x-news-small-card>
                    @endforeach

                </div>

            </div>

            {{-- Link --}}
            <x-section-redirect-all :href="route('page-news-bapperida')" wire:navigate>{{ __('Lihat Semua') }}</x-section-redirect-all>

        </div>
    </div>
</div>
