<?php

namespace App\Livewire\Layout\Schedule;

use Livewire\Component;

class ScheduleCard extends Component
{
    public $schedule;

    public function mount($schedule)
    {
        $this->schedule = $schedule;
    }

    public function render()
    {
        return view('livewire.layout.schedule.schedule-card');
    }
}
