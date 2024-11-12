<?php

namespace App\Livewire\Layout\Pages\Profiles;

use Livewire\Component;

class ProfileCard extends Component
{
    public $staff;

    public function render()
    {
        return view('livewire.layout.pages.profiles.profile-card', [
            'staff' => $this->staff
        ]);
    }
}
