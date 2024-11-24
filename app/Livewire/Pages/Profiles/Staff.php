<?php

namespace App\Livewire\Pages\Profiles;

use App\Models\Staff as StaffModel;
use Livewire\Component;
use Livewire\WithPagination;

class Staff extends Component
{
    use WithPagination;

    public function render()
    {
        $staff = StaffModel::orderBy('id')
            ->paginate(10);
        // dd(vars: $this->search);
        return view('livewire.pages.profiles.staff', compact('staff'));
    }
}
