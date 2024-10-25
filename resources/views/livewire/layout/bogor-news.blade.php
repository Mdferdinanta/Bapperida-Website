<div>
    <div class="container w-full grid grid-cols-2 gap-8 mx-auto justify-center items-center">

        {{-- Left Card --}}
        <div class="p-4 h-full">
            <div class="h-2/3 flex">
                <img src="{{ asset('assets/img/gallery-2.jpg') }}" alt="" class="rounded-xs object-cover w-full">
            </div>
            <div class="mt-4 h-auto">
                <h3 class="text-h3 font-h3Bold">Judul Berita Kota Bogor</h3>
                <p>Tanggal</p>
                <h5 class="text-subtitle mt-4">Deskripsi Berita</h5>
            </div>
        </div>

        {{-- Right Card --}}
        <div class="h-full p-4 grid grid-cols-2 gap-4">
            <div class="col-span-1">
                <div class="h-2/3 flex">
                    <img src="{{ asset('assets/img/gallery-2.jpg') }}" alt=""
                        class="rounded-xs object-cover w-full">
                </div>
                <div class="mt-4 h-auto">
                    <h3 class="text-h3 font-h3Bold">Judul Berita Kota Bogor</h3>
                    <p>Tanggal</p>
                </div>
            </div>
            <div class="col-span-1">
                <div class="h-2/3 flex">
                    <img src="{{ asset('assets/img/gallery-2.jpg') }}" alt=""
                        class="rounded-xs object-cover w-full">
                </div>
                <div class="mt-4 h-auto">
                    <h3 class="text-h3 font-h3Bold">Judul Berita Kota Bogor</h3>
                    <p>Tanggal</p>
                </div>
            </div>
            <div class="col-span-1">
                <div class="h-2/3 flex">
                    <img src="{{ asset('assets/img/gallery-2.jpg') }}" alt=""
                        class="rounded-xs object-cover w-full">
                </div>
                <div class="mt-4 h-auto">
                    <h3 class="text-h3 font-h3Bold">Judul Berita Kota Bogor</h3>
                    <p>Tanggal</p>
                </div>
            </div>
            <div class="col-span-1">
                <div class="h-2/3 flex">
                    <img src="{{ asset('assets/img/gallery-2.jpg') }}" alt=""
                        class="rounded-xs object-cover w-full">
                </div>
                <div class="mt-4 h-auto">
                    <h3 class="text-h3 font-h3Bold">Judul Berita Kota Bogor</h3>
                    <p>Tanggal</p>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center my-4">
        <x-link-button>
            Lihat semua
            <i class="ml-2 ri-arrow-right-double-line"></i>
            </x-secondary-button>
    </div>
</div>
