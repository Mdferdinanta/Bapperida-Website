<?php

use App\Models\Staff;
use Livewire\Volt\Component;

new class extends Component
{
    public $staff_name;
    public $staff_role;

    protected $rules = [
        'staff_name' => 'required|string|max:255',
        'staff_role' => 'required|string|max:255',
    ];

    /**
     * Form Function to Add Input Into Database.
     */
    public function addStaff(): void
    {
        $this->validate();

        Staff::create([
            'name' => $this->staff_name,
            'role' => $this->staff_role,
        ]);

        $this->reset('staff_name', 'staff_role');

        $this->dispatch('new-staff-added');
    }
}; ?>

<section>
    <x-form-title>
        <x-slot:title>{{ __('Tambah Staff Baru') }}</x-slot:title>
        {{ __('Tambahkan nama dan jabatan staff pada form berikut!') }}
    </x-form-title>

    <form wire:submit="addStaff" class="mt-6 space-y-6">
        <div>
            <x-input-label for="staff_name" :value="__('Nama Lengkap')" />
            <x-text-input wire:model="staff_name" id="staff_name" name="staff_name" type="text"
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('staff_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="staff_role" :value="__('Jabatan')" />
            <x-text-input wire:model="staff_role" id="staff_role" name="staff_role" type="text"
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('staff_role')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-staff-added">
                {{ __('Staff telah ditambahkan.') }}
            </x-action-message>
        </div>
    </form>
</section>
