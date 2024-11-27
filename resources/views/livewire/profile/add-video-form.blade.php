<?php

use App\Models\Video;
use App\Models\Playlist;
use Livewire\Volt\Component;

new class extends Component {

    public $video_title;
    public $video_url;
    public $url_type;
    public $description;
    public $video_playlist;
    public $playlists;
    public $new_playlist;
    public $showNewPlaylistInput;

    public function mount()
    {
        $this->playlists = Playlist::all();
    }

    public function updatedImagePlaylist()
    {
        $this->showNewPlaylistInput = ($this->video_playlist === '999');
    }

    /**
     * Form Function to Add Input Into Database.
     */
    public function addVideo(): void
    {
        $this->validate([
            'video_title' => 'required|string|max:255',
            'video_url' => 'required|string|max:255',
            'url_type' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        $playlistId = null;
        if ($this->video_playlist === '999' && $this->new_playlist) {
            $this->validate([
                'new_playlist' => 'required|string|max:255',
            ]);

            $new_playlist = Playlist::create([
                'name' => $this->new_playlist,
            ]);

            $playlistId = $new_playlist->id;
        } else {
            $this->validate([
                'video_playlist' => 'required|exists:playlists,id',
            ]);

            $playlistId = $this->video_playlist;
        }

        Video::create([
            'title' => $this->video_title,
            'url' => $this->video_url,
            'linkType' => $this->url_type,
            'description' => $this->description,
            'playlist_id' => $playlistId,
        ]);

        $this->reset([
            'video_title',
            'video_url',
            'url_type',
            'description',
            'video_playlist',
            'new_playlist',
        ]);

        $this->dispatch('new-video-added');
    }
}; ?>

<section>
    <x-form-title>
        <x-slot:title>{{ __('Tambah Video Baru') }}</x-slot:title>
        {{ __('Tambahkan video (termasuk video inovasi) pada form berikut!') }}
    </x-form-title>

    <form wire:submit.prevent="addVideo" enctype="multipart/form-data" class="mt-6 space-y-6">
        <div>
            <x-input-label for="video_title" :value="__('Judul Video')" />
            <x-text-input wire:model="video_title" id="video_title" name="video_title" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('video_title')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="video_url" :value="__('URL Video')" />
            <x-text-input wire:model="video_url" id="video_url" name="video_url" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('video_url')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="url_type" :value="__('Tipe URL')" />
            <select wire:model.live='url_type' name="url_type" id="url_type" required
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Tipe URL --</option>
                <option value="gdrive">Google Drive</option>
                <option value="youtube">Youtube</option>
            </select>
            <x-input-error :messages="$errors->get('url_type')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Deskripsi Video')" />
            <x-textarea-input wire:model="description" id="description" name="description" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="video_playlist" :value="__('Playlist Kegiatan')" />
            <select wire:model.live='video_playlist' name="video_playlist" id="video_playlist" required
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Playlist --</option>
                <option value="999">++ Tambah Baru ++</option>
                @foreach ($playlists as $playlist)
                    <option value="{{ $playlist->id }}">{{ $playlist->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('video_playlist')" class="mt-2" />
        </div>

        @if ($video_playlist === '999')
            {{-- Additional Input Field --}}
            <div>
                <x-input-label for="new_playlist" :value="__('Tambah Playlist Baru')" />
                <x-text-input wire:model.live="new_playlist" id="new_playlist" name="new_playlist"
                    class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('new_playlist')" class="mt-2" />
            </div>
        @endif

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-video-added">
                {{ __('Video baru telah ditambahkan.') }}
            </x-action-message>
        </div>
    </form>
</section>
