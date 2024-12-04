<x-app-layout>

    {{-- Container --}}
    <x-container>

        <div class="p-6 bg-white xl:w-3/4 max-xl:shadow-md shadow-slate-300">
            <div class="flex justify-start mb-4">
                {{-- Search bar
                <div class="relative w-full md:w-1/2">
                    <div class="w-full overflow-hidden bg-yellow-300 rounded-xs">
                        <input wire:model.live.debounce.300ms="search" type="search" placeholder="Cari..."
                            aria-label="Cari nama atau jabatan"
                            class="w-full border border-mist-300 rounded-xs focus:border-primary-300">
                    </div>
                </div> --}}

                {{-- Navigate Link --}}
                <a href="{{ route('news') }}" class="justify-start text-gray-500 hover:text-primary-700 hover:underline" wire:navigate>&laquo; kembali</a>
            </div>

            {{-- Content --}}
            <div class="w-full">
                @if ($news)
                    {{-- Title --}}
                    <div class="flex flex-col space-y-4">
                        <h3 class="font-bold tracking-wide capitalize text-headline lg:text-h3">{{ $news->title }}</h3>
                        <small class="text-gray-500 text-tiny md:text-detail">Author: {{ $news->author }}. {{ $news->created_at->format('d/m/Y, H:i') }} WIB</small>
                    </div>
                    {{-- Image --}}
                    <div class="w-full mx-auto px-8 md:px-12 lg:px-16 py-4">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}"
                            class="object-cover w-full rounded-xs aspect-video">
                    </div>
                    {{-- Text --}}
                    <div class="indent-8 tracking-wide text-justify text-wrap">
                        {!! $news->content !!}
                    </div>
                @endif
            </div>
        </div>

    </x-container>

</x-app-layout>
