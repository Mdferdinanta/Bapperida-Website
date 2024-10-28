<?php

// use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

?>

<nav x-data="{ open: false }" class="fixed top-0 w-full bg-white shadow-xl">
    <!-- Primary Navigation Menu -->
    <div class="container flex items-center justify-between max-w-full px-16">
        <div class="flex justify-between w-full">

            <!-- Logo -->
            <div class="flex items-center py-4 shrink-0">
                <a :href="{{ route('dashboard') }}" wire:navigate>
                    <x-application-logo class="block fill-current h-11" />
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-8 lg:-my-px lg:ms-10 lg:flex text-body">
                <nav class="flex items-center space-x-4">

                    {{-- Beranda --}}
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Beranda') }}
                    </x-nav-link>

                    {{-- Profil --}}
                    <div class="hidden lg:flex lg:items-center lg:ms-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link>
                                    Profil
                                    <i class="ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profil_struktur')" :active="request()->routeIs('profil_struktur')" wire:navigate>
                                    {{ __('Struktur Organisasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profil_pejabat')" :active="request()->routeIs('profil_pejabat')" wire:navigate>
                                    {{ __('Pejabat') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('profil_agenda')" :active="request()->routeIs('profil_agenda')" wire:navigate>
                                    {{ __('Agenda') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Dokumen --}}
                    <div class="hidden lg:flex lg:items-center lg:ms-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link>
                                    Dokumen
                                    <i class="ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dokumen_perencanaan')" :active="request()->routeIs('dokumen_perencanaan')" wire:navigate>
                                    {{ __('Perencanaan Pembangunan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dokumen_litbang')" :active="request()->routeIs('dokumen_litbang')" wire:navigate>
                                    {{ __('Penelitian Pengembangan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dokumen_pelayanan')" :active="request()->routeIs('dokumen_pelayanan')" wire:navigate>
                                    {{ __('Standar Pelayanan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dokumen_peraturan')" :active="request()->routeIs('dokumen_peraturan')" wire:navigate>
                                    {{ __('Peraturan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dokumen_rencana')" :active="request()->routeIs('dokumen_rencana')" wire:navigate>
                                    {{ __('Rencana Kerja') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Buletin --}}
                    <x-nav-link :href="route('buletin')" :active="request()->routeIs('buletin')" wire:navigate>
                        {{ __('Buletin') }}
                    </x-nav-link>

                    {{-- Galeri --}}
                    <x-nav-link :href="route('galeri')" :active="request()->routeIs('galeri')" wire:navigate>
                        {{ __('Galeri Kegiatan') }}
                    </x-nav-link>

                    {{-- Profil --}}
                    <div class="hidden h-full lg:flex lg:items-center lg:ms-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('video_inovasi') || request()->routeIs('video_video2') || request()->routeIs('video_video3')">
                                    Video
                                    <i class="ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('video_inovasi')" :active="request()->routeIs('video_inovasi')" wire:navigate>
                                    {{ __('Inovasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('video_video2')" :active="request()->routeIs('video_video2')" wire:navigate>
                                    {{ __('Video 2') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('video_video3')" :active="request()->routeIs('video_video3')" wire:navigate>
                                    {{ __('Video 3') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Kontak --}}
                    <x-nav-link :href="route('kontak')" :active="request()->routeIs('kontak')" wire:navigate>
                        {{ __('Kontak') }}
                    </x-nav-link>
                    <x-primary-button :href="route('dashboard')">{{ __('Form Kunjungan') }}</x-primary-button>
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
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('dashboard') }}
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
            <x-primary-button :href="route('dashboard')" class="mt-4 ms-4">{{ __('Form Kunjungan') }}</x-primary-button>
        </div>


    </div>
</nav>
