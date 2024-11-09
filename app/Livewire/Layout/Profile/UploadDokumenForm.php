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
    public $thumbnail;

    public function uploadDokumen()
    {
        $this->validate([
            'nama' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string'],
            'dokumen' => ['required', 'file', 'mimes:pdf', 'max:1024576'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($this->dokumen) {
            $originalName = $this->dokumen->getClientOriginalName();
            $this->dokumen = $this->dokumen->store('file/dokumen', 'public');
        }

        if ($this->thumbnail) {
            $this->thumbnail = $this->thumbnail->store('thumbnail/dokumen', 'public');
        }

        Dokumen::create([
            'nama' => $this->nama,
            'kategori' => $this->kategori,
            'dokumen' => $this->dokumen,
            'original_name' => $originalName,
            'thumbnail' => $this->thumbnail,
        ]);

        $this->reset(['nama', 'kategori', 'dokumen', 'thumbnail']);

        session()->flash('message', 'Dokumen berhasil diunggah!');
    }

    public function render()
    {
        return view('livewire.layout.profile.upload-dokumen-form');
    }
}
