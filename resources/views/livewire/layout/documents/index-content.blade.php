<div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
    <div class="">

        {{-- Daftar Isi --}}
        <div class="p-4 border-y border-mist-300">
            <h2 class="mb-4 font-bold text-body xl:text-subtitle">Daftar Isi</h2>
            <ul class="pl-6 space-y-2 list-disc text-detail xl:text-body">
                <li><a href="#section-1" class="text-primary-500 hover:text-primary-600 hover:underline">Indeks Inovasi
                        1</a></li>
                <li><a href="#section-2" class="text-primary-500 hover:text-primary-600 hover:underline">Indeks Inovasi
                        2</a></li>
                <li><a href="#section-3" class="text-primary-500 hover:text-primary-600 hover:underline">Indeks Inovasi
                        3</a></li>
                <li><a href="#section-4" class="text-primary-500 hover:text-primary-600 hover:underline">Indeks Inovasi
                        4</a></li>
                <li><a href="#section-5" class="text-primary-500 hover:text-primary-600 hover:underline">Indeks Inovasi
                        5</a></li>
            </ul>
        </div>

        {{-- Sections --}}
        <div class="my-4 space-y-8">

            {{-- Section 1 --}}
            <section id="section-1" class="scroll-mt-20">
                <div class="space-y-2">
                    <h2 class="font-bold text-subtitle xl:text-headline">Section 1: Judul</h2>
                    <p class="tracking-wide text-justify text-gray-700 text-detail lg:text-detail xl:text-body">
                        Penjelasan singkat mengenai Section 1.</p>
                </div>
                <div class="p-4 mt-4 border-y border-mist-300">
                    <h4 class="mb-4 font-semibold text-detail xl:text-body">Title</h4>
                    <div class="overflow-x-auto">
                        <table
                            class="w-full text-center border border-gray-200 table-auto text-detail xl:text-body">
                            <thead class="bg-gray-100">
                                <tr>
                                    <th class="px-4 py-2 border-b">No.</th>
                                    <th class="px-4 py-2 border-b">Tahun</th>
                                    <th class="px-4 py-2 border-b">Skor Indeks</th>
                                    <th class="px-4 py-2 border-b">Predikat</th>
                                    <th class="px-4 py-2 border-b">Peringkat</th>
                                </tr>
                            </thead>
                            <tbody>
                                {{-- @foreach ($data as $index => $row) --}}
                                <tr>
                                    <td class="px-4 py-2 border-b">index + 1</td>
                                    <td class="px-4 py-2 border-b">Tahun</td>
                                    <td class="px-4 py-2 border-b">Skor</td>
                                    <td class="px-4 py-2 border-b">Predikat</td>
                                    <td class="px-4 py-2 border-b">Peringkat</td>
                                </tr>
                                {{-- @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            {{-- Tambahkan Section 3-5 serupa --}}
        </div>
    </div>
</div>
