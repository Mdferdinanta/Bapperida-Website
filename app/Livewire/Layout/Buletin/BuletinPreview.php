<?php

namespace App\Livewire\Layout\Buletin;

use Livewire\Component;
use App\Models\Document;

class BuletinPreview extends Component
{
    public function render($id)
    {
        $document = Document::findOrFail($id);

        $fileUrl = asset('storage/' . $document->file);

        return view('livewire.layout.buletin.buletin-preview', [
            'fileUrl' => $fileUrl,
            'category_id' => $document->category_id,
            'document' => $document,
            'originalName' => $document->original_name,
        ]);
    }
}
