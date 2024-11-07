<?php

namespace App\Livewire\Layout\Pages\Documents;

use App\Models\Dokumen;
use Livewire\Component;

class DocList extends Component
{
    public function render()
    {
        return view('livewire.layout.pages.documents.doc-list');
    }
}
