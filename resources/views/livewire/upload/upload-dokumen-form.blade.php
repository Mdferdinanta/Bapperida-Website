<section>
    <header>
        <h2 class="text-Subtitle font-subtitleBold">
            {{ __('Formulir Upload Dokumen') }}
        </h2>

        <p class="mt-1">
            {{ __('Upload dokumen PDF (Dokumen, Indeks, Buletin)') }}
        </p>
    </header>

    <form wire:submit.prevent="uploadDokumenPdf" class="mt-6 space-y-6">
        {{-- Judul Dokumen --}}
        <div>
            <x-input-label for="judul" :value="__('Judul Dokumen')" />
            <x-text-input wire:model="judul" id="judul" name="judul" type="text" class="block w-full mt-1" required
                autofocus autocomplete="Judul Dokumen" />
            <x-input-error class="mt-2" :messages="$errors->get('judul')" />
        </div>

        {{-- File Dokumen --}}
        <div>
            <x-input-label for="file" :value="__('Upload File')" />
            <x-text-input wire:model="pdfFile" id="pdfFile" name="pdfFile" type="file" class="block mt-1"
                accept=".pdf" style="display: none" />
            <x-secondary-button type="button" class="block mt-1 mb-6"
                onclick="document.getElementById('pdfFile').click();">
                Choose File
            </x-secondary-button>
            <span class="ml-2" id="pdf-name">No file chosen</span>
            <x-input-error class="mt-2" :messages="$errors->get('pdfFile')" />
        </div>

        {{-- Tanggal Publikasi --}}
        <div>
            <x-input-label for="publishDate" :value="__('Tanggal Publikasi')" />
            <x-text-input wire:model="publishDate" id="publishDate" name="publishDate" type="date"
                class="block mt-1" />
            <x-input-error class="mt-2" :messages="$errors->get('pdfFile')" />
        </div>

        {{-- Tipe Dokumen --}}
        <div class="mt-6" x-data="{ kategori: @entangle('kategori') }">
            <div>
                <x-input-label for="kategori" :value="__('Tipe Dokumen')" />
                <select wire:model.blur="kategori" x-model="kategori" name="kategori" id="kategori"
                    class="mt-1 bg-transparent border shadow-sm border-mist-300 rounded-xs focus:border-mist-300 focus:ring-primary-200 focus:bg-mist-50">
                    <option value="" disabled selected>Kategori</option>
                    <option value="perencanaan">Perencanaan Pembangunan</option>
                    <option value="penelitian">Penelitian Pengembangan</option>
                    <option value="pelayanan">Standar Pelayanan</option>
                    <option value="peraturan">Peraturan</option>
                    <option value="rencana">Rencana Kerja</option>
                    <option value="buletin">Buletin</option>
                    <option value="indeks">Indeks</option>
                </select>
                <x-input-error class="mt-2" :messages="$errors->get('kategori')" />
            </div>

            {{-- Additional Buletin Cover --}}
            <div x-show="kategori === 'buletin'" id="buletinCover">
                <x-input-label for="buletinCover" :value="__('Cover Buletin')" class="mt-6" />
                <x-text-input wire:model.blur="buletinCover" id="buletinCover" name="buletinCover" type="file"
                    class="block mt-1" accept=".jpg,.jpeg,.png" style="display: none" />
                <x-secondary-button type="button" class="block mt-1 mb-4"
                    onclick="document.getElementById('buletinCover').click();">
                    Choose File
                </x-secondary-button>
                <span class="ml-2" id="img-name">No file chosen</span>
                <x-input-error class="mt-2" :messages="$errors->get('buletinCover')" />
            </div>
        </div>
    </form>


    <script>
        // Display the selected file name
        document.getElementById('pdfFile').addEventListener('change', function(event) {
            var fileName = event.target.files[0].name;
            document.getElementById('pdf-name').textContent = fileName;
        });
        document.getElementById('buleitnCover').addEventListener('change', function(event) {
            var fileName = event.target.files[0].name;
            document.getElementById('img-name').textContent = fileName;
        });
    </script>
</section>
