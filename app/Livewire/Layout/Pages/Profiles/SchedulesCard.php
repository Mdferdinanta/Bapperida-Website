<?php

namespace App\Livewire\Layout\Pages\Profiles;

use App\Models\Agenda;
use Livewire\Component;

class SchedulesCard extends Component
{
    public $activities;

    public function mount()
    {
        $this->activities = Agenda::orderBy('id', 'desc')->take(5)->get();
    }
    public function render()
    {
        return view('livewire.layout.pages.profiles.schedules-card', [
            'activities' => $this->activities,
        ]);
    }
}
