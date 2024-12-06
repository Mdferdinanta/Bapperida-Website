<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="flex flex-col items-end justify-end gap-6 md:flex-row">
        {{-- Subcategory Selector --}}
        <div class="max-sm:w-full">
            <select wire:model.live='idx_filter' name="idx_filter" id="idx_filter"
                class="w-full shadow-sm rounded-xs focus:border-primary-600 focus:ring-1 focus:ring-primary-400 border-mist-300">
                <option value="" @readonly(true) class="text-gray-600 bg-gray-200">Pilih Kategori Indeks</option>
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
    <div class="space-y-8 divide-y divide-mist-300">
        {{-- Section 1 --}}
        @if ($selectedCategory && $indexes->count() >= 0)
            <section id="section-1" class="">
                <div class="space-y-2">
                    <h2 class="font-bold text-primary-700 text-subtitle xl:text-headline">{{ $selectedCategory->title }}
                    </h2>
                    <p class="tracking-wide text-justify indent-8 text-detail lg:text-detail xl:text-body">
                        {{ $selectedCategory->description }}</p>
                </div>
                <div class="py-4 mt-4 lg:px-4 border-y border-mist-300">
                    <div class="overflow-x-auto border rounded-xs border-mist-300">
                        <table class="w-full text-center table-auto text-tiny md:text-detail xl:text-body">
                            <thead class="uppercase bg-primary-50">
                                <tr>
                                    <th class="px-4 py-3 border-b">Inovasi</th>
                                    <th class="px-4 py-3 border-b">Tahun</th>
                                    <th class="px-4 py-3 border-b">Skor Indeks</th>
                                    <th class="px-4 py-3 border-b">Predikat</th>
                                    <th class="px-4 py-3 border-b">Peringkat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($indexes as $index)
                                    <tr>
                                        <td class="px-4 py-3 border-b">{{ $index->name }}</td>
                                        <td class="px-4 py-3 border-b">{{ $index->year->format('Y') }}</td>
                                        <td class="px-4 py-3 border-b">{{ $index->score }}</td>
                                        <td class="px-4 py-3 border-b">{{ $index->grade }}</td>
                                        <td class="px-4 py-3 border-b">{{ $index->rank }}</td>
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
                    <h2 class="font-bold text-primary-700 text-subtitle xl:text-headline">Indeks Daerah Kota Bogor</h2>
                    <p class="tracking-wide text-justify indent-8 text-detail lg:text-detail xl:text-body">Indeks adalah
                        alat ukur yang digunakan untuk memberikan gambaran atau penilaian secara kuantitatif terhadap
                        suatu kondisi atau aspek tertentu, yang dihitung berdasarkan berbagai indikator yang relevan.
                        Dalam konteks pemerintahan daerah, terdapat lima jenis indeks utama yang berfungsi untuk
                        mengevaluasi kinerja dan kualitas tata kelola: Indeks Pengelolaan Keuangan Daerah (IPKD),
                        Indeks Inovasi Daerah (IID), Indeks Kepemimpinan Kepala Daerah (IKKD), Indeks Daya Saing
                        Daerah (IDSD), dan Indeks Kualitas Kebijakan Daerah (IKK). Masing-masing indeks ini dirancang
                        untuk mengukur aspek spesifik, seperti pengelolaan keuangan, inovasi, kepemimpinan, daya saing,
                        dan kebijakan, guna memberikan panduan bagi pemerintah daerah dalam meningkatkan kinerja serta
                        pelayanan publik untuk mencapai pembangunan yang lebih baik.</p>
                </div>
                <div>
                    <table class="w-full text-center table-auto text-tiny md:text-detail xl:text-body">
                        <thead class="uppercase bg-primary-50">
                            <tr>
                                <th class="px-4 py-3 border-b">No</th>
                                <th class="px-4 py-3 border-b">Indeks</th>
                                <th class="px-4 py-3 border-b">Deskripsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $index => $item)
                                <tr>
                                    <td class="px-4 py-3 border-b">{{ $index + 1 }}</td>
                                    <td class="px-4 py-3 border-b">{{ $item->title }}</td>
                                    <td class="px-4 py-3 border-b">{{ $item->description }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @endif
    </div>
</div>
