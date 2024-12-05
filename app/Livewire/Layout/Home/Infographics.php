<?php

namespace App\Livewire\Layout\Home;

use Livewire\Component;
use App\Models\Infographic;

class Infographics extends Component
{
    public function render()
    {
        $infographics = Infographic::orderBy('id', 'desc')->get();

        return view('livewire.layout.home.infographics', compact('infographics'));
    }
}
