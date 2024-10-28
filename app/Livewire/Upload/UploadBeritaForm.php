<?php

namespace App\Livewire\Upload;

use App\Models\News;
use Livewire\Component;
use Livewire\WithFileUploads;

class UploadBeritaForm extends Component
{
    use WithFileUploads;

    public $judul;
    public $date_published;
    public $konten;
    public $thumbnail;
    
    protected $rules = [
        'judul' => 'required|string|max:255',
        'date_published' => 'required|date',
        'konten' => 'required|string',
        'thumbnail' => 'nullable|image|max:2048',
    ];

    public function uploadNews()
    {
        $this->validate();

        if ($this->thumbnail) {
            $this->thumbnail = $this->thumbnail->store('thumbnail', 'public');
        }

        News::create([
            'judul' => $this->judul,
            'date_published' => $this->date_published,
            'konten' => $this->konten,
            'thumbnail' => $this->thumbnail,
        ]);

        $this->reset(['judul', 'date_published', 'konten', 'thumbnail']);

        session()->flash('message', 'Berita berhasil diunggah!');
    }

    public function render()
    {
        return view('livewire.upload.upload-berita-form');
    }
}
