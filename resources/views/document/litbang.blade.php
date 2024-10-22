<x-app-layout>

    {{-- Hero Section --}}
    <x-hero>
        <span>Penelitian Pengembangan</span>
    </x-hero>

    {{-- Content --}}
    <main class="container mx-auto py-8 px-6">

        {{-- Search --}}
        <div class="grid grid-cols-4 gap-16">

            <div class="col-span-3 justify-end flex items-center">
            
                <div class="col-span-1 col-start-2 flex">
                    <div class="flex justify-end items-center mb-4 mr-4">
                        <div class="relative">
                            <x-dropdown-select></x-dropdown-select>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 col-start-3 flex">
                    <div class="flex justify-end items-center mb-4">
                        <div class="relative">
                            <x-search-input></x-search-input>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span 1">
                <div class="flex justify-start items-center mb-4">
                    <div class="relative">
                        <h2 class="text-headline font-semibold">Berita Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>


        {{-- Grids --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3">
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                <x-dokumen-card></x-dokumen-card>
                
            </div>

            {{-- Berita Section --}}
            <div class="col-span-1 grid grid-rows-3 gap-4">
                <x-berita-card></x-berita-card>
                <x-berita-card></x-berita-card>
                <x-berita-card></x-berita-card>
            </div>
        </div>
        </div>
        </div>

        {{-- Footer --}}
        <div></div>

    </main>


</x-app-layout>


    {{-- <div class="col-span-1 col-start-2 flex items-center bg-red-600">
            <div class="flex justify-end items-center mb-4">
                <div class="w-full text-center">
                    <x-dropdown>
                        <x-slot name="trigger">
                            <span class="hover:text-primary-500 ">
                                Pilih kategori
                                <i class="ri-arrow-down-s-line"></i>
                            </span>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('dokumen_perencanaan')" wire:navigate>
                                {{ __('Perencanaan Pembangunan') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('dokumen_litbang')" wire:navigate>
                                {{ __('Penelitian Pengembangan') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('dokumen_pelayanan')" wire:navigate>
                                {{ __('Standar Pelayanan') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('dokumen_peraturan')" wire:navigate>
                                {{ __('Peraturan') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('dokumen_rencana')" wire:navigate>
                                {{ __('Rencana Kerja') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
        </div> --}}
