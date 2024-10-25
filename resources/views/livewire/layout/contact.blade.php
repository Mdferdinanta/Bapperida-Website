<div class="container max-w-full py-8 justify-center items-center inline-flex">
    <div class="justify-between gap-20 items-start flex">

        {{-- Info --}}
        <div class="flex-col justify-start items-start gap-6 inline-flex">
            <div class="justify-start items-center gap-4 inline-flex">
                <div class="p-4 bg-primary-100 rounded-full justify-center items-center">
                    <i class="ri-map-pin-line ri-xl text-primary-800"></i>
                </div>
                <div>
                    <h4 class="text-headline">Lokasi:</h4>
                    <p class="w-[400px] text-justify">Jl. Kapten Muslihat No. 21 RT/RW 01/01, Kelurahan Pabaton,
                        Kecamatan Bogor Tengah, Kota Bogor 16121</p>
                </div>
            </div>
            <div class="justify-start items-center gap-4 inline-flex">
                <div class="p-4 bg-primary-100 rounded-full justify-center items-center">
                    <i class="ri-mail-line ri-xl text-primary-800"></i>
                </div>
                <div>
                    <h4 class="text-headline">Email:</h4>
                    <p class="w-[400px] text-justify">bapperida@kotabogor.go.id</p>
                </div>
            </div>
            <div class="justify-start items-center gap-4 inline-flex">
                <div class="p-4 bg-primary-100 rounded-full justify-center items-center">
                    <i class="ri-phone-line ri-xl text-primary-800"></i>
                </div>
                <div>
                    <h4 class="text-headline">Telepon:</h4>
                    <p class="w-[400px] text-justify">0251-8338052</p>
                </div>
            </div>
        </div>

        {{-- Form --}}
        <form action="" method="post" role="">
            <div class="w-[664px] flex-col justify-center items-center gap-6 inline-flex">
                <div class="w-[664px] items-center justify-between gap-6 inline-flex">
                    <x-text-input placeholder="Nama" class="w-80"></x-text-input>
                    <x-text-input placeholder="Email" class="w-80"></x-text-input>
                </div>
                <div class="self-stretch flex-col justify-start items-start flex">
                    <x-text-input placeholder="Judul" class="self-stretch"></x-text-input>
                </div>
                <div class="self-stretch flex-col justify-start items-start flex">
                    <x-textarea-input rows="4" placeholder="Isi Pesan" class="self-stretch"></x-textarea-input>
                </div>
                <x-primary-button>Kirim Pesan</x-primary-button>
            </div>
        </form>
    </div>
</div>
