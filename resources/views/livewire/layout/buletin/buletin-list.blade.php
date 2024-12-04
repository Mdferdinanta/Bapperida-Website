<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-6 md:flex-row">
        {{-- Search bar --}}
        <x-search-input wire:model.live.debounce.300ms="search" placeholder="Cari..."
            aria-label="Cari dokumen"></x-search-input>
    </div>

    {{-- Card List --}}
    <div class="grid-cols-4 gap-6 grid">
        @foreach ($buletins as $buletin)
            <a href="{{ route('buletin-preview', ['id' => $buletin->id]) }}" wire:navigate
                class="col-span-1 overflow-hidden hover:shadow-md transform duration-300 ease-in-out transition-transform hover:-translate-y-2 shadow-slate-300 rounded-xs border border-mist-300">
                <div class="h-60">
                    <img src="{{ asset('storage/' . $buletin->thumbnail) }}" class="object-cover h-full w-full"
                        alt="">
                </div>
                <div class="p-4">
                    <h5 class="font-semibold line-clamp-2 text-detail xl:text-body text-primary-800">
                        {{ $buletin->name }}</h5>
                </div>
            </a>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div>
        {{ $buletins->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
    </div>

</div>
