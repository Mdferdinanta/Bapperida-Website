<?php

namespace App\Livewire\Layout\Pages\Profiles;

use Carbon\Carbon;
use App\Models\Agenda;
use Livewire\Component;

class SchedulesCard extends Component
{
    // public $selectedDate;
    // public $events = [];

    // protected $listeners = ['dateSelected' => 'loadEventsForDate'];

    // public function mount()
    // {
    //     $this->selectedDate = Carbon::now()->format('Y-m-d');
    //     $this->loadEventsForDate($this->selectedDate);
    // }

    // public function loadEventsForDate($date)
    // {
    //     info("Received dateSelected event with date: $date");
    //     $this->selectedDate = $date;
    //     $this->events = Agenda::whereDate('date', $date)->get();
    // }

    // public function render()
    // {
    //     return view('livewire.layout.pages.profiles.schedules-card');
    // }

    public $events = [];
    public $selectedDate;

    // Listen for the 'dateChanged' event dispatched by Calendar
    protected $listeners = ['dateChanged' => 'updateSchedule'];

    // Update the schedule based on the new date
    public function updateSchedule($date)
    {
        $this->selectedDate = $date;
        // Fetch events for the selected date
        $this->events = Agenda::whereDate('date', $date)->get();
    }

    // Mount method to show today's events by default
    public function mount()
    {
        $today = Carbon::today()->toDateString(); // Get today's date
        $this->updateSchedule($today); // Load events for today by default
    }

    // Render the view for the schedule card
    public function render()
    {
        return view('livewire.layout.pages.profiles.schedules-card');
    }

}
