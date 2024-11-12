<?php

namespace App\Livewire\Layout\Home;

use Livewire\Component;
use App\Models\Infografis;

class Infographics extends Component
{
    public $infographics;

    public function mount()
    {
        $this->infographics = Infografis::orderByDesc('id')->get();
    }

    public function render()
    {
        return view('livewire.layout.home.infographics', [
            'infographics' => $this->infographics
        ]);
    }
}
