<?php

namespace App\Livewire\Pages\Documents;

use Livewire\Component;
use App\Models\Category;

class Document extends Component
{
    public function render($cat_name)
    {
        $category = Category::where('name', $cat_name)->first();

        return view('livewire.pages.documents.document', [
            'category' => $category
        ]);
    }
}
