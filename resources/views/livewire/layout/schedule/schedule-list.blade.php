<div class="flex flex-col w-full p-2 border border-gray-200 rounded-xs">
    <h2 class="p-2 mb-2 text-lg font-bold text-center">
        {{ \Carbon\Carbon::parse($selectedDate)->translatedFormat('l, j F Y') }}
    </h2>

    @forelse ($events as $event)
        <div
            class="group cursor-default hover:bg-primary-100 {{ $loop->first ? 'border-t border-gray-300' : '' }} {{ $loop->last ? 'border-b border-gray-300' : '' }} {{ $loop->odd ? 'bg-primary-50' : '' }}">
            <div class="flex items-center justify-between w-full">
                <div class="flex flex-col w-3/4 p-2 overflow-hidden">
                    <h3 class="font-bold tracking-wide text-subtitle xl:text-headline text-primary-700 line-clamp-1">
                        {{ $event->title }}</h3>
                    <p class="mt-2 font-medium line-clamp-1">{{ $event->description }}</p>
                    <small class="mt-1 font-semibold tracking-wider text-gray-500 text-tiny line-clamp-1">
                        <i class="mr-2 ri-map-pin-2-line"></i>{{ $event->location }}
                    </small>
                </div>
                <div
                    class="flex flex-col lg:flex-row w-1/4 text-center justify-center items-center p-2 rounded-2xs font-semibold text-primary-600">
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
        {{ $events->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
    </div>
</div>
