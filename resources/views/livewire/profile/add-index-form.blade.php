<?php

use App\Models\Index;
use Livewire\Volt\Component;
use App\Models\IndexCategories;

new class extends Component {
    public $index_name;
    public $index_category;
    public $index_year;
    public $index_score;
    public $index_grade;
    public $index_rank;
    public $index_information;
    public $index_description;
    public $categories;
    public $new_category;
    public $showNewCategoryInput;

    public function mount()
    {
        $this->categories = IndexCategories::all();
    }

    public function updatedIndexCategory()
    {
        $this->showNewCategoryInput = $this->index_category === '999';
    }

    /**
     * Form Function to Add Input Into Database.
     */
    public function addInnovation(): void
    {
        $this->validate([
            'index_name' => 'required|string|max:255',
            'index_category' => 'required|string|max:255',
            'index_year' => 'required|date',
            'index_score' => 'required|numeric',
            'index_grade' => 'required|string|max:255',
            'index_rank' => 'nullable|numeric',
            'index_information' => 'nullable|string',
        ]);

        $categoryId = null;
        if ($this->index_category === '999' && $this->new_category && $this->index_description) {
            $this->validate([
                'new_category' => 'required|string|max:255',
                'index_description' => 'nullable|string',
            ]);

            $new_category = IndexCategories::create([
                'title' => $this->new_category,
                'description' => $this->index_description,
            ]);

            $categoryId = $new_category->id;
        } else {
            $this->validate([
                'index_category' => 'required|exists:index_categories,id',
            ]);

            $categoryId = $this->index_category;
        }

        Index::create([
            'name' => $this->index_name,
            'category_id' => $categoryId,
            'year' => $this->index_year,
            'score' => $this->index_score,
            'grade' => $this->index_grade,
            'rank' => $this->index_rank,
            'information' => $this->index_information,
        ]);

        $this->reset(['index_name', 'index_category', 'index_year', 'index_score', 'index_grade', 'index_rank', 'index_information']);

        $this->dispatch('new-index-added');
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
            <select wire:model.live='index_category' name="index_category" id="index_category" required
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Kategori --</option>
                <option value="999">++ Tambah Baru ++</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('index_category')" class="mt-2" />
        </div>

        @if ($index_category === '999')
            {{-- Additional Input Field --}}
            <div>
                <x-input-label for="new_category" :value="__('Tambah Album Baru')" />
                <x-text-input wire:model.live="new_category" id="new_category" name="new_category"
                    class="block w-full mt-1" required />
                <x-input-error :messages="$errors->get('new_category')" class="mt-2" />
            </div>

            {{-- Description Field --}}
            <div>
                <x-input-label for="index_description" :value="__('Deskripsi Indeks')" />
                <x-textarea-input wire:model.live="index_description" id="index_description" name="index_description"
                    type="text" class="block w-full mt-1" required />
                <x-input-error :messages="$errors->get('index_description')" class="mt-2" />
            </div>
        @endif

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
            <x-input-label for="index_grade" :value="__('Predikat')" />
            <x-text-input wire:model="index_grade" id="index_grade" name="index_grade" type="text" required
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_grade')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_rank" :value="__('Ranking (opsional)')" />
            <x-text-input wire:model="index_rank" id="index_rank" name="index_rank" type="number"
                class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_rank')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="index_information" :value="__('Keterangan (opsional)')" />
            <x-textarea-input wire:model="index_information" id="index_information" name="index_information"
                type="text" class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('index_information')" class="mt-2" />
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-index-added">
                {{ __('Indeks Inovasi telah ditambahkan.') }}
            </x-action-message>
        </div>
    </form>
</section>
