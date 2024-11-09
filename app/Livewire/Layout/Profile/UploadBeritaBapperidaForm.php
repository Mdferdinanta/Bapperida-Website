<?php

namespace App\Livewire\Layout\Profile;

use App\Models\Berita;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadBeritaBapperidaForm extends Component
{
    use WithFileUploads;

    public $judul;
    public $artikel;
    public $thumbnail;

    public function uploadBerita()
    {
        $this->validate([
            'judul' => ['required', 'string', 'max:255'],
            'artikel' => ['required', 'string'],
            'thumbnail' => ['required', 'image', 'max:2048'],
        ]);

        if ($this->thumbnail) {
            $this->thumbnail = $this->thumbnail->store('thumbnail/berita', 'public');
        }

        Berita::create([
            'judul' => $this->judul,
            'artikel' => $this->artikel,
            'thumbnail' => $this->thumbnail,
        ]);

        $this->reset(['judul', 'artikel', 'thumbnail']);

        session()->flash('message', 'Berita berhasil diunggah!');
    }

    public function render()
    {
        return view('livewire.layout.profile.upload-berita-bapperida-form');
    }
}
