<div class="flex flex-col w-full p-2 border border-gray-200 rounded-xs">
    <h2 class="p-2 my-2 text-lg font-bold text-center">
        {{ \Carbon\Carbon::parse($selectedDate)->translatedFormat('l, j F Y') }}
    </h2>

    @forelse ($events as $event)
        <div
            class="{{ $loop->first ? 'border-t border-gray-300' : '' }} {{ $loop->last ? 'border-b border-gray-300' : '' }} {{ $loop->odd ? 'bg-primary-50' : '' }}">
            <div class="flex justify-between w-full items-center">
                <div class="flex flex-col p-2 w-3/4">
                    <h3 class="text-subtitle xl:text-headline text-primary-700 font-bold tracking-wide line-clamp-1">{{ $event->title }}</h3>
                    <p class="mt-2 font-medium line-clamp-1">{{ $event->description }}</p>
                    <p class="text-tiny text-gray-600 font-semibold tracking-wider line-clamp-1">
                        <i class="ri-map-pin-2-line mr-2"></i>{{ $event->location }}</p>
                </div>
                <div
                    class="flex flex-col lg:flex-row w-1/4 text-center justify-center items-center p-2 rounded-2xs font-semibold {{ $loop->odd ? 'text-primary-600' : 'text-primary-500' }}">
                    <span>{{ \Carbon\Carbon::parse($event->time_start)->format('H:i') }}</span>
                    <span class="mx-2">-</span>
                    <span>{{ $event->time_finish ? \Carbon\Carbon::parse($event->time_finish)->format('H:i') : 'selesai' }}</span>
                </div>


            </div>
        </div>
    @empty
        <p class="my-4 text-center text-gray-500">Tidak ada jadwal kegiatan untuk tanggal ini.</p>
    @endforelse

    <div class="mt-2">
        {{ $events->links('vendor.livewire.tailwind') }}
    </div>
</div>
