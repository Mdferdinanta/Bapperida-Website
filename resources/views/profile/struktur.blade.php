<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Struktur Organisasi</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col lg:flex-row mx-auto py-8 px-6">

        {{-- dokumen --}}
        <div class="lg:w-3/4 flex flex-col 0">

            {{-- Search Kategori --}}
            <div class="flex flex-col  md:flex-row gap-4 mx-8 ml-auto min-md:items-end">
                <x-search-input></x-search-input>
            </div>

            {{-- Content --}}
            <div class="m-8 ">
                <article>
                    <div class="flex flex-col mt-1 max-md:mt-10 max-md:max-w-full text-justify">
                        <h2 class="text-subtitle font-h3Bold  md:text-headline lg:text-headline xl:text-h3 ">
                          Selamat datang di situs resmi BAPPERIDA Kota Bogor
                        </h2>
                        <p class="text-tiny font-h3Light md:text-detail lg:text-detail xl:text-body mt-8">
                          Website Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah (BAPPERIDA) Kota Bogor ini memuat Profil dan informasi penting berbagai program dan kegiatan BAPPERIDA Kota Bogor, Kami harap website ini dapat bermanfaat dalam memberikan data dan informasi yang dapat dimanfaatkan oleh masyarakat luas.
                          <br /><br />
                          Pengguna website dapat mengakses dan mengunduh langsung publikasi data dan informasi, peraturan perundangan terkait perencanaan dan pembangunan daerah Kota Bogor sesuai dengan kebutuhan. Kami berusaha untuk menyajikan informasi yang terkini sehingga dapat memenuhi keinginan dan kebutuhan para stakeholder dan masyarakat Kota Bogor, pada khususnya serta masyarakat Indonesia pada umumnya.
                          <br /><br />
                          Berikut adalah bagan struktur organisasi Bapperida.
                        </p>
                        <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1a411d338892821fab349f751f53334720d95f63aa822fd7eb26bd63c379372f?placeholderIfAbsent=true&apiKey=2561d9ef1c114cdd865425c4e3e51264" alt="Bagan struktur organisasi Bapperida" class="object-contain mt-4 w-full aspect-[2.61] max-md:max-w-full" />
                      </div>
                </article>
            </div>


        </div>

        {{-- Berita --}}
        <div class="lg:w-1/4 h-full lg:pl-8 lg:border-l-2 border-misty-300">
            {{-- Judul --}}
            <div class="max-lg:my-8 ">
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


