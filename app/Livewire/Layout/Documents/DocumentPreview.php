<?php

namespace App\Livewire\Layout\Documents;

use App\Models\Document;
use Livewire\Component;

class DocumentPreview extends Component
{
    public function render($category, $id)
    {
        $document = Document::findOrFail($id);

        $fileUrl = asset('storage/' . $document->file);

        return view('livewire.layout.documents.document-preview', [
            'fileUrl' => $fileUrl,
            'category_id' => $document->category_id,
            'document' => $document,
            'originalName' => $document->original_name,
        ]);
    }
}
