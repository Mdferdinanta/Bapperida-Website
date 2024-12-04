<div class="flex-none h-fit text-center border border-gray-200 rounded-xs p-2">
    <!-- Calendar Header -->
    <div class="flex items-center justify-between p-2 mb-4 rounded-md">
        <button wire:click="previousMonth" class="px-1.5 py-1 rounded-full hover:bg-primary-100 hover:text-primary-500 rounded">
            <i class="font-bold ri-arrow-left-s-line"></i>
        </button>
        <h2 class="text-lg font-bold">
            {{ \Carbon\Carbon::parse($year . '-' . $month . '-01')->translatedFormat('F Y') }} <!-- Display Month Year -->
        </h2>
        <button wire:click="nextMonth" class="px-1.5 py-1 rounded-full hover:bg-primary-100 hover:text-primary-500 rounded">
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
                    $class = 'bg-primary-500 text-white';
                }
            @endphp
            <div wire:click="selectDate('{{ $date->toDateString() }}')"
                class="p-2 cursor-pointer hover:bg-primary-100 rounded-2xs {{ $class }}">
                <div>{{ $i }}</div>
            </div>
        @endfor
    </div>
</div>
