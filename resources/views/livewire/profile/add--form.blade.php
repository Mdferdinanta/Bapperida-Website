<?php

use App\Models\Innovation;
use Livewire\Volt\Component;

new class extends Component
{
    public $index_name;
    public $index_category;
    public $index_year;
    public $index_score;
    public $index_label;
    public $index_rank;
    public $index_information;

    protected $rules = [
        'index_name' => 'required|string|max:255',
        'index_category' => 'required|string|max:255',
        'index_year' => 'required|date',
        'index_score' => 'required|numeric',
        'index_label' => 'required|string|max:255',
        'index_rank' => 'nullable|numeric',
        'index_information' => 'nullable|string',
    ];

    /**
     * Form Function to Add Input Into Database.
     */
    public function addInnovation(): void
    {
        $this->validate();

        Innovation::create([
            'name' => $this->index_name,
            'category' => $this->index_category,
            'year' => $this->index_year,
            'score' => $this->index_score,
            'label' => $this->index_label,
            'rank' => $this->index_rank,
            'information' => $this->index_information,
        ]);

        $this->reset([
            'index_name',
            'index_category',
            'index_year',
            'index_score',
            'index_label',
            'index_rank',
            'index_information'
        ]);

        $this->dispatch('new-staff-added');
    }
}; ?>

<section>
    <x-form-title>
        <x-slot:title>{{ __('Tambah Indeks Inovasi Baru') }}</x-slot:title>
        {{ __('Tambahkan indeks inovasi sesuai ketentuan pada form berikut!') }}
    </x-form-title>

    <form wire:submit.prevent="addInnovation" enctype="multipart/form-data" class="mt-6 space-y-6">
        <div>
            <x-input-label for="index_name" :value="__('Nama Indeks Inovasi')" />
            <x-text-input wire:model="index_name" id="index_name" name="index_name" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_category" :value="__('Kategori Indeks Inovasi')" />
            <x-text-input wire:model="index_category" id="index_category" name="index_category" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_category')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_year" :value="__('Tahun')" />
            <x-text-input wire:model="index_year" id="index_year" name="index_year" type="date" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_year')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_score" :value="__('Skor Indeks')" />
            <x-text-input wire:model="index_score" id="index_score" name="index_score" type="number" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_score')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_label" :value="__('Predikat')" />
            <x-text-input wire:model="index_label" id="index_label" name="index_label" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_label')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_rank" :value="__('Ranking (opsional)')" />
            <x-text-input wire:model="index_rank" id="index_rank" name="index_rank" type="number"
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_rank')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_information" :value="__('Keterangan (opsional)')" />
            <x-textarea-input wire:model="index_information" id="index_information" name="index_information" type="text"
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_information')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-staff-added">
                {{ __('Staff telah ditambahkan.') }}
            </x-action-message>
        </div>
    </form>
</section>
