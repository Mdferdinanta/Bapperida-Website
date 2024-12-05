<?php

namespace App\Livewire\Layout\Schedule;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Schedule;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class ScheduleList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $selectedDate;

    // Listen for the 'dateChanged' event dispatched by Calendar
    protected $listeners = ['dateChanged' => 'updateSchedule'];

    public function mount()
    {
        $this->selectedDate = Carbon::now()->toDateString();
    }

    public function updateSchedule($date)
    {
        $this->selectedDate = $date;
        $this->resetPage();
    }

    public function render()
    {
        $events = Schedule::whereDate('date', $this->selectedDate)
            ->orderBy('time_start')
            ->paginate(10);

        // dd($events, $this->selectedDate);
        return view('livewire.layout.schedule.schedule-list', compact('events'));
    }
}
