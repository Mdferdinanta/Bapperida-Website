<?php

namespace App\Livewire\Layout\Pages\Profiles;

use Livewire\Component;
use Carbon\Carbon;
use App\Models\Agenda;

class Calendar extends Component
{
    // public $currentDate;
    // public $firstDayOfMonth;
    // public $daysInMonth;
    // public $events = [];

    // public function mount()
    // {
    //     $this->currentDate = Carbon::now();
    //     $this->loadEvents();
    // }

    // public function loadEvents()
    // {
    //     $this->daysInMonth = $this->currentDate->daysInMonth;
    //     $this->firstDayOfMonth = $this->currentDate->copy()->startOfMonth()->dayOfWeek;

    //     $this->events = Agenda::whereMonth('date', $this->currentDate->month)
    //         ->whereYear('date', $this->currentDate->year)
    //         ->get()
    //         ->groupBy(function ($event) {
    //             // Use $event->date to access the Carbon instance, and format it correctly
    //             return $event->date->format('Y-m-d');
    //         });
    // }


    // public function previousMonth()
    // {
    //     $this->currentDate = $this->currentDate->subMonth();
    //     $this->loadEvents();
    // }

    // public function nextMonth()
    // {
    //     $this->currentDate = $this->currentDate->addMonth();
    //     $this->loadEvents();
    // }

    // public function selectDate($date)
    // {
    //     info("Emitting dateSelected event for date: $date");
    //     $this->emit('dateSelected', $date);
    // }

    // public function render()
    // {
    //     return view('livewire.layout.pages.profiles.calendar', [
    //         'events' => $this->events,
    //         'daysInMonth' => $this->daysInMonth,
    //         'firstDayOfMonth' => $this->firstDayOfMonth,
    //     ]);
    // }


    public $month;
    public $year;
    public $selectedDate;

    // Listeners for parent components (if needed)
    protected $listeners = ['dateSelected'];

    // Mount method for setting initial state
    public function mount()
    {
        // Set the default selected date to today
        $this->selectedDate = Carbon::now(); // default to current date
        $this->month = $this->selectedDate->format('m');
        $this->year = $this->selectedDate->format('Y');
    }

    // Handle previous month button click
    public function previousMonth()
    {
        $this->selectedDate->subMonth();
        $this->month = $this->selectedDate->format('m');
        $this->year = $this->selectedDate->format('Y');
    }

    // Handle next month button click
    public function nextMonth()
    {
        $this->selectedDate->addMonth();
        $this->month = $this->selectedDate->format('m');
        $this->year = $this->selectedDate->format('Y');
    }

    // Handle date selection
    public function selectDate($date)
    {
        $this->selectedDate = Carbon::createFromFormat('Y-m-d', $date);
        $this->dispatch('dateChanged', $this->selectedDate->toDateString());  // Dispatch event
    }

    // Get the number of days in the current month
    private function getDaysInMonth()
    {
        return Carbon::parse($this->year . '-' . $this->month . '-01')->daysInMonth;
    }

    private function firstDayOfMonth()
    {
        // get first day of the month
        return Carbon::parse($this->year . '-' . $this->month . '-01')->dayOfWeek;
    }

    // Render the calendar view
    public function render()
    {
        return view('livewire.layout.pages.profiles.calendar', [
            'days' => $this->getDaysInMonth(),
            'firstDayOfMonth' => $this->firstDayOfMonth(),
        ]);
    }

}
