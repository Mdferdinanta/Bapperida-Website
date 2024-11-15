<section>
    <x-form-title>
        <x-slot:title>
            {{ __('Tambah Agenda kegiatan') }}
        </x-slot:title>
        {{ __('Isi form berikut untuk menambahkan jadwal kegiatan baru.') }}
    </x-form-title>

    <form wire:submit.prevent="saveAgenda" class="mt-6 space-y-6" enctype="multipart/form-data">
        {{-- Title --}}
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input wire:model="title" id="title" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('title')" />
        </div>

        {{-- Description --}}
        <div>
            <x-input-label for="description" :value="__('Description')" />
            <x-textarea-input wire:model="description" id="description" class="block w-full mt-1"></x-textarea-input>
            <x-input-error class="mt-2" :messages="$errors->get('description')" />
        </div>

        {{-- Location --}}
        <div>
            <x-input-label for="location" :value="__('Location')" />
            <x-text-input wire:model="location" id="location" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('location')" />
        </div>

        {{-- Date --}}
        <div>
            <x-input-label for="date" :value="__('Date')" />
            <x-text-input wire:model="date" id="date" type="date" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('date')" />
        </div>

        {{-- Time Start --}}
        <div>
            <x-input-label for="time_start" :value="__('Start Time')" />
            <x-text-input wire:model="time_start" id="time_start" type="time" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('time_start')" />
        </div>

        {{-- Time Finish --}}
        <div>
            <x-input-label for="time_finish" :value="__('Finish Time')" />
            <x-text-input wire:model="time_finish" id="time_finish" type="time" class="block w-full mt-1" />
            <x-input-error class="mt-2" :messages="$errors->get('time_finish')" />
        </div>

        <x-primary-button>
            {{ __('Save Agenda') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>
</section>
