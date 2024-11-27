<?php

namespace App\Livewire\Layout\Home;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Schedule;

class HomeSchedule extends Component
{
    public $schedules;
    public function render()
    {
        $this->schedules = Schedule::where('date', '>=', Carbon::today())
            ->orderBy('date')
            ->take(3)
            ->get();

        return view('livewire.layout.home.home-schedule', [
            'schedules' => $this->schedules
        ]);
    }
}
