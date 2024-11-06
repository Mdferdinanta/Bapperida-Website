<section>
    <x-form-title>
        <x-slot:title>
            {{ __('Upload Berita baru') }}
        </x-slot:title>
        {{ __('Upload berita terbaru untuk ditampilkan di halaman berita.') }}
    </x-form-title>

    <form wire:submit.prevent="uploadBerita" class="mt-6 space-y-6">
        {{-- Judul Berita --}}
        <div>
            <x-input-label for="judul" :value="__('Judul Berita')" />
            <x-text-input wire:model="judul" id="judul" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('judul')" />
        </div>

        {{-- Artikel Berita --}}
        <div>
            <x-input-label for="artikel" :value="__('Artikel Berita')" />
            <x-textarea-input wire:model="artikel" id="artikel" class="block w-full h-64 mt-1" />
            <x-input-error class="mt-2" :messages="$errors->get('artikel')" />
        </div>

        {{-- Thumbnail Berita--}}
        <div>
            <x-input-label for="thumbnail" :value="__('Thumbnail Berita')" />
            <input type="file" wire:model="thumbnail" id="thumbnail" class="block w-full mt-1" />
            <div wire:loading wire:target="thumbnail">Uploading...</div>
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>

        {{-- Tanggal Publikasi --}}
        <div>
            <x-input-label class="text-neutral-500" :value="__('Tanggal akan terisi otomatis setelah terkirim.')" />
        </div>

        <x-primary-button>
            {{ __('Upload Berita') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>
</section>
