<?php

namespace App\Livewire\Layout\Profile;

use App\Models\Galeri;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadGaleriForm extends Component
{
    use WithFileUploads;

    public $nama;
    public $album;
    public $foto;

    public function uploadGaleri()
    {
        $this->validate([
            'nama' => ['required', 'string', 'max:255'],
            'album' => ['required', 'string', 'max:255'],
            'foto' => ['required', 'image', 'max:102400'],
        ]);

        if ($this->foto) {
            $this->foto = $this->foto->store('galeri/foto', 'public');
        }

        Galeri::create([
            'nama' => $this->nama,
            'album' => $this->album,
            'foto' => $this->foto,
        ]);

        $this->reset(['nama', 'album', 'foto']);

        session()->flash('message', 'Foto berhasil diunggah!');
    }
    public function render()
    {
        return view('livewire.layout.profile.upload-galeri-form');
    }
}
