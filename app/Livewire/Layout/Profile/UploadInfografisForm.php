<?php

namespace App\Livewire\Layout\Profile;

use Livewire\Component;
use App\Models\Infografis;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class UploadInfografisForm extends Component
{
    use WithFileUploads;

    public $judul;
    public $thumbnail;

    protected $rules = [
        'judul' => 'required|string|max:255',
        'thumbnail' => 'required|image|mimes:jpeg,png,jpg|max:102400', // Validate file as an image
    ];

    // Handle form submission
    public function uploadInfografis()
    {
        $this->validate();

        // Store the uploaded image
        $thumbnailPath = $this->thumbnail->store('file/infografis', 'public');

        // Create new Infografis record
        Infografis::create([
            'judul' => $this->judul,
            'thumbnail' => $thumbnailPath,
        ]);

        // Clear the fields after submission
        $this->reset(['judul', 'thumbnail']);

        // Flash a success message
        session()->flash('message', 'Infografis uploaded successfully!');
    }
    public function render()
    {
        return view('livewire.layout.profile.upload-infografis-form');
    }
}
