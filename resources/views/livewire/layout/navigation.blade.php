<?php

// use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

?>

<nav x-data="{ open: false }" class="bg-white">
    <!-- Primary Navigation Menu -->
    <div class="container flex items-center justify-between max-w-full px-16">
        <div class="flex justify-between w-full">
            
            <!-- Logo -->
            <div class="flex items-center py-4 shrink-0">
                <a :href="{{ route('home') }}" wire:navigate>
                    <x-application-logo class="block fill-current h-11" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 lg:-my-px lg:ms-10 lg:flex text-body">
                <nav class="flex items-center space-x-4">

                    <div class="w-[65px] self-stretch border-b-2 border-primary-600 justify-center items-center flex">
                        <div
                            class="grow shrink basis-0 text-base font-normal font-['Plus Jakarta Sans'] leading-tight">
                            Beranda</div>
                    </div>

                    <div class="content-center h-full border-b-2 border-transparent">
                        <a class="hover:text-primary-600" href="{{ route('home') }}" wire:navigate>
                            Beranda
                        </a>
                    </div>
                    <div class="hidden lg:flex lg:items-center lg:ms-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <span class="hover:text-primary-500">
                                    Profil
                                    <i class="ri-arrow-down-s-line"></i>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profil_struktur')" wire:navigate>
                                    {{ __('Struktur Organisasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profil_pejabat')" wire:navigate>
                                    {{ __('Pejabat') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profil_agenda')" wire:navigate>
                                    {{ __('Agenda') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <div class="hidden lg:flex lg:items-center lg:ms-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <span class="hover:text-primary-500">
                                    Dokumen
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
                    <a class="hover:text-primary-500" href="{{ route('buletin') }}" wire:navigate>
                        Buletin
                    </a>
                    <a class="hover:text-primary-500" href="{{ route('galeri') }}" wire:navigate>
                        Galeri Kegiatan
                    </a>
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <span class="hover:text-primary-500">
                                    Video
                                    <i class="ri-arrow-down-s-line"></i>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('video_inovasi')" wire:navigate>
                                    {{ __('Inovasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('video_video2')" wire:navigate>
                                    {{ __('Video 2') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('video_video3')" wire:navigate>
                                    {{ __('Video 3') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <a class="hover:text-primary-500" href="{{ route('kontak') }}" wire:navigate>
                        Kontak
                    </a>
                    <x-primary-button :href="route('home')">{{ __('Form Kunjungan') }}</x-primary-button>
                </nav>
            </div>
        </div>



        <!-- Hamburger -->
        <div class="flex items-center -me-2 lg:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 transition duration-150 ease-in-out rounded-md text-neutral-600 hover:text-neutral-900 hover:bg-mist-100 focus:outline-none focus:bg-mist-100 focus:text-mist-500">
                <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                        stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Profil') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Dokumen') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Buletin') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Galeri') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('video_inovasi')" :active="request()->routeIs('video_inovasi')" wire:navigate>
                {{ __('Video') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')" wire:navigate>
                {{ __('Kontak') }}
            </x-responsive-nav-link>
            <x-primary-button :href="route('home')" class="mt-4 ms-4">{{ __('Form Kunjungan') }}</x-primary-button>
        </div>


    </div>
</nav>
