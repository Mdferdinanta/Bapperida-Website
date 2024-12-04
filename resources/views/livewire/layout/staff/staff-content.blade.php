<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-4 md:flex-row">
        {{-- Search bar --}}
        <x-search-input wire:model.live.debounce.300ms="search" placeholder="Cari..." aria-label="Cari nama atau jabatan"></x-search-input>
    </div>

    {{-- Table --}}
    <div class="rounded-xs overflow-hidden border border-mist-300">
        <table class="min-w-full">
            <thead>
                <tr class="font-bold tracking-wider text-left lg:text-subtitle bg-primary-50">
                    <th scope="col" class="w-5/12 px-6 py-4">Nama Lengkap</th>
                    <th scope="col" class="w-6/12 px-6 py-4">Jabatan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staff as $index => $member)
                    <tr class="{{ $loop->even ? 'bg-primary-50' : 'bg-white' }} border-t border-mist-200">
                        <td class="px-6 py-3 capitalize text-wrap">{{ $member->name }}</td>
                        <td class="px-6 py-3 text-wrap">{{ $member->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Pagination --}}
    <div>
        {{ $staff->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
    </div>

</div>
