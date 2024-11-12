{{-- <div class="text-center">
    <!-- Calendar Header -->
    <div class="flex items-center justify-between p-2 mb-4 rounded-md">
        <button wire:click="previousMonth" class="px-1.5 py-1 rounded-full hover:bg-primary-100 text-primary-500 rounded"><i
                class="font-bold ri-arrow-left-s-line"></i></button>
        <h2 class="text-lg font-bold">
            {{ $currentDate->format('F Y') }}
        </h2>
        <button wire:click="nextMonth" class="px-1.5 py-1 rounded-full hover:bg-primary-100 text-primary-500 rounded"><i
                class="font-bold ri-arrow-right-s-line"></i></button>
    </div>

    <!-- Days of the Week -->
    <div class="grid grid-cols-7 gap-1 font-semibold text-center text-detail">
        @foreach (['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $day)
            <div class="p-2">{{ $day }}</div>
        @endforeach
    </div>

    <!-- Dates -->
    <div class="grid grid-cols-7 gap-1 font-medium text-center text-detail">
        <!-- Empty cells for days before the 1st of the month -->
        @for ($i = 0; $i < $firstDayOfMonth; $i++)
            <div class="p-2"></div>
        @endfor

        <!-- Dates with events -->
        @for ($day = 1; $day <= $daysInMonth; $day++)
            @php
                $date = $currentDate
                    ->copy()
                    ->startOfMonth()
                    ->addDays($day - 1);
                $dayEvents = $events[$date->format('Y-m-d')] ?? [];
            @endphp
            <div class="p-2 hover:bg-primary-100 focus:bg-primary-600 active:bg-primary-500 rounded-xs"
                wire:click="selectDate('{{ $date->format('Y-m-d') }}')">
                <div class="font-bold">{{ $day }}</div>
                @foreach ($dayEvents as $event)
                    <p class="text-xs text-primary-700">{{ $event->title }}</p>
                @endforeach
            </div>

        @endfor
    </div>
</div> --}}


<div class="text-center">
    <!-- Calendar Header -->
    <div class="flex items-center justify-between p-2 mb-4 rounded-md">
        <button wire:click="previousMonth" class="px-1.5 py-1 rounded-full hover:bg-primary-100 text-primary-500 rounded">
            <i class="font-bold ri-arrow-left-s-line"></i>
        </button>
        <h2 class="text-lg font-bold">
            {{ \Carbon\Carbon::parse($year . '-' . $month . '-01')->translatedFormat('F Y') }} <!-- Display Month Year -->
        </h2>
        <button wire:click="nextMonth" class="px-1.5 py-1 rounded-full hover:bg-primary-100 text-primary-500 rounded">
            <i class="font-bold ri-arrow-right-s-line"></i>
        </button>
    </div>

    <!-- Days of the Week -->
    <div class="grid items-center justify-center grid-cols-7 gap-1 font-semibold text-center text-detail">
        @foreach (['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'] as $day)
            <div class="py-2">{{ $day }}</div>
        @endforeach
    </div>

    <!-- Dates -->
    <div class="grid grid-cols-7 gap-1 font-medium text-center text-detail">
        <!-- Empty cells for days before the 1st of the month -->
        @for ($i = 0; $i < $firstDayOfMonth; $i++)
            <div class="p-2"></div>
        @endfor

        @for ($i = 1; $i <= \Carbon\Carbon::parse($year . '-' . $month . '-01')->daysInMonth; $i++)
            @php
                $date = \Carbon\Carbon::parse($year . '-' . $month . '-' . $i);
                $class = '';

                // set bg color for Today's date
                if ($date->isToday()) {
                    $class = 'bg-mist-200';
                }

                // set bg color for Selected date
                if ($date->isSameDay($selectedDate)) {
                    $class = 'bg-primary-200';
                }
            @endphp
            <div wire:click="selectDate('{{ $date->toDateString() }}')"
                class="p-2 cursor-pointer hover:bg-primary-100 rounded-xs {{ $class }}">
                <div>{{ $i }}</div>
            </div>
        @endfor
    </div>
</div>
