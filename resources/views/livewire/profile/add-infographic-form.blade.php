<?php

use App\Models\Infographic;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public $name;
    public $image;

    protected $rules = [
        'name' => 'required|string|max:255',
        'image' => 'required|image|max:102400',
    ];

    /**
     * Form Function to Add Input Into Database.
     */
    public function addInfo(): void
    {
        $this->validate();

        if ($this->image) {
            $this->image = $this->image->store('images/infographics', 'public');
        }

        Infographic::create([
            'name' => $this->name,
            'image' => $this->image,
        ]);

        $this->reset('name', 'image');

        $this->dispatch('new-infographic-added');
    }
}; ?>

<section>
    <x-form-title>
        <x-slot:title>{{ __('Tambah Infografis Baru') }}</x-slot:title>
        {{ __('Tambahkan infografis baru pada form berikut!') }}
    </x-form-title>

    <form wire:submit.prevent="addInfo" enctype="multipart/form-data" class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Judul Gambar')" />
            <x-text-input wire:model="name" id="name" name="name" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="image" :value="__('Gambar')" />
            <x-file-input wire:model="image" id="image" name="image" required class="block w-full mt-1" />
            <div wire:loading wire:target="image">Uploading...</div>
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-infographic-added">
                {{ __('Infografis telah ditambahkan.') }}
            </x-action-message>
        </div>
    </form>
</section>
