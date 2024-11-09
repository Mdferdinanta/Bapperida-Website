<section>
    <x-form-title>
        <x-slot:title>
            {{ __('Upload Dokumen') }}
        </x-slot:title>
        {{ __('Upload dokumen dengan ketentuan berikut.') }}
    </x-form-title>

    <form wire:submit.prevent="uploadDokumen" class="mt-6 space-y-6" enctype="multipart/form-data">
        {{-- Nama Dokumen --}}
        <div>
            <x-input-label for="nama" :value="__('Nama Dokumen')" />
            <x-text-input wire:model="nama" id="nama" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>

        {{-- Dokumen PDF --}}
        <div>
            <x-input-label for="dokumen" :value="__('Dokumen PDF')" />
            <input type="file" wire:model="dokumen" id="dokumen" accept=".pdf" class="block w-full mt-1" />
            <div wire:loading wire:target="dokumen">Uploading...</div>
            <x-input-error class="mt-2" :messages="$errors->get('dokumen')" />
        </div>

        {{-- Kategori Dokumen --}}
        <div x-data="{ kategori: @entangle('kategori') }">
            <div>
                <x-input-label for="kategori" :value="__('Kategori Dokumen')" />
                <select wire:model.blur="kategori" x-model="kategori" name="kategori" id="kategori"
                    class="mt-1 bg-transparent border shadow-sm border-mist-300 rounded-xs focus:border-mist-300 focus:ring-primary-200 focus:bg-mist-50">
                    <option value="" @readonly(true) class="bg-neutral-300 text-neutral-500">Kategori</option>
                    <option value="Perencanaan Pembangunan">Perencanaan Pembangunan</option>
                    <option value="Penelitian Pengembangan">Penelitian Pengembangan</option>
                    <option value="Indeks">Indeks</option>
                    <option value="Standar Pelayanan">Standar Pelayanan</option>
                    <option value="Peraturan">Peraturan</option>
                    <option value="Rencana Kerja">Rencana Kerja</option>
                    <option value="Buletin">Buletin</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('kategori')" />
            </div>

            <div x-show="kategori === 'Buletin'" id="thumbnail">
                <x-input-label for="thumbnail" :value="__('Cover Buletin')" class="mt-4" />
                <input type="file" wire:model="thumbnail" id="thumbnail" name="thumbnail"
                    class="block w-full mt-1" accept=".jpg,.jpeg,.png" />
                <div wire:loading wire:target="thumbnail">Uploading...</div>
                <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
            </div>
        </div>

        {{-- Tanggal Publikasi --}}
        <div>
            <x-input-label class="text-neutral-500" :value="__('Tanggal akan terisi otomatis setelah terkirim.')" />
        </div>

        <x-primary-button>
            {{ __('Upload Dokumen') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>
</section>
