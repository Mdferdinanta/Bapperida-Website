<?php

namespace App\Livewire\Layout\Documents;

use App\Models\IndexCategories;
use Livewire\Component;
use App\Models\Index;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class IndexContent extends Component
{
    use WithPagination, WithoutUrlPagination;
    public $idx_filter = '';
    // public $search = '';
    public $categories;
    public $selectedCategory = null;

    public function render()
    {
        $indexes = collect();

        $this->categories = IndexCategories::all();

        if ($this->idx_filter) {
            $this->selectedCategory = IndexCategories::find($this->idx_filter);
            if ($this->selectedCategory) {
                $indexes = Index::where('category_id', $this->selectedCategory->id)
                    ->orderBy('id', 'desc')
                    ->paginate(10);
            }
        }

        // dd($categories, $this->idx_filter, $selectedCategory);
        return view('livewire.layout.documents.index-content', [
            'indexes' => $indexes,
            'categories' => $this->categories,
            'selectedCategory' => $this->selectedCategory,
        ]);
    }
}
