<section>
    <header>
        <h2 class="text-Subtitle font-subtitleBold">
            {{ __('Upload Video baru') }}
        </h2>

        <p class="mt-1">
            {{ __('Upload video Youtube dengan ID pada tautan') }}
        </p>
    </header>

    <form wire:submit.prevent="uploadVideo" class="mt-6 space-y-6">
        {{-- Judul Dokumen --}}
        <div>
            <x-input-label for="judulVideo" :value="__('Judul Video')" />
            <x-text-input wire:model="judulVideo" id="judulVideo" name="judulVideo" type="text" class="block w-full mt-1" required
                autofocus autocomplete="Judul Video" />
            <x-input-error class="mt-2" :messages="$errors->get('judulVideo')" />
        </div>

        {{-- Embed Link Video --}}
        <div>
            <x-input-label for="embedVideo" :value="__('Embed Link Video')" />
            <x-text-input wire:model="embedVideo" id="embedVideo" name="embedVideo" type="text" class="block w-full mt-1" required
                autofocus autocomplete="Embed Link Video" />
            <x-input-error class="mt-2" :messages="$errors->get('embedVideo')" />
        </div>

        {{-- Deskripsi Video --}}
        <div>
            <x-input-label for="deskripsi" :value="__('Deskripsi Video')" />
            <x-textarea-input wire:model="deskripsi" id="deskripsi" name="deskripsi" type="text"
                class="block w-full h-64 mt-1" />
            <x-input-error class="mt-2" :messages="$errors->get('deskripsi')" />
            </div>
    </form>
</section>
