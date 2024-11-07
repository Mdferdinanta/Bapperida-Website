<?php

namespace App\Livewire\Layout\Pages\Documents;

use App\Models\Dokumen;
use Livewire\Component;

class DocCard extends Component
{
    public $document;  // Define the property

    // Mount method to receive the document data
    public function mount($document)
    {
        $this->document = $document;
    }

    public function render()
    {
        return view('livewire.layout.pages.documents.doc-card');
    }
}
