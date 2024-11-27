<?php

use App\Models\Category;
use App\Models\Document;
use App\Models\SubCategory;
use Livewire\Volt\Component;
use Livewire\WithFileUploads;

new class extends Component {
    use WithFileUploads;

    public $file;
    public $doc_name;
    public $thumbnail;
    public $categories;
    public $doc_category;
    public $new_subcategory;
    public $doc_sub_category;
    public $subcategories = [];
    public $showNewSubcategoryInput = false;

    public function mount(): void
    {
        $this->categories = Category::all();
    }

    public function updatedDocCategory()
    {
        if ($this->doc_category !== '6') {
            $category = Category::where('id', $this->doc_category)->first();
            $this->subcategories = SubCategory::where('category_id', $category->id)->get();
        } else {
            $this->subcategories = [];
        }
    }

    public function updatedDocSubCategory()
    {
        $this->showNewSubcategoryInput = ($this->doc_sub_category === '999');
    }

    public function addSubcategory()
    {
        $this->validate(['new_subcategory' => 'required|string|max:255']);

        $subcategory = SubCategory::create([
            'category_id' => $this->doc_category,
            'name' => $this->new_subcategory,
        ]);

        $this->subcategories->push($subcategory);
        $this->new_subcategory = null;
        $this->doc_sub_category = $subcategory->id;
    }

    /**
     * Form Function to Add Input Into Database.
     */
    public function addDocs(): void
    {
        $this->validate([
            'doc_name' => 'required|string|max:255',
            'thumbnail' => 'nullable|image|max:10240',
            'file' => 'required|mimes:pdf|max:1024000',
            'doc_category' => 'required|exists:categories,id',
        ]);

        // dd($this->doc_category, $this->doc_sub_category, $this->new_subcategory);
        $subCategoryId = null;
        if ($this->doc_sub_category === '999' && $this->new_subcategory) {
            $this->validate([
                'new_subcategory' => 'required|string|max:255',
            ]);

            $new_subcategory = SubCategory::create([
                'category_id' => $this->doc_category,
                'name' => $this->new_subcategory,
            ]);

            $subCategoryId = $new_subcategory->id;
        } else {
            $this->validate([
                'doc_sub_category' => 'nullable|exists:sub_categories,id',
            ]);

            $subCategoryId = $this->doc_sub_category;
        }

        $filePath = $this->file->store('documents', 'public');
        $thumbnailPath = null;

        if ($this->thumbnail) {
            $thumbnailPath = $this->thumbnail->store('images/buletin', 'public');
        }

        Document::create([
            'name' => $this->doc_name,
            'originalName' => $this->file->getClientOriginalName(),
            'file' => $filePath,
            'thumbnail' => $thumbnailPath,
            'category_id' => $this->doc_category,
            'sub_category_id' => $subCategoryId,
        ]);

        $this->reset(['doc_name', 'file', 'thumbnail', 'doc_category', 'doc_sub_category', 'new_subcategory']);

        $this->dispatch('new-document-added');
    }
}; ?>

<section>
    <x-form-title>
        <x-slot:title>{{ __('Tambah Dokumen Baru') }}</x-slot:title>
        {{ __('Tambahkan dokumen (termasuk buletin) pada form berikut!') }}
    </x-form-title>

    <form wire:submit.prevent="addDocs" enctype="multipart/form-data" class="mt-6 space-y-6">
        <div>
            <x-input-label for="doc_name" :value="__('Nama Dokumen')" />
            <x-text-input wire:model="doc_name" id="doc_name" name="doc_name" required class="block w-full mt-1" />
            <x-input-error :messages="$errors->get('doc_name')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="file" :value="__('File Dokumen')" />
            <x-file-input wire:model="file" id="file" name="file" required class="block w-full mt-1" />
            <div wire:loading wire:target="file">Uploading...</div>
            <x-input-error :messages="$errors->get('file')" class="mt-2" />
        </div>

        <div>
            <x-input-label for="doc_category" :value="__('Kategori')" />
            <select wire:model.live='doc_category' name="doc_category" id="doc_category" required
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <x-input-error :messages="$errors->get('doc_category')" class="mt-2" />
        </div>

        @if ($doc_category === '6')
            {{-- Thumbnail Image File Input --}}
            <div>
                <x-input-label for="thumbnail" :value="__('Thumbnail Buletin')" />
                <x-file-input wire:model="thumbnail" id="thumbnail" name="thumbnail" required
                    class="block w-full mt-1" />
                <div wire:loading wire:target="thumbnail">Uploading...</div>
                <x-input-error :messages="$errors->get('thumbnail')" class="mt-2" />
            </div>
        @else
            {{-- Subcategory Input --}}
            <div>
                <x-input-label for="doc_sub_category" :value="__('Sub Kategori')" />
                <select wire:model.live='doc_sub_category' name="doc_sub_category" id="doc_sub_category"
                    class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                    <option value="" @readonly(true) class="text-gray-600 bg-gray-200">-- Pilih Sub Kategori
                        --</option>
                    <option value="999">++ Tambah Baru ++</option>
                    @foreach ($subcategories as $subcategory)
                        <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                </select>
                <x-input-error :messages="$errors->get('doc_sub_category')" class="mt-2" />
            </div>

            @if ($doc_sub_category === '999')
                {{-- Additional Input Field --}}
                <div>
                    <x-input-label for="new_subcategory" :value="__('Tambah Sub Kategori')" />
                    <x-text-input wire:model.live="new_subcategory" id="new_subcategory" name="new_subcategory"
                        class="block w-full mt-1" />
                    <x-input-error :messages="$errors->get('new_subcategory')" class="mt-2" />
                </div>
            @endif
        @endif

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            <x-action-message class="me-3" on="new-document-added">
                {{ __('Dokumen telah ditambahkan.') }}
            </x-action-message>
        </div>
    </form>
</section>
