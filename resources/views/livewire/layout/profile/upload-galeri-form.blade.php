<section>
    <x-form-title>
        <x-slot:title>
            {{ __('Upload Foto baru') }}
        </x-slot:title>
        {{ __('Upload foto kegiatan.') }}
    </x-form-title>

    <form wire:submit.prevent="uploadGaleri" class="mt-6 space-y-6">
        {{-- Nama Foto --}}
        <div>
            <x-input-label for="nama" :value="__('Nama Foto')" />
            <x-text-input wire:model="nama" id="nama" name="nama" type="text" class="block w-full mt-1"
                required autofocus autocomplete="Judul Video" />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>

        {{-- Album Foto --}}
        <div>
            <x-input-label for="album" :value="__('Album Foto')" />
            <x-text-input wire:model="album" id="album" name="album" type="text" class="block w-full mt-1"
                required autofocus autocomplete="Judul Video" />
            <x-input-error class="mt-2" :messages="$errors->get('album')" />
        </div>

        {{-- Foto --}}
        <div>
            <x-input-label for="foto" :value="__('Foto')" />
            <input type="file" wire:model="foto" id="foto" class="block w-full mt-1" />
            <div wire:loading wire:target="foto">Uploading...</div>
            <x-input-error class="mt-2" :messages="$errors->get('foto')" />
        </div>

        <x-primary-button>
            {{ __('Upload Foto') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>
</section>
