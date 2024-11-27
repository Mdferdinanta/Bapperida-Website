<?php

namespace App\Livewire\Layout\Documents;

use Livewire\Component;
use App\Models\Innovation;

class IndexContent extends Component
{
    public function render()
    {
        $indexes = Innovation::all();

        // dd($indexes);
        return view('livewire.layout.documents.index-content', compact('indexes'));
    }
}
