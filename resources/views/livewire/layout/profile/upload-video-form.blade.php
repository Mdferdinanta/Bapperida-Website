<section>
    <x-form-title>
        <x-slot:title>
            {{ __('Upload Video baru') }}
        </x-slot:title>
        {{ __('Upload video Youtube dengan tautannya.') }}
    </x-form-title>

    <form wire:submit.prevent="uploadVideo" class="mt-6 space-y-6">
        {{-- Judul Video --}}
        <div>
            <x-input-label for="judul" :value="__('Judul Video')" />
            <x-text-input wire:model="judul" id="judul" name="judul" type="text" class="block w-full mt-1" required
                autofocus autocomplete="Judul Video" />
            <x-input-error class="mt-2" :messages="$errors->get('judul')" />
        </div>

        {{-- Kategori Video --}}
        <div>
            <x-input-label for="kategori" :value="__('Kategori Video')" />
            <x-text-input wire:model="kategori" id="kategori" name="kategori" type="text" class="block w-full mt-1"
                required autofocus autocomplete="Kategori Video" />
            <x-input-error class="mt-2" :messages="$errors->get('kategori')" />
        </div>

        {{-- Tipe Link Video --}}
        <div>
            <x-input-label for="type" :value="__('Tipe Link Video')" />
            <select wire:model.blur="type" name="type" id="type"
                class="mt-1 bg-transparent border shadow-sm border-mist-300 rounded-xs focus:border-mist-300 focus:ring-primary-200 focus:bg-mist-50">
                <option value="" @readonly(true) class="bg-neutral-300 text-neutral-500">Tipe Link</option>
                <option value="Youtube">Youtube</option>
                <option value="Google Drive">Google Drive</option>
            </select>
            <x-input-error class="mt-2" :messages="$errors->get('type')" />
        </div>

        {{-- Embed Link Video --}}
        <div>
            <x-input-label for="embed" :value="__('Embed Link Video')" />
            <x-text-input wire:model="embed" id="embed" name="embed" type="text" class="block w-full mt-1"
                required autofocus autocomplete="Embed Link Video" />
            <x-input-error class="mt-2" :messages="$errors->get('embed')" />
        </div>

        {{-- Deskripsi Video --}}
        <div>
            <x-input-label for="deskripsi" :value="__('Deskripsi Video')" />
            <x-textarea-input wire:model="deskripsi" id="deskripsi" name="deskripsi" type="text"
                class="block w-full h-64 mt-1" />
            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
        </div>

        {{-- Thumbnail Video --}}
        <div>
            <x-input-label for="thumbnail" :value="__('Thumbnail Video (Optional)')" />
            <input type="file" wire:model="thumbnail" id="thumbnail" class="block w-full mt-1" />
            <div wire:loading wire:target="thumbnail">Uploading...</div>
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>

        <x-primary-button>
            {{ __('Upload Video') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>
</section>
