<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

?>

<nav x-data="{ open: false }" class="bg-white shadow-sm">
    <!-- Primary Navigation Menu -->
    <div class="container max-w-full px-16 py-2 flex items-center justify-between">
        <div class="flex justify-between w-full">
            <!-- Logo -->
            <div class="flex items-center shrink-0">
                <a :href="{{ route('dashboard') }}" wire:navigate>
                    <x-application-logo class="block w-auto fill-current h-9" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 lg:-my-px lg:ms-10 lg:flex text-body">
                <nav class="flex items-center space-x-4">
                    <a class="hover:text-primary-600" href="{{ route('dashboard') }}" wire:navigate>
                        Beranda
                    </a>
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
                    <x-primary-button :href="route('dashboard')">{{ __('Form Kunjungan') }}</x-primary-button>
                </nav>
            </div>
        </div>



        <!-- Hamburger -->
        <div class="flex items-center -me-2 lg:hidden">
            <button @click="open = ! open"
                class="inline-flex items-center justify-center p-2 text-neutral-600 transition duration-150 ease-in-out rounded-md hover:text-neutral-900 hover:bg-mist-100 focus:outline-none focus:bg-mist-100 focus:text-mist-500">
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
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Profil') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dokumen') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Buletin') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Galeri') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('video_inovasi')" :active="request()->routeIs('video_inovasi')" wire:navigate>
                {{ __('Video') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Kontak') }}
            </x-responsive-nav-link>
            <x-primary-button :href="route('dashboard')" class="ms-4 mt-4">{{ __('Form Kunjungan') }}</x-primary-button>
        </div>


    </div>
</nav>
