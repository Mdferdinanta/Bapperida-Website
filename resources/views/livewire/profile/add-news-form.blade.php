<?php

use App\Models\News;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $news_title;
    public $news_image;
    public $news_content;

    protected $rules = [
        'news_title' => 'required|string|max:255',
        'news_image' => 'required|image|max:102400',
        'news_content' => 'required|string',
    ];

    /**
     * Form Function to Add Input Into Database.
     */
    public function addNews(): void
    {
        $this->validate();

        if ($this->news_image) {
            $this->news_image = $this->news_image->store('images/news', 'public');
        }

        News::create([
            'title' => $this->news_title,
            'image' => $this->news_image,
            'content' => $this->news_content,
        ]);

        $this->reset('news_title', 'news_image', 'news_content');

        $this->dispatch('new-article-published');
    }
}; ?>

<section>
    <x-form-title>
        <x-slot:title>{{ __('Tambah Berita BAPPERIDA Terbaru') }}</x-slot:title>
        {{ __('Isi form berikut untuk unggah berita BAPPERIDA terbaru') }}
    </x-form-title>

    <form wire:submit="addNews" class="mt-6 space-y-6">
        <div>
            <x-input-label for="news_title" :value="__('Judul Berita')" />
            <x-text-input wire:model="news_title" id="news_title" name="news_title" type="text"
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('news_title')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="news_image" :value="__('Gambar')" />
            <x-file-input wire:model="news_image" id="news_image" name="news_image" class="block w-full mt-1" />
            <div wire:loading wire:target="news_image">Uploading...</div>
            <x-input-error :messages="$errors->get('news_image')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="news_content" :value="__('Konten Berita')" />
            <x-textarea-input wire:model="news_content" id="news_content" name="news_content"
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('news_content')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-article-published">
                {{ __('Berita baru telah diunggah.') }}
            </x-action-message>
        </div>
    </form>
</section>
