<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public $activities;

    public function mount()
    {
        $this->activities = Agenda::orderBy('id', 'desc')->all();
    }

    public function render()
    {
        return view('components.kegiatan-card', [
            'activities' => $this->activities,
        ]);
    }
}
