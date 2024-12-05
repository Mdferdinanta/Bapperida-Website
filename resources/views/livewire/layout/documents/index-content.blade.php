<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-6 md:flex-row">
        {{-- Subcategory Selector --}}
        <div class="max-sm:w-full">
            <select wire:model.live='idx_filter' name="idx_filter" id="idx_filter"
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) disabled class="text-gray-600 bg-gray-200">Pilih Kategori Indeks</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        {{-- Search bar --}}
        {{-- <div class="relative w-full md:w-1/2">
            <div class="w-full overflow-hidden rounded-xs">
                <input wire:model.live.debounce.300ms="search" type="search" placeholder="Cari..."
                    aria-label="Cari nama atau jabatan"
                    class="w-full shadow-sm border-mist-300 rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400">
            </div>
        </div> --}}
    </div>

    {{-- Content --}}
    <div class="divide-y divide-mist-300 space-y-8">
        {{-- Section 1 --}}
        @if ($selectedCategory && $indexes->count() >= 0)
            <section id="section-1" class="">
                <div class="space-y-2">
                    <h2 class="font-bold text-primary-700 text-subtitle xl:text-headline">{{ $selectedCategory->title }}</h2>
                    <p
                        class="tracking-wide text-justify indent-8 text-detail lg:text-detail xl:text-body">
                        {{ $selectedCategory->description }}</p>
                </div>
                <div class="lg:px-4 py-4 mt-4 border-y border-mist-300">
                    <div class="overflow-x-auto rounded-xs border border-mist-300">
                        <table class="w-full text-center table-auto text-tiny md:text-detail xl:text-body">
                            <thead class="bg-primary-50 uppercase">
                                <tr>
                                    <th class="px-4 py-2 border-b">Inovasi</th>
                                    <th class="px-4 py-2 border-b">Tahun</th>
                                    <th class="px-4 py-2 border-b">Skor Indeks</th>
                                    <th class="px-4 py-2 border-b">Predikat</th>
                                    <th class="px-4 py-2 border-b">Peringkat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($indexes as $index)
                                    <tr>
                                        <td class="px-4 py-2 border-b">{{ $index->name }}</td>
                                        <td class="px-4 py-2 border-b">{{ $index->year->format('Y') }}</td>
                                        <td class="px-4 py-2 border-b">{{ $index->score }}</td>
                                        <td class="px-4 py-2 border-b">{{ $index->grade }}</td>
                                        <td class="px-4 py-2 border-b">{{ $index->rank }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{-- Pagination --}}
                        <div>
                            {{ $indexes->links('vendor.livewire.tailwind', ['scrollTo' => false]) }}
                        </div>
                    </div>
                </div>
            </section>
        @else
            <section id="default-section" class="space-y-4">
                <div class="space-y-2">
                    <h2 class="font-bold text-primary-700 text-subtitle xl:text-headline">Indeks Inovasi Daerah Kota
                        Bogor</h2>
                    <p
                        class="tracking-wide text-justify indent-8 text-detail lg:text-detail xl:text-body">
                        Indeks Inovasi Daerah (IID) adalah alat ukur yang dikembangkan oleh Kementerian Dalam Negeri
                        (Kemendagri) untuk menilai dan mengevaluasi tingkat inovasi yang telah dilakukan oleh pemerintah
                        daerah di Indonesia. Tujuan utamanya adalah menciptakan budaya inovasi dalam pelayanan publik
                        dan pembangunan daerah, sehingga mampu menjawab tantangan lokal maupun global secara lebih
                        efektif.
                        IID menjadi bagian penting dalam upaya transformasi birokrasi di Indonesia, mendorong pemerintah
                        daerah untuk terus meningkatkan kreativitas, efisiensi, dan daya saing melalui penerapan
                        inovasi.</p>
                </div>
                <div class="items-center flex justify-center">
                    <h2 class="font-medium text-detail lg:text-body text-center text-gray-500">Pilih kategori Indeks di atas untuk menampilkan data.</h2>
                </div>
            </section>
        @endif
    </div>
</div>
