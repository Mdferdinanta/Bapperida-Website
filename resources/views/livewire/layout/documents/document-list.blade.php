<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-4 md:flex-row">
        {{-- Subcategory Selector --}}
        <div class="max-sm:w-full">
            <select wire:model.live='cat_filter' name="cat_filter" id="cat_filter"
                class="w-full rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) disabled class="text-gray-600 bg-gray-200">-- Pilih Kategori --</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div>

        {{-- Search bar --}}
        <x-search-input wire:model.live.debounce.300ms="search" placeholder="Cari..." aria-label="Cari dokumen"></x-search-input>
    </div>

    {{-- Card List --}}
    <div class="overflow-hidden border-mist-300">
        @foreach ($documents as $document)
            <a href="{{ route('document-preview', ['category' => $document->category->name, 'id' => $document->id]) }}"
                class="cursor-pointer" wire:navigate>
                <div
                    class="flex items-center justify-between px-4 py-3 group hover:bg-primary-50 border-mist-300 {{ $loop->first ? 'border-y' : 'border-b' }}">
                    <div class="flex flex-col">
                        <span
                            class="font-bold text-primary-600 group-hover:text-primary-800 text-body md:text-subtitle">
                            {{ $document->name }}
                        </span>
                        <small class="mt-2 text-tiny md:text-detail text-stone-500">
                            {{ $document->created_at->format('d F Y') }}</small>
                    </div>
                    <a
                        href="{{ route('document-download', ['category' => $document->category->name, 'id' => $document->id]) }}">
                        <x-primary-button class="rounded-2xs">
                            <h4 class="font-semibold text-tiny xl:text-detail max-sm:hidden normal-case">Unduh</h4>
                            <i class="font-light sm:ml-2 sm:text-detail ri-download-2-line"></i>
                        </x-primary-button>
                    </a>
                </div>
            </a>
        @endforeach

        {{-- pagination --}}
        <div class="mt-4">
            {{ $documents->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
        </div>
    </div>

</div>
