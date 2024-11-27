<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-6 md:flex-row">
        {{-- Subcategory Selector --}}
        <div class="max-sm:w-full">
            <select wire:model.live='cat_filter' name="cat_filter" id="cat_filter"
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Kategori --</option>
                @foreach ($subcategories as $subcategory)
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
            </select>
        </div>

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
    <div class="overflow-hidden border-mist-300">
        @foreach ($documents as $document)
            <a href="{{ route('document-preview', ['category' => $document->category->name, 'id' => $document->id]) }}">
                <div class="cursor-pointer">
                    <div
                        class="flex items-center justify-between px-4 py-3 border-mist-300 {{ $loop->first ? 'border-y' : 'border-b' }}">
                        <div>
                            <span class="font-bold text-primary-800 hover:text-primary-600 text-body md:text-subtitle">
                                {{ $document->name }}
                            </span>
                            <p class="mt-2 text-tiny md:text-detail text-stone-500">
                                {{ $document->created_at->format('d F Y') }}</p>
                        </div>
                        <a href="{{ route('document-download', ['category' => $document->category->name, 'id' => $document->id]) }}">
                            <x-primary-button class="rounded-2xs">
                                <h4 class="font-semibold text-tiny xl:text-detail max-sm:hidden">Download</h4>
                                <i class="font-light sm:ml-2 sm:text-detail ri-download-2-line"></i>
                            </x-primary-button>
                        </a>
                    </div>
                </div>
            </a>
        @endforeach

        {{-- pagination --}}
        <div class="mt-2">
            {{ $documents->links() }}
        </div>
    </div>

</div>
