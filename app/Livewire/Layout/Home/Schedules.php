<?php

namespace App\Livewire\Layout\Home;

use Carbon\Carbon;
use App\Models\Agenda;
use Livewire\Component;

class Schedules extends Component
{
    public $schedules;

    public function mount()
    {
        // get 3 events starting from today and the next two events
        $this->schedules = Agenda::where('date', '>=', Carbon::today())
            ->orderBy('date')
            ->take(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.layout.home.schedules', ['schedules' => $this->schedules]);
    }
}
