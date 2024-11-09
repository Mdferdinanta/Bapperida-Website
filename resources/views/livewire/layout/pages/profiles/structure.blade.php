<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span class="text-h3 md:text-h2 lg:text-h1 xl:text-display">Struktur Organisasi</span>
    </x-hero>

    {{-- Content --}}
    <main class="container flex flex-col px-6 py-8 mx-auto lg:flex-row">

        {{-- dokumen --}}
        <div class="flex flex-col lg:w-3/4">

            {{-- Content --}}
            <div class="m-8">
                <article>
                    <div class="flex flex-col mt-1 text-justify max-md:mt-10 max-md:max-w-full">
                        <h2 class="text-subtitle font-h3Bold md:text-headline lg:text-headline xl:text-h3 ">
                          Selamat datang di situs resmi BAPPERIDA Kota Bogor
                        </h2>
                        <p class="mt-8 text-tiny font-h3Light md:text-detail lg:text-detail xl:text-body">
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
        <x-news-side-layout></x-news-side-layout>

    </main>


</x-app-layout>
