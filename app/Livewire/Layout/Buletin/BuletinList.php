<?php

namespace App\Livewire\Layout\Buletin;

use Livewire\Component;
use App\Models\Document;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class BuletinList extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $category;
    public $search = '';

    public function mount($category)
    {
        $this->category = $category;
    }

    public function download($id)
    {
        $buletin = Document::findOrFail($id);

        $fileUrl = storage_path('app/public/' . $buletin->file);

        // dd($fileUrl);
        return response()->download($fileUrl, $buletin->originalName);
    }

    public function render()
    {
        $buletins = Document::where('category_id', $this->category->id)
            ->where(function ($query) {
                $query->where('name', 'LIKE', '%' . $this->search . '%')
                      ->orWhere('originalName', 'LIKE', '%' . $this->search . '%');
            })
            ->orderBy('created_at', 'desc')
            ->paginate(10);

        // dd($this->category->id, $buletins);
        return view('livewire.layout.buletin.buletin-list', [
            'buletins' => $buletins
        ]);
    }
}
