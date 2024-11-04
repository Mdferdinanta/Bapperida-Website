<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Video Inovasi</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col lg:flex-row mx-auto py-8 px-6">

        {{-- dokumen --}}
        <div class="lg:w-3/4 flex flex-col ">

            {{-- Search Kategori --}}
            <div class="flex flex-col  md:flex-row gap-4 mx-8 ml-auto min-md:items-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="m-8 ">
                <div>                    
                    <div class="p-4 bg-white rounded-xs border border-mist-300">
                        <h1 class="text-body font-h1Bold md:text-subtitle lg:text-subtitle xl:text-headline text-center ">SmartWaste: Inovasi Pengelolaan Sampah Berbasis Teknologi AI</h1>

                        <div class=" text-white">
                            <div class="container mx-auto py-4">
                                <div class="relative">
                                    <div class="flex justify-between items-center">
            
                                        <div class="w-full flex justify-center aspect-video aspect-ratio:16/9">
                                            <iframe class="w-full"
                                                src="https://www.youtube.com/embed/SOg6HiumSyo?si=f7DQxPtfrBOTXLME" 
                                                title="YouTube video player" frameborder="0" 
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text-tiny leading-relaxed md:text-detail lg:text-detail xl:text-body mb-4 text-justify ">Dalam video ini, kami memperkenalkan SmartWaste, sebuah inovasi revolusioner yang memanfaatkan kecerdasan buatan (AI) untuk mengelola sampah secara cerdas dan efisien. SmartWaste adalah solusi teknologi terbaru yang dapat memisahkan jenis sampah secara otomatis, memantau volume sampah di tempat pembuangan, dan memberikan laporan prediktif mengenai kebutuhan pengolahan limbah. Melalui sistem sensor dan algoritma pembelajaran mesin, SmartWaste membantu masyarakat dan pemerintah dalam meningkatkan efektivitas daur ulang dan mengurangi limbah yang berakhir di TPA. Inovasi ini mendukung terciptanya lingkungan yang lebih bersih dan berkelanjutan, serta meningkatkan kesadaran akan pentingnya manajemen sampah di era digital. Mari saksikan bagaimana SmartWaste bekerja dan dampaknya terhadap masa depan pengelolaan sampah di kota-kota pintar.</p>
                    </div>
                </div>
            </div>


        </div>

        {{-- Berita --}}
        <div class="lg:w-1/4 h-full lg:pl-8 lg:border-l-2 border-misty-300">
            {{-- Judul --}}
            <div class="max-lg:my-8">
                <h3 class="text-subtitle lg:text-headline font-subtitleBold">
                    <i class="ri-arrow-right-s-line"></i>
                    Berita Terbaru
                </h3>
            </div>

            {{-- Konten --}}
            <div>
                <x-berita-card></x-berita-card>
            </div>
        </div>

    </main>


</x-app-layout>

