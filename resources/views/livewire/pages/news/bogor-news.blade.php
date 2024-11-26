<x-app-layout>

    {{-- Container --}}
    <x-container>

        <div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
            <div class="flex flex-col items-end justify-end gap-6 md:flex-row">
                {{-- Search bar --}}
                <div class="relative w-full md:w-1/2">
                    <div class="w-full overflow-hidden bg-yellow-300 rounded-xs">
                        <input wire:model.live.debounce.300ms="search" type="search" placeholder="Cari..."
                            aria-label="Cari nama atau jabatan"
                            class="w-full border border-mist-300 rounded-xs focus:border-primary-300">
                    </div>
                </div>
            </div>

            {{-- Content Cards --}}
            <livewire:layout.news.news-content-card />
        </div>

    </x-container>

</x-app-layout>
