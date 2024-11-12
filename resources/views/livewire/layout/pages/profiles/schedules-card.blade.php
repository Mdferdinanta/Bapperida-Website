{{-- <div class="p-4 hover:bg-primary-100">
    @foreach ($activities as $activity)
        <div class="flex items-center justify-between">
            <div>
                <h3 class="font-bold text-md">{{ $activity->title }}</h3>
                <p class="text-base font-semibold">{{ $activity->description }}</p>
                <p class="text-detail">{{ $activity->location }}</p>
            </div>
            <div>
                <p class="text-detail">{{ $activity->time_start }} - {{ $activity->time_finish }}</p>
            </div>
        </div>
    @endforeach
</div> --}}

{{--  <div class="p-4 bg-primary-50 hover:bg-primary-200">
    <div class="flex items-center justify-between">
        <div>
            <h3 class="font-bold text-md">title</h3>
            <p class="text-base font-semibold">description</p>
            <p class="text-detail">location</p>
        </div>
        <div>
            <p class="text-detail">time_start - time_finish</p>
        </div>
    </div>
</div> --}}

<div>
    <h2 class="p-2 my-2 text-lg font-bold text-center">
        {{ \Carbon\Carbon::parse($selectedDate)->translatedFormat('l, j F Y') }}
    </h2>

    @forelse ($events as $event)
        <div class="p-4 mb-2 rounded bg-primary-50 hover:bg-primary-200 rounded-xs">
            <div class="flex items-center justify-between">
                <div class="space-y-2">
                    <h3 class="font-black tracking-wide xl:text-subtitle">{{ $event->title }}</h3>
                    <p class="ms-4 max-xl:text-detail">{{ $event->description }}</p>
                    <p class="tracking-wider ms-4 text-tiny xl:text-detail">{{ $event->location }}</p>
                </div>
                <div class="flex flex-col gap-2 font-semibold text-center max-xl:text-detail xl:flex-row">
                    <span>{{ \Carbon\Carbon::parse($event->time_start)->format('H:i') }}</span>
                    <span>-</span>
                    <span>{{ $event->time_finish ? \Carbon\Carbon::parse($event->time_finish)->format('H:i') : 'selesai' }}</span>
                </div>

            </div>
        </div>
    @empty
        <p class="my-4 text-center text-gray-500">Tidak ada jadwal kegiatan untuk tanggal ini.</p>
    @endforelse

</div>
