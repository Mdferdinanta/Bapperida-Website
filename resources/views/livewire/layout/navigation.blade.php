<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
    public function logout(Logout $logout): void
    {
        $logout();

        $this->redirect('/', navigate: true);
    }
}; ?>

<nav x-data="{ open: false }" class="fixed w-full bg-white shadow-lg lg:top-0 lg:z-10">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto w-s sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-9" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-4 text-detail xl:text-body lg:-my-px lg:ms-auto lg:flex">
                    {{-- Dashboard --}}
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Dashboard') }}
                    </x-nav-link>

                    {{-- Profiles --}}
                    <div class="hidden lg:flex lg:items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('dashboard')">
                                    {{ __('Profil') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-2 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Struktur Organisasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Pejabat') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Agenda') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Documents --}}
                    <div class="hidden lg:flex lg:items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('dashboard')">
                                    {{ __('Dokumen') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-2 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Perencanaan Pembangunan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Penelitian Pengembangan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Indeks') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Standar Pelayanan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Peraturan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Rencana Kerja') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Buletin --}}
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Buletin') }}
                    </x-nav-link>

                    {{-- Gallery --}}
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Galeri Kegiatan') }}
                    </x-nav-link>

                    {{-- Videos --}}
                    <div class="hidden lg:flex lg:items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('dashboard')">
                                    {{ __('Video') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-2 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Inovasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Video 2') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                                    {{ __('Video 3') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Contact --}}
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Kontak') }}
                    </x-nav-link>
                </div>

                {{-- Form Button --}}
                <x-primary-button href="route('dashboard')"
                    class="my-3 font-semibold me-2 lg:me-0 ms-auto xl:ms-20 text-detail lg:text-body">
                    {{ __('Form Kunjungan') }}
                </x-primary-button>
            </div>

            {{-- Hamburger --}}
            <x-hamburger />
        </div>
    </div>

    {{-- Responsive Navigation Menu --}}
    <x-nav-responsive />

</nav>
