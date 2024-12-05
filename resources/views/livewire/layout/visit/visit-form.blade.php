<div class="p-6 space-y-8 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    @if (session()->has('message'))
        <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="visit" class="space-y-6 w-full">
        <div class="flex flex-col md:flex-row w-full gap-6">
            {{-- Name --}}
            <div class="w-full">
                <x-input-label for="name" :value="__('Nama')" />
                <x-text-input wire:model="name" type="text" required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            {{-- Email --}}
            <div class="w-full">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input wire:model="email" type="email" required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-col md:flex-row w-full gap-6">
            {{-- Department --}}
            <div class="w-full">
                <x-input-label for="department" :value="__('Asal Instansi')" />
                <x-text-input wire:model="department" type="text" required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('department')" class="mt-2" />
            </div>

            {{-- Intention --}}
            <div class="w-full">
                <x-input-label for="intention" :value="__('Tujuan')" />
                <x-text-input wire:model="intention" type="text" required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('intention')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-col md:flex-row w-full gap-6">
            {{-- Date --}}
            <div class="w-full">
                <x-input-label for="date" :value="__('Tanggal Kunjungan (Pastikan tanggal pada hari rabu)')" />
                <x-text-input wire:model="date" type="date" required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('date')" class="mt-2" />
            </div>

            {{-- Time --}}
            <div class="w-full">
                <x-input-label for="time" :value="__('Waktu Kunjungan')" />
                <x-text-input wire:model="time" type="time" required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('time')" class="mt-2" />
            </div>
        </div>

        <div class="flex flex-col md:flex-row w-full gap-6">
            {{-- Participant --}}
            <div class="w-full">
                <x-input-label for="participant" :value="__('Jumlah Peserta')" />
                <x-text-input wire:model="participant" type="number" required class="block w-full mt-1" />
                <x-input-error :messages="$errors->get('participant')" class="mt-2" />
            </div>

            {{-- Phone Number --}}
            <div class="w-full">
                <x-input-label for="phone" :value="__('Nomor Telepon')" class="mb-1" />
                <x-text-input wire:model="phone" id="phone" name="phone" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Kirim') }}</x-primary-button>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.0.1/build/js/intlTelInput.min.js"></script>
    <script>
        const input = document.querySelector("#phone");
        window.intlTelInput(input, {
            loadUtils: () => import("https://cdn.jsdelivr.net/npm/intl-tel-input@25.0.1/build/js/utils.js"),
        });
    </script>
</div>
