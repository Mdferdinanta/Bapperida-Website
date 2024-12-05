<?php

namespace App\Livewire\Layout\Schedule;

use Carbon\Carbon;
use Livewire\Component;

class Calendar extends Component
{
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
        $this->dispatch( 'dateChanged', $this->selectedDate->toDateString());  // Dispatch event
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

    public function render()
    {
        return view('livewire.layout.schedule.calendar', [
            'days' => $this->getDaysInMonth(),
            'firstDayOfMonth' => $this->firstDayOfMonth(),
        ]);
    }
}
