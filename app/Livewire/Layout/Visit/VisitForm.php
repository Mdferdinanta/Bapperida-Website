<?php

namespace App\Livewire\Layout\Visit;

use Carbon\Carbon;
use App\Models\Visit;
use Livewire\Component;

class VisitForm extends Component
{
    public $name;
    public $email;
    public $department;
    public $intention;
    public $date;
    public $time;
    public $participant;
    public $phone;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'department' => 'required|string|max:255',
        'intention' => 'required|string|max:255',
        'date' => 'required|date|after_or_equal:today',
        'time' => 'required',
        'participant' => 'required|integer|min:1',
        'phone' => 'required|string|max:15',
    ];

    public function visit()
    {
        $this->validate();

        // Ensure the visit date is a Wednesday
        if (Carbon::parse($this->date)->dayOfWeek !== Carbon::WEDNESDAY) {
            $this->addError('date', 'Tanggal kunjungan harus pada hari Rabu.');
            return;
        }

        Visit::create([
            'name' => $this->name,
            'email' => $this->email,
            'department' => $this->department,
            'intention' => $this->intention,
            'date' => $this->date,
            'time' => $this->time,
            'participant' => $this->participant,
            'phone' => $this->phone,
        ]);

        session()->flash('message', 'Kunjungan berhasil ditambahkan.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.layout.visit.visit-form');
    }
}
