<?php

use App\Models\Album;
use App\Models\Image;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $image_name;
    public $image_album;
    public $image;
    public $image_date;
    public $albums;
    public $new_album;
    public $showNewAlbumInput;

    public function mount()
    {
        $this->albums = Album::all();
    }

    public function updatedImageAlbum()
    {
        $this->showNewAlbumInput = ($this->image_album === '999');
    }

    /**
     * Form Function to Add Input Into Database.
     */
    public function addImage(): void
    {
        $this->validate([
            'image' => 'required|image|max:102400',
            'image_name' => 'required|string|max:255',
            'image_date' => 'required|date',
        ]);

        $albumId = null;
        if ($this->image_album === '999' && $this->new_album) {
            $this->validate([
                'new_album' => 'required|string|max:255',
            ]);

            $new_album = Album::create([
                'name' => $this->new_album,
            ]);

            $albumId = $new_album->id;
        } else {
            $this->validate([
                'image_album' => 'required|exists:albums,id',
            ]);

            $albumId = $this->image_album;
        }

        if ($this->image) {
            $this->image = $this->image->store('images/activities', 'public');
        }

        Image::create([
            'image' => $this->image,
            'name' => $this->image_name,
            'date' => $this->image_date,
            'album_id' => $albumId,
        ]);

        $this->reset([
            'image_name',
            'image_album',
            'image',
            'image_date',
            'new_album'
        ]);

        $this->dispatch('new-image-added');
    }
}; ?>

<section>
    <x-form-title>
        <x-slot:title>{{ __('Tambah Foto Kegiatan Baru') }}</x-slot:title>
        {{ __('Tambahkan foto kegiatan BAPPERIDA pada form berikut!') }}
    </x-form-title>

    <form wire:submit.prevent="addImage" enctype="multipart/form-data" class="mt-6 space-y-6">
        <div>
            <x-input-label for="image_name" :value="__('Nama Foto')" />
            <x-text-input wire:model="image_name" id="image_name" name="image_name" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('image_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="image" :value="__('Foto Kegiatan')" />
            <x-file-input wire:model="image" id="image" name="image" required class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="image_date" :value="__('Tanggal Kegiatan')" />
            <x-text-input wire:model="image_date" id="image_date" name="image_date" type="date" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('image_date')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="image_album" :value="__('Album Kegiatan')" />
            <select wire:model.live='image_album' name="image_album" id="image_album" required
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Album --</option>
                <option value="999">++ Tambah Baru ++</option>
                @foreach ($albums as $album)
                    <option value="{{ $album->id }}">{{ $album->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('image_album')" class="mt-2" />
        </div>

        @if ($image_album === '999')
            {{-- Additional Input Field --}}
            <div>
                <x-input-label for="new_album" :value="__('Tambah Album Baru')" />
                <x-text-input wire:model.live="new_album" id="new_album" name="new_album"
                    class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('new_album')" class="mt-2" />
            </div>
        @endif

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-image-added">
                {{ __('Foto baru telah ditambahkan.') }}
            </x-action-message>
        </div>
    </form>
</section>
