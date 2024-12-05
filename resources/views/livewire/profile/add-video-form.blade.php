<?php

use App\Models\Video;
use App\Livewire\Quill;
use App\Models\Playlist;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $video_title;
    public $video_department;
    public $video_url;
    public $date;
    public $url_type;
    public $description;
    public $thumbnail;
    public $video_type;
    public $video_playlist;
    public $playlists;
    public $new_playlist;

    /**
     * Quill Editor Event Listener.
     */
     public $listeners = [Quill::EVENT_VALUE_UPDATED];
    public function quill_value_updated($value)
    {
        $this->description = $value;
    }

    public function mount()
    {
        $this->playlists = Playlist::all();
    }

    /**
     * Form Function to Add Input Into Database.
     */
    public function addVideo(): void
    {
        $this->validate([
            'video_type' => 'required|string|max:255',
            'video_title' => 'required|string|max:255',
            'video_department' => 'nullable|string|max:255',
            'video_url' => 'required|string|max:255',
            'url_type' => 'required|string|max:255',
            'thumbnail' => 'required|image|max:102400',
            'description' => 'required|string',
            'date' => 'required|date',
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

        if ($this->thumbnail) {
            $this->thumbnail = $this->thumbnail->store('images/video_thumbnail', 'public');
        }

        Video::create([
            'title' => $this->video_title,
            'video_type' => $this->video_type,
            'department' => $this->video_department,
            'url' => $this->video_url,
            'link_type' => $this->url_type,
            'thumbnail' => $this->thumbnail,
            'date' => $this->date,
            'description' => $this->description,
            'playlist_id' => $playlistId,
        ]);

        $this->reset(['video_title', 'video_type', 'video_department', 'video_url', 'url_type', 'thumbnail', 'description', 'date', 'video_playlist', 'new_playlist']);

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
            <x-input-label for="video_type" :value="__('Tipe Video')" />
            <select wire:model.live='video_type' name="video_type" id="video_type" required
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Tipe Video --</option>
                <option value="1">Inovasi</option>
                <option value="2">Kegiatan</option>
            </select>
            <x-input-error :messages="$errors->get('video_type')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="video_title" :value="__('Judul Kegiatan / Inovasi')" />
            <x-text-input wire:model="video_title" id="video_title" name="video_title" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('video_title')" class="mt-2" />
        </div>

        @if ($video_type === '1')
            <div>
                <x-input-label for="video_department" :value="__('Instansi / Perangkat Daerah')" />
                <x-text-input wire:model="video_department" id="video_department" name="video_department" type="text"
                    required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('video_department')" class="mt-2" />
            </div>
        @endif

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
            <x-input-label for="thumbnail" :value="__('Thumbnail')" />
            <x-file-input wire:model="thumbnail" id="thumbnail" name="thumbnail" required class="block w-full mt-1" />
            <div wire:loading wire:target="thumbnail">Uploading...</div>
            <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="description" :value="__('Deskripsi Video')" />
            <div wire:ignore>
                <livewire:quill :value="$description">
            </div>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="date" :value="__('Tanggal')" />
            <x-text-input wire:model="date" id="date" name="date" type="date" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('date')" class="mt-2" />
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
                {{ __('Video baru telah ditambahkan. Refresh halaman jika menambahkan Playlist baru.') }}
            </x-action-message>
        </div>
    </form>

    <!-- Include the Quill library -->
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
</section>
