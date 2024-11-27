<?php

namespace App\Livewire\Pages\Buletin;

use Livewire\Component;
use App\Models\Category;

class Buletin extends Component
{
    public function render()
    {
        $category = Category::where('id', '6')->first();

        return view('livewire.pages.buletin.buletin', [
            'category' => $category
        ]);
    }
}
