<section>
    <header>
        <h2 class="text-Subtitle font-subtitleBold">
            {{ __('Upload Berita baru') }}
        </h2>

        <p class="mt-1">
            {{ __('Silakan upload berita baru dengan informasi berikut') }}
        </p>
    </header>

    <form wire:submit.prevent="uploadNews" class="mt-6 space-y-6">
        {{-- Judul Berita --}}
        <div>
            <x-input-label for="judul" :value="__('Judul Berita')" />
            <x-text-input wire:model="judul" id="judul" type="text" class="block w-full mt-1" required />
            <x-input-error class="mt-2" :messages="$errors->get('judul')" />
        </div>

        {{-- Tanggal Publikasi --}}
        <div>
            <x-input-label for="date_published" :value="__('Tanggal Publikasi')" />
            <x-text-input wire:model="date_published" id="date_published" type="date" class="block w-full mt-1"
                required />
            <x-input-error class="mt-2" :messages="$errors->get('date_published')" />
        </div>

        {{-- Konten Berita --}}
        <div>
            <x-input-label for="konten" :value="__('Konten Berita')" />
            <x-textarea-input wire:model="konten" id="konten" class="block w-full h-64 mt-1" />
            <x-input-error class="mt-2" :messages="$errors->get('konten')" />
        </div>

        {{-- Thumbnail --}}
        <div>
            <x-input-label for="thumbnail" :value="__('Thumbnail')" />
            <input type="file" wire:model="thumbnail" id="thumbnail" class="block w-full mt-1"
                style="display: none" />
            <x-secondary-button type="button" class="block mt-1 mb-6"
                onclick="document.getElementById('thumbnail').click();">
                Choose File
            </x-secondary-button>
            <span class="ml-2" id="thumbnail-name">No file chosen</span>
            <x-input-error class="mt-2" :messages="$errors->get('thumbnail')" />
        </div>

        <x-primary-button>
            {{ __('Upload Berita') }}
        </x-primary-button>

        @if (session()->has('message'))
            <div class="mt-4 text-green-500">
                {{ session('message') }}
            </div>
        @endif
    </form>

    <script>
        document.getElementById('thumbnail').addEventListener('change', function(event) {
            var fileName = event.target.files[0].name;
            document.getElementById('thumbnail-name').textContent = fileName;
        });
    </script>
</section>
