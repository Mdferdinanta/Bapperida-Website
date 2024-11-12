<section>
    <x-form-title>
        <x-slot:title>
            {{ __('Upload Infografis baru') }}
        </x-slot:title>
        {{ __('Upload infografis terbaru untuk ditampilkan di halaman infografis.') }}
    </x-form-title>

    <form wire:submit.prevent="uploadInfografis" class="mt-6 space-y-6">
        {{-- Judul Infografis --}}
        <div>
            <x-input-label for="judul" :value="__('Judul Infografis')" />
            <x-text-input wire:model="judul" id="judul" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('judul')" />
        </div>

        {{-- Thumbnail Infografis --}}
        <div>
            <x-input-label for="thumbnail" :value="__('Gambar Infografis')" />
            <input type="file" wire:model="thumbnail" id="thumbnail" class="block w-full mt-1" />
            <div wire:loading wire:target="thumbnail">Uploading...</div>
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>

        <x-primary-button>
            {{ __('Upload Infografis') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>
</section>
