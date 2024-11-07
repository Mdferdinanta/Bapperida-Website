<?php

namespace App\Http\Controllers;

use App\Models\Dokumen;
use Illuminate\Http\Request;

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
        // dd($documents);
        return view('livewire.layout.pages.documents.doc-list', compact('documents'));
    }
}
