<?php

namespace App\Livewire\Layout\Staff;

use App\Models\Staff;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithoutUrlPagination;

class StaffContent extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $search;

    public function render()
    {
        $staff = Staff::where('name','LIKE','%'.$this->search.'%')
            ->orWhere('role','LIKE','%'.$this->search.'%')
            ->paginate(10);

        return view('livewire.layout.staff.staff-content', compact('staff'));
    }
}
