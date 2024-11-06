<div class="p-4 bg-teal-100">
    @foreach ($activities as $activity)
        <div class="flex items-center justify-between">
            <div>
                <h3 class="font-bold text-md">{{ $activity->title }}</h3>
                <p class="text-base font-semibold">{{ $activity->description }}</p>
                <p class="text-sm">{{ $activity->location }}</p>
            </div>
            <div>
                <p class="text-sm">{{ $activity->time_start }} - {{ $activity->time_finish }}</p>
            </div>
        </div>
    @endforeach
</div>
