<?php

namespace App\Livewire\Layout\Visit;

use App\Models\Visit;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class VisitorTable extends Component
{
    use WithPagination, WithoutUrlPagination;

    public function render()
    {
        $visitors = Visit::orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.layout.visit.visitor-table', compact('visitors'));
    }
}
