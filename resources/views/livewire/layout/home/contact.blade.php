{{-- Forms --}}
<form wire:submit.prevent="send" method="POST" class="inline-flex flex-col items-center justify-center w-full gap-4">
    <h3 class="block font-bold text-center lg:hidden text-subtitle text-primary-800">
        Form Pengaduan
    </h3>

    <div class="inline-flex flex-col items-center self-stretch gap-4 lg:flex-row">
        <div class="lg:w-1/2 max-lg:self-stretch">
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input wire:model="name" type="text"
                class="w-full"></x-text-input>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="lg:w-1/2 max-lg:self-stretch">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input wire:model="email" type="email"
                class="w-full"></x-text-input>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
    </div>

    <div class="flex flex-col items-start self-stretch justify-start">
        <x-input-label for="message" :value="__('Isi Pesan')" />
        <x-textarea-input wire:model="message" rows="4"
            class="self-stretch" />
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
    </div>

    <x-primary-button>{{ __('Kirim Pesan') }}</x-primary-button>

    @if (@session()->has('success'))
        <div class="w-full px-4 py-2 bg-green-300 rounded-full">
            {{ session('success') }}
        </div>
    @endif

    @if (@session()->has('error'))
        <div class="w-full px-4 py-2 bg-red-300 rounded-full">
            {{ session('error') }}
        </div>
    @endif
</form>
