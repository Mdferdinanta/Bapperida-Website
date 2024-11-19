<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        Indeks
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4 lg:pr-8">

            {{-- Search Kategori --}}
            <div class="flex flex-col w-full gap-4 sm:flex-row sm:justify-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="my-8">
                <div class="p-4 bg-white border-y md:border md:rounded-xs border-mist-300">

                    {{-- Daftar Isi --}}
                    <div class="bg-white rounded-md border border-gray-300 p-4">
                        <h2 class="font-bold mb-4  text-body xl:text-subtitle">Daftar Isi</h2>
                        <ul class="list-disc pl-6 space-y-2 text-detail xl:text-body">
                            <li><a href="#section-1" class="text-blue-600 hover:underline">Section 1</a></li>
                            <li><a href="#section-2" class="text-blue-600 hover:underline">Section 2</a></li>
                            <li><a href="#section-3" class="text-blue-600 hover:underline">Section 3</a></li>
                            <li><a href="#section-4" class="text-blue-600 hover:underline">Section 4</a></li>
                            <li><a href="#section-5" class="text-blue-600 hover:underline">Section 5</a></li>
                        </ul>
                    </div>
                    

                    {{-- Sections --}}
                    <div class="mt-8 space-y-16">

                        {{-- Section 1 --}}
                        <section id="section-1" class="scroll-mt-20">
                            <h2 class="text-subtitle xl:text-headline font-bold mb-4">Section 1: Judul</h2>
                            <p class="text-gray-700 mb-6 leading-relaxed tracking-wide text-justify text-detail lg:text-detail xl:text-body">Penjelasan singkat mengenai Section 1.</p>
                            <x-table-card 
                                title="Tabel Section 1" 
                                :data="[
                                    ['tahun' => '2024', 'skor' => 90.5, 'predikat' => 'Sangat Baik', 'peringkat' => 1],
                                    ['tahun' => '2023', 'skor' => 88.0, 'predikat' => 'Baik', 'peringkat' => 2],
                                ]" 
                            />
                        </section>

                        {{-- Section 2 --}}
                        <section id="section-2" class="scroll-mt-20">
                            <h2 class="text-subtitle xl:text-headline font-bold mb-4">Section 2: Judul</h2>
                            <p class="text-gray-700 mb-6 leading-relaxed tracking-wide text-justify text-detail lg:text-detail xl:text-body">Penjelasan singkat mengenai Section 2.</p>
                            <x-table-card 
                                title="Tabel Section 2" 
                                :data="[
                                    ['tahun' => '2024', 'skor' => 90.0, 'predikat' => 'Sangat Baik', 'peringkat' => 1],
                                    ['tahun' => '2023', 'skor' => 89.0, 'predikat' => 'Baik', 'peringkat' => 2]
                                ]" 
                            />
                        </section>

                        {{-- Tambahkan Section 3-5 serupa --}}
                    </div>

                </div>
            </div>

        </div>

        {{-- Berita --}}
        <x-news-side-layout></x-news-side-layout>

    </main>

</x-app-layout>
