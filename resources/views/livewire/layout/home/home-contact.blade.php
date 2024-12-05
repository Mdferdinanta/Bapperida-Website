<div class="py-12 bg-white xl:shadow-md shadow-slate-300">
    {{-- Title --}}
    <x-home-section-title>
        {{ __('Kontak') }}
    </x-home-section-title>

    {{-- Content --}}
    <div class="mx-auto overflow-hidden max-w-7xl flex flex-col items-center gap-8 lg:gap-24 p-8 lg:flex-row">
        {{-- Information --}}
        <div class="inline-flex flex-col items-start justify-start gap-4">
            <div class="inline-flex items-center justify-start gap-4">
                <div class="items-center justify-center p-4 rounded-full bg-primary-100">
                    <i class="ri-map-pin-line ri-xl text-primary-800"></i>
                </div>

                <div class="w-80">
                    <h4 class="font-bold text-body">Lokasi</h4>
                    <span class="font-medium text-tiny md:text-detail">Jl. Kapten Muslihat No. 21 RT/RW 01/01,
                        Kelurahan Pabaton, Kecamatan Bogor Tengah, Kota Bogor 16121</span>
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
        <livewire:layout.home.contact />
    </div>
</div>
