<div class="px-4 py-2 space-y-4" wire:poll.5000ms>
    <span class="font-bold tracking-wide text-subtitle">Statistik Pengunjung</span>
    <ul class="w-fit">
        <li class="grid grid-cols-12">
            <span class="col-span-5">Hari ini</span>
            <span class="col-span-1">:</span>
            <span class="col-span-6">{{ $todayCount }}</span>
        </li>
        <li class="grid grid-cols-12">
            <span class="col-span-5">Bulan ini</span>
            <span class="col-span-1">:</span>
            <span class="col-span-6">{{ $monthCount }}</span>
        </li>
        <li class="grid grid-cols-12">
            <span class="col-span-5">Tahun ini</span>
            <span class="col-span-1">:</span>
            <span class="col-span-6">{{ $yearCount }}</span>
        </li>
        <li class="mt-4 font-bold text-subtitle">
            <i class="mr-2 font-normal ri-xl ri-bar-chart-2-fill"></i>
            {{ $totalCount }}
        </li>
    </ul>
</div>
