<section>
    <x-form-title>
        <x-slot:title>
            {{ __('Tambah Staff baru') }}
        </x-slot:title>
        {{ __('Tambahkan staff baru beserta jabatan untuk halaman staff.') }}
    </x-form-title>

    <form wire:submit.prevent="addStaff" class="mt-6 space-y-6">
        {{-- NIP Staff --}}
        <div>
            <x-input-label for="nip" :value="__('NIP Staff')" />
            <x-text-input wire:model="nip" id="nip" type="number" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('nip')" />
        </div>

        {{-- Nama Staff --}}
        <div>
            <x-input-label for="nama" :value="__('Nama Staff')" />
            <x-text-input wire:model="nama" id="nama" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('nama')" />
        </div>

        {{-- Jabatan Staff --}}
        <div>
            <x-input-label for="jabatan" :value="__('Jabatan Staff')" />
            <x-text-input wire:model="jabatan" id="jabatan" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('jabatan')" />
        </div>

        {{-- Foto Profil --}}
        <div>
            <x-input-label for="foto" :value="__('Foto Profil')" />
            <input type="file" wire:model="foto" id="foto" class="block w-full mt-1" />
            <div wire:loading wire:target="foto">Uploading...</div>
            <x-input-error class="mt-2" :messages="$errors->get('foto')" />
        </div>

        <x-primary-button>
            {{ __('Tambah Staff') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>
</section>
