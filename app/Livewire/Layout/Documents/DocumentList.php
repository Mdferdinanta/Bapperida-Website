<?php

namespace App\Livewire\Layout\Documents;

use Livewire\Component;
use App\Models\Document;
use App\Models\SubCategory;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class DocumentList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $category;
    public $subcategories = [];
    public $search = '';
    public $cat_filter = '';

    public function mount($category)
    {
        $this->category = $category;
        $this->subcategories = SubCategory::where('category_id', $category->id)->get();
    }

    public function download($category, $id)
    {
        $document = Document::findOrFail($id);

        $fileUrl = storage_path('app/public/' . $document->file);

        // dd($fileUrl);
        return response()->download($fileUrl, $document->originalName);
    }

    public function render()
    {
        $documents = Document::where('category_id', $this->category->id)
            ->when($this->cat_filter, function ($query) {
                $query->where('sub_category_id', $this->cat_filter);
            })
            ->where(function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('originalName', 'LIKE', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // dd($this->category->id, $this->subcategories, $documents);
        return view('livewire.layout.documents.document-list', [
            'documents' => $documents,
            'subcategories' => $this->subcategories
        ]);
    }
}
