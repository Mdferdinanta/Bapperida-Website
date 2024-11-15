<?php

namespace App\Livewire\Layout\Profile;

use App\Models\Staff;
use Livewire\Component;
use Illuminate\Validation\Rule;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadStaffForm extends Component
{
    use WithFileUploads;

    public $nip;
    public $nama;
    public $foto;
    public $jabatan;

    // Define validation rules
    protected $rules = [
        'nip' => 'required|integer|unique:staff,nip',
        'nama' => 'required|string|max:255',
        'foto' => 'required|image|mimes:jpeg,png,jpg|max:102400',
        'jabatan' => 'required|string|max:255',
    ];

    // Handle form submission
    public function addStaff()
    {
        $this->validate();

        if ($this->foto) {
            $this->foto = $this->foto->store('galeri/foto-profil', 'public');
        }

        // Create new Staff record
        Staff::create([
            'nip' => $this->nip,
            'nama' => $this->nama,
            'foto' => $this->foto,
            'jabatan' => $this->jabatan,
        ]);

        // Clear the fields after submission
        $this->reset(['nip', 'nama', 'foto', 'jabatan']);

        // Flash a success message
        session()->flash('message', 'Staff added successfully!');
    }

    public function render()
    {
        return view('livewire.layout.profile.upload-staff-form');
    }
}
