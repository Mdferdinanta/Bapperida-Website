<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Berita</span>
    </x-hero>

    {{-- body --}}
    <main class="container mx-auto py-8 px-6">

        {{-- Search --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3">
                <div class="flex justify-end items-center mb-4">
                    <div class="relative">
                        <x-search-input></x-search-input>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="flex justify-start items-center mb-4">
                    <div class="relative">
                        <h2 class="text-headline font-semibold">Berita Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>


        {{-- Grids --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3 gap-4 h-svh">
                <div>                    
                    <div class="p-2 bg-white rounded-xs border border-mist-300">
                        <h1 class="text-headline font-h1Bold mb-2">Judul Berita pada hari sesuai tanggalnya</h1>
                        <p class="text-body mb-4 ">Tanggal Berita</p>
                        <div class=" text-white">
                            <div class="container mx-auto py-8">
                                <div class="relative">
                                    <div class="flex justify-between items-center">
                                        <!-- Main Image -->
                                        <div class="w-full flex justify-center">
                                            <img alt="A group of people in a meeting room with a presentation on the screen"
                                                 class="w-4/6 h-auto rounded" 
                                                 src="{{ asset('assets/img/gallery-5.jpg') }}" 
                                                 width="1200"/>
                                        </div>
                                    </div>
                                </div>
            
                             
                            </div>
                        </div>
                        <p class="text-body mb-4 text-justify ">Dalam video ini, kami memperkenalkan SmartWaste, sebuah inovasi revolusioner yang memanfaatkan kecerdasan buatan (AI) untuk mengelola sampah secara cerdas dan efisien. SmartWaste adalah solusi teknologi terbaru yang dapat memisahkan jenis sampah secara otomatis, memantau volume sampah di tempat pembuangan, dan memberikan laporan prediktif mengenai kebutuhan pengolahan limbah. Melalui sistem sensor dan algoritma pembelajaran mesin, SmartWaste membantu masyarakat dan pemerintah dalam meningkatkan efektivitas daur ulang dan mengurangi limbah yang berakhir di TPA. Inovasi ini mendukung terciptanya lingkungan yang lebih bersih dan berkelanjutan, serta meningkatkan kesadaran akan pentingnya manajemen sampah di era digital. Mari saksikan bagaimana SmartWaste bekerja dan dampaknya terhadap masa depan pengelolaan sampah di kota-kota pintar.</p>
                        <p class="text-body mb-4 text-justify ">Dalam video ini, kami memperkenalkan SmartWaste, sebuah inovasi revolusioner yang memanfaatkan kecerdasan buatan (AI) untuk mengelola sampah secara cerdas dan efisien. SmartWaste adalah solusi teknologi terbaru yang dapat memisahkan jenis sampah secara otomatis, memantau volume sampah di tempat pembuangan, dan memberikan laporan prediktif mengenai kebutuhan pengolahan limbah. Melalui sistem sensor dan algoritma pembelajaran mesin, SmartWaste membantu masyarakat dan pemerintah dalam meningkatkan efektivitas daur ulang dan mengurangi limbah yang berakhir di TPA. Inovasi ini mendukung terciptanya lingkungan yang lebih bersih dan berkelanjutan, serta meningkatkan kesadaran akan pentingnya manajemen sampah di era digital. Mari saksikan bagaimana SmartWaste bekerja dan dampaknya terhadap masa depan pengelolaan sampah di kota-kota pintar.</p>
                        <p class="text-body mb-4 text-justify ">Dalam video ini, kami memperkenalkan SmartWaste, sebuah inovasi revolusioner yang memanfaatkan kecerdasan buatan (AI) untuk mengelola sampah secara cerdas dan efisien. SmartWaste adalah solusi teknologi terbaru yang dapat memisahkan jenis sampah secara otomatis, memantau volume sampah di tempat pembuangan, dan memberikan laporan prediktif mengenai kebutuhan pengolahan limbah. Melalui sistem sensor dan algoritma pembelajaran mesin, SmartWaste membantu masyarakat dan pemerintah dalam meningkatkan efektivitas daur ulang dan mengurangi limbah yang berakhir di TPA. Inovasi ini mendukung terciptanya lingkungan yang lebih bersih dan berkelanjutan, serta meningkatkan kesadaran akan pentingnya manajemen sampah di era digital. Mari saksikan bagaimana SmartWaste bekerja dan dampaknya terhadap masa depan pengelolaan sampah di kota-kota pintar.</p>
                    
                    </div>
                </div>

                </div>

            {{-- Berita Section --}}
            <div class="col-auto grid grid-rows-3 gap-4">
                <x-berita-card></x-berita-card>
                <x-berita-card></x-berita-card>
                <x-berita-card></x-berita-card>
            </div>
            </div>
            </div>
        </div>

        {{-- Footer --}}
        <div></div>

    </main>

</x-app-layout>
