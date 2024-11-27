<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-6 md:flex-row">
        {{-- Search bar --}}
        <div class="relative w-full md:w-1/2">
            <div class="w-full overflow-hidden rounded-xs">
                <input wire:model.live.debounce.300ms="search" type="search" placeholder="Cari..."
                    aria-label="Cari nama atau jabatan"
                    class="w-full shadow-sm border-mist-300 rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400">
            </div>
        </div>
    </div>

    {{-- Card List --}}
    <div class="flex gap-4">
        @foreach ($buletins as $buletin)
            <a href="{{ route('buletin-preview', ['id' => $buletin->id]) }}">
                <div class="flex flex-col p-1 bg-white border hover:bg-primary-100 rounded-xs border-mist-300 h-72">
                    <div class="w-full h-56">
                        <img src="{{ asset('storage/' . $buletin->thumbnail) }}"
                            class="object-cover w-full h-full" alt="">
                    </div>
                    <div class="w-full px-2 mt-3">
                        <span class="w-full font-semibold text-center text-wrap text-detail xl:text-body text-primary-800">
                            {{ $buletin->name }}</span>
                    </div>
                </div>
            </a>
        @endforeach
    </div>

</div>
