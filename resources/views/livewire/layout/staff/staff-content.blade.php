<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col gap-6 md:flex-row justify-end items-end">
        {{-- Search bar --}}
        <div class="relative w-full md:w-1/2">
            <div class="w-full overflow-hidden rounded-xs bg-yellow-300">
                <input wire:model.live.debounce.300ms="search" type="search" placeholder="Cari..."
                    aria-label="Cari nama atau jabatan"
                    class="w-full border border-gray-300 rounded-xs focus:border-primary-300">
            </div>
        </div>
    </div>

    {{-- Table --}}
    <div>
        <table class="min-w-full overflow-hidden divide-y divide-gray-300 rounded-xs">
            <thead class="text-white bg-primary-700">
                <tr class="font-semibold tracking-wider text-left uppercase lg:text-subtitle">
                    <th scope="col" class="w-1/12 px-6 py-3">No.</th>
                    <th scope="col" class="w-6/12 px-6 py-3">Nama Lengkap</th>
                    <th scope="col" class="w-5/12 px-6 py-3">Jabatan</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach ($staff as $index => $member)
                    <tr
                        class="{{ $loop->odd ? 'bg-white border-y border-gray-300' : '' }} bg-primary-50 divide-x divide-gray-200">
                        {{-- <tr class=" bg-primary-50 divide-x divide-gray-200"> --}}
                        <td class="px-6 py-2 text-center text-wrap">{{ $member->id }}</td>
                        <td class="px-6 py-2 text-wrap capitalize">{{ $member->name }}</td>
                        <td class="px-6 py-2 text-wrap">{{ $member->role }}</td>
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
