<?php

namespace App\Livewire\Layout\Profile;

use App\Models\Agenda;
use Livewire\Component;

class UploadAgendaForm extends Component
{
    public $title, $description, $location, $date, $time_start, $time_finish;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'location' => 'required|string|max:255',
        'date' => 'required|date',
        'time_start' => 'required|date_format:H:i',
        'time_finish' => 'nullable|date_format:H:i|after_or_equal:time_start',
    ];

    public function saveAgenda()
    {
        $this->validate();

        Agenda::create([
            'title' => $this->title,
            'description' => $this->description,
            'location' => $this->location,
            'date' => $this->date,
            'time_start' => $this->time_start,
            'time_finish' => $this->time_finish,
        ]);

        session()->flash('message', 'Jadwal kegiatan baru berhasil ditambahkan!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.layout.profile.upload-agenda-form');
    }
}
