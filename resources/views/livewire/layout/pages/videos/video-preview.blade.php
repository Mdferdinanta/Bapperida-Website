<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        Video
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4 ">

            {{-- Search Kategori --}}
            <div class="flex flex-col gap-4 mx-8 ml-auto md:flex-row min-md:items-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="my-8 max-md:mx-auto">
                <div>
                    <div class="p-4 bg-white border rounded-xs border-mist-300">
                        <h1 class="text-center text-body font-h1Bold md:text-subtitle lg:text-subtitle xl:text-headline ">SmartWaste: Inovasi Pengelolaan Sampah Berbasis Teknologi AI</h1>

                        <div class="text-white ">
                            <div class="container py-4 mx-auto">
                                <div class="relative">
                                    <div class="flex items-center justify-between">

                                        <div class="flex justify-center w-full aspect-video aspect-ratio:16/9">
                                            <iframe class="w-full"
                                                src="https://www.youtube.com/embed/K-lEx6gD7Qc"
                                                title="YouTube video player" frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="mb-4 leading-relaxed text-justify text-tiny md:text-detail lg:text-detail xl:text-body ">Dalam video ini, kami memperkenalkan SmartWaste, sebuah inovasi revolusioner yang memanfaatkan kecerdasan buatan (AI) untuk mengelola sampah secara cerdas dan efisien. SmartWaste adalah solusi teknologi terbaru yang dapat memisahkan jenis sampah secara otomatis, memantau volume sampah di tempat pembuangan, dan memberikan laporan prediktif mengenai kebutuhan pengolahan limbah. Melalui sistem sensor dan algoritma pembelajaran mesin, SmartWaste membantu masyarakat dan pemerintah dalam meningkatkan efektivitas daur ulang dan mengurangi limbah yang berakhir di TPA. Inovasi ini mendukung terciptanya lingkungan yang lebih bersih dan berkelanjutan, serta meningkatkan kesadaran akan pentingnya manajemen sampah di era digital. Mari saksikan bagaimana SmartWaste bekerja dan dampaknya terhadap masa depan pengelolaan sampah di kota-kota pintar.</p>
                    </div>
                </div>
            </div>


        </div>

        {{-- Berita --}}
        <div class="h-full lg:w-1/4 lg:pl-8 lg:border-l-2 border-misty-300">
            {{-- Judul --}}
            <div class="max-lg:my-8">
                <h3 class="text-subtitle lg:text-headline font-subtitleBold">
                    <i class="ri-arrow-right-s-line"></i>
                    Berita Terbaru
                </h3>
            </div>

            {{-- Konten --}}
            <div>
                {{-- <x-berita-card></x-berita-card> --}}
            </div>
        </div>

    </main>


</x-app-layout>
