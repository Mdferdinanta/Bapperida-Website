<?php

namespace App\Livewire\Layout\Pages\Buletins;

use Livewire\Component;

class BuletinCard extends Component
{
    public $document;  // Define the property

    // Mount method to receive the document data
    public function mount($document)
    {
        $this->document = $document;
    }

    public function render()
    {
        return view('livewire.layout.pages.buletins.buletin-card');
    }
}
