<x-app-layout>

    {{-- Container --}}
    <x-container>

        <div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
            <div class="flex flex-col items-end justify-end gap-4 md:flex-row">
                {{-- Search bar --}}
                <div class="relative w-full md:w-1/2">
                    <div class="w-full overflow-hidden bg-yellow-300 rounded-xs">
                        <input wire:model.live.debounce.300ms="search" type="search" placeholder="Cari..."
                            aria-label="Cari nama atau jabatan"
                            class="w-full border border-mist-300 rounded-xs focus:border-primary-300">
                    </div>
                </div>
            </div>

            {{-- Content --}}
            <div class="w-full">
                @if ($news)
                {{-- Title --}}
                <div class="flex justify-center p-4">
                    <h3 class="font-bold tracking-wider capitalize text-h3">{{ $news->title }}</h3>
                </div>
                    {{-- Image --}}
                    <div class="w-full px-24">
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="object-cover w-full rounded-xs aspect-video">
                    </div>
                    {{-- Text --}}
                    <div class="mt-4 tracking-wide text-justify text-wrap">
                        {!! $news->content !!}
                    </div>
                @endif
            </div>
        </div>

    </x-container>

</x-app-layout>
