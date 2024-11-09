<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function showPreview($id)
    {
        $document = Dokumen::findOrFail($id);
        return view('livewire.layout.pages.documents.doc-preview', compact('document'));
    }

    public function showByCategory($category)
    {
        $documents = Dokumen::where('kategori', $category)->get();
        return view('livewire.layout.pages.documents.doc-list', [
            'documents' => $documents,
            'category' => $category,
        ]);
    }

    public function showBuletin()
    {
        $documents = Dokumen::where('kategori', 'buletin')->get();
        return view('livewire.layout.pages.buletins.buletin-list', compact('documents'));
    }

    public function showBuletinPreview($id)
    {
        $document = Dokumen::findOrFail($id);
        return view('livewire.layout.pages.buletins.buletin-preview', compact('document'));
    }

    public function previewDocPDF($category, $id)
    {
        $document = Dokumen::findOrFail($id);

        $fileUrl = asset('storage/' . $document->dokumen);

        return view('livewire.layout.pages.documents.doc-preview', [
            'fileUrl' => $fileUrl,
            'category' => $category,
            'document' => $document,
            'originalName' => $document->original_name,
        ]);
        // return $fileUrl;
    }

    public function previewPDF($id)
    {
        $document = Dokumen::findOrFail($id);

        $fileUrl = asset('storage/' . $document->dokumen);

        return view('livewire.layout.pages.buletins.buletin-preview', [
            'fileUrl' => $fileUrl,
            'document' => $document,
            'originalName' => $document->original_name,
        ]);
        // return $fileUrl;
    }

    public function downloadPDF($category, $id)
    {
        $document = Dokumen::findOrFail($id);

        $fileUrl = storage_path('app/public/' . $document->dokumen);

        // dd($fileUrl);
        return response()->download($fileUrl, $document->original_name);
    }
}
