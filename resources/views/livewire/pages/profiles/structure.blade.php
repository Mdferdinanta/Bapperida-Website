<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            {{ __('Struktur Organisasi') }}
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        <div class="p-6 space-y-4 bg-white xl:w-3/4 lg:space-y-6 max-xl:shadow-md shadow-slate-300">
            <h3 class="font-black tracking-wider text-center text-headline xl:text-h3">
                Selamat datang di situs resmi
                <span class="text-primary-500">
                    BAPPERIDA
                </span>
                Kota Bogor
            </h3>
            <div class="space-y-4 tracking-wide text-justify indent-8">
                <p>
                    Website Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah (BAPPERIDA) Kota Bogor ini
                    memuat Profil dan informasi penting berbagai program dan kegiatan BAPPERIDA Kota Bogor, Kami
                    harap website ini dapat bermanfaat dalam memberikan data dan informasi yang dapat
                    dimanfaatkan
                    oleh masyarakat luas.
                </p>
                <p>
                    Pengguna website dapat mengakses dan mengunduh langsung publikasi data dan informasi,
                    peraturan
                    perundangan terkait perencanaan dan pembangunan daerah Kota Bogor sesuai dengan kebutuhan.
                    Kami
                    berusaha untuk menyajikan informasi yang terkini sehingga dapat memenuhi keinginan dan
                    kebutuhan
                    para stakeholder dan masyarakat Kota Bogor, pada khususnya serta masyarakat Indonesia pada
                    umumnya.
                </p>
                <p class="indent-0">
                    Berikut adalah bagan struktur organisasi Bapperida.
                </p>
                <img loading="lazy" src="{{ asset('assets/images/placeholder/bapperida/struktur.png') }}"
                    alt="Bagan struktur organisasi Bapperida" class="object-contain w-full mt-4 max-md:max-w-full" />
            </div>
        </div>

    </x-container>

</x-app-layout>
