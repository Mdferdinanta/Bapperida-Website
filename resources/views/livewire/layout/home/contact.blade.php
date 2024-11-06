<div id="contact">
    <div class="max-w-full">
        <div class="flex flex-col items-center justify-center px-8 py-4 mx-auto overflow-hidden bg-white shadow-sm">

            {{-- Section Title --}}
            <x-section-title>{{ __('Kontak') }}</x-section-title>

            <div class="inline-flex flex-col items-center gap-16 p-8 lg:flex-row">

                {{-- Information --}}
                <div class="inline-flex flex-col items-start justify-start gap-4">
                    <div class="inline-flex items-center justify-start gap-4">
                        <div class="items-center justify-center p-4 rounded-full bg-primary-100">
                            <i class="ri-map-pin-line ri-xl text-primary-800"></i>
                        </div>
                        <div class="w-80">
                            <h4 class="font-bold text-body">Lokasi</h4>
                            <span class="font-medium text-tiny md:text-detail">Jl. Kapten Muslihat No. 21 RT/RW 01/01,
                                Kelurahan
                                Pabaton,
                                Kecamatan Bogor Tengah, Kota Bogor 16121</span>
                        </div>
                    </div>
                    <div class="inline-flex items-center justify-start gap-4">
                        <div class="items-center justify-center p-4 rounded-full bg-primary-100">
                            <i class="ri-mail-line ri-xl text-primary-800"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Email</h4>
                            <span class="font-medium text-tiny md:text-detail">bapperida@kotabogor.go.id</span>
                        </div>
                    </div>
                    <div class="inline-flex items-center justify-start gap-4">
                        <div class="items-center justify-center p-4 rounded-full bg-primary-100">
                            <i class="ri-phone-line ri-xl text-primary-800"></i>
                        </div>
                        <div>
                            <h4 class="font-bold">Telepon</h4>
                            <span class="font-medium text-tiny md:text-detail">0251-8338052</span>
                        </div>
                    </div>
                </div>

                {{-- Forms --}}
                <form action="" method="post"
                    class="inline-flex flex-col items-center justify-center w-full gap-4">
                    <h3 class="block mb-4 font-bold text-center lg:hidden text-subtitle text-primary-800">
                        Form Pengaduan
                    </h3>
                    <div
                        class="inline-flex flex-col items-center self-stretch gap-4 lg:flex-row">
                        <x-text-input placeholder="Nama" class="lg:w-1/2 max-lg:self-stretch"></x-text-input>
                        <x-text-input placeholder="Email" class="lg:w-1/2 max-lg:self-stretch"></x-text-input>
                    </div>
                    <div class="flex flex-col items-start self-stretch justify-start">
                        <x-text-input placeholder="Judul" class="self-stretch"></x-text-input>
                    </div>
                    <div class="flex flex-col items-start self-stretch justify-start">
                        <x-textarea-input rows="4" placeholder="Isi Pesan"
                            class="self-stretch"></x-textarea-input>
                    </div>
                    <x-primary-button>Kirim Pesan</x-primary-button>
                </form>

            </div>
        </div>
    </div>
</div>
