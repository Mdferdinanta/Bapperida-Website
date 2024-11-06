<?php

namespace App\Livewire\Layout\Profile;

use App\Models\Dokumen;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadDokumenForm extends Component
{
    use WithFileUploads;

    public $nama;
    public $kategori;
    public $dokumen;
    public $coverBuletin;

    protected $rules = [
        'nama' => 'required|string|max:255',
        'kategori' => 'required|string',
        'dokumen' => 'required|mimes:pdf|max:1024576',
        'coverBuletin' => 'nullable|image|max:2048',
    ];

    public function uploadDokumen()
    {
        // dd($this->dokumen);
        $this->validate();

        if ($this->dokumen) {
            $this->dokumen = $this->dokumen->store('dokumen', 'public');
        }

        if ($this->coverBuletin) {
            $this->coverBuletin = $this->coverBuletin->store('thumbnail/buletin', 'public');
        }

        Dokumen::create([
            'nama' => $this->nama,
            'kategori' => $this->kategori,
            'dokumen' => $this->dokumen,
            'coverBuletin' => $this->coverBuletin,
        ]);

        $this->reset(['nama', 'kategori', 'dokumen', 'coverBuletin']);

        session()->flash('message', 'Dokumen berhasil diunggah!');
    }

    public function render()
    {
        return view('livewire.layout.profile.upload-dokumen-form');
    }
}
