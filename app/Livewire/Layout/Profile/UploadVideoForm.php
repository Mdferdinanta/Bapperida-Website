<?php

namespace App\Livewire\Layout\Profile;

use App\Models\Video;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadVideoForm extends Component
{
    use WithFileUploads;

    public $judul;
    public $kategori;
    public $type;
    public $embed;
    public $deskripsi;
    public $thumbnail;

    public function uploadVideo()
    {
        $this->validate([
            'judul' => ['required', 'string', 'max:255'],
            'kategori' => ['required', 'string', 'max:255'],
            'type' => ['required', 'string', 'max:255'],
            'embed' => ['required', 'string', 'max:255'],
            'deskripsi' => ['required', 'string'],
            'thumbnail' => ['nullable', 'image', 'max:2048'],
        ]);

        if ($this->thumbnail) {
            $this->thumbnail = $this->thumbnail->store('thumbnail/video', 'public');
        }

        Video::create([
            'judul' => $this->judul,
            'kategori' => $this->kategori,
            'type' => $this->type,
            'embed' => $this->embed,
            'deskripsi' => $this->deskripsi,
            'thumbnail' => $this->thumbnail,
        ]);

        $this->reset(['judul', 'kategori', 'type', 'embed', 'deskripsi', 'thumbnail']);

        session()->flash('message', 'Video berhasil diunggah!');
    }

    public function render()
    {
        return view('livewire.layout.profile.upload-video-form');
    }
}
