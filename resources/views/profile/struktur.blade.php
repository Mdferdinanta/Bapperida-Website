<x-app-layout>
    
    {{-- Hero Section --}}
    <x-hero>
        <span>Struktur Organisasi</span>
    </x-hero>
        {{-- Content --}}
        
        <main class="container mx-auto py-8 px-6">

            {{-- Search --}}
            <div class="grid grid-cols-4 gap-16">
                <div class="col-span-3">
                
                    <div class="flex justify-end items-center mb-4">
                        <div class="relative">
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
    
    
            <div class=" grid grid-cols-4 gap-16">
                <article class="col-span-3">
                  <div class="flex flex-col mt-1 max-md:mt-10 max-md:max-w-full text-justify">
                    <h2 class="text-h3 font-bold tracking-tighter leading-tight text-stone-900 max-md:max-w-full max-md:text-4xl">
                      Selamat datang di situs resmi website BAPPERIDA Kota Bogor.
                    </h2>
                    <p class="mt-11 text-xl leading-6 text-neutral-500 max-md:mt-10 max-md:max-w-full">
                      Website Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah (BAPPERIDA) Kota Bogor ini memuat Profil dan informasi penting berbagai program dan kegiatan BAPPERIDA Kota Bogor, Kami harap website ini dapat bermanfaat dalam memberikan data dan informasi yang dapat dimanfaatkan oleh masyarakat luas.
                      <br /><br />
                      Pengguna website dapat mengakses dan mengunduh langsung publikasi data dan informasi, peraturan perundangan terkait perencanaan dan pembangunan daerah Kota Bogor sesuai dengan kebutuhan. Kami berusaha untuk menyajikan informasi yang terkini sehingga dapat memenuhi keinginan dan kebutuhan para stakeholder dan masyarakat Kota Bogor, pada khususnya serta masyarakat Indonesia pada umumnya.
                      <br /><br />
                      Berikut adalah bagan struktur organisasi Bapperida.
                    </p>
                    <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/1a411d338892821fab349f751f53334720d95f63aa822fd7eb26bd63c379372f?placeholderIfAbsent=true&apiKey=2561d9ef1c114cdd865425c4e3e51264" alt="Bagan struktur organisasi Bapperida" class="object-contain mt-10 w-full aspect-[2.61] max-md:max-w-full" />
                  </div>
                </article>
              
                {{-- Berita Section --}}
                
                <div class="col-auto grid grid-rows-3 gap-4">
                    <x-berita-card></x-berita-card>
                    <x-berita-card></x-berita-card>
                    <x-berita-card></x-berita-card>
                </div>
            </div>
</x-app-layout>