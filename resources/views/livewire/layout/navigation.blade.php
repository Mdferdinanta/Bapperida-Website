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

<nav x-data="{ open: false }" class="fixed top-0 z-10 w-full bg-white shadow-lg">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto w-s sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex w-full">
                <!-- Logo -->
                <div class="flex items-center shrink-0">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <x-application-logo class="block h-7 sm:h-9" />
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
                                <x-nav-link class="h-full" :active="request()->routeIs('page-structure', 'page-profile', 'page-schedules')">
                                    {{ __('Profil') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-2 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('page-structure')" :active="request()->routeIs('page-structure')" wire:navigate>
                                    {{ __('Struktur Organisasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('page-profile')" :active="request()->routeIs('page-profile')" wire:navigate>
                                    {{ __('Pejabat') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('page-schedules')" :active="request()->routeIs('page-schedules')" wire:navigate>
                                    {{ __('Agenda') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Documents --}}
                    <div class="hidden lg:flex lg:items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('doc-category')">
                                    {{ __('Dokumen') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-2 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('doc-category', ['category' => 'Perencanaan Pembangunan'])" :active="request()->is('dokumen/Perencanaan Pembangunan*')" wire:navigate>
                                    {{ __('Perencanaan Pembangunan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('doc-category', ['category' => 'Penelitian Pengembangan'])" :active="request()->is('dokumen/Penelitian Pengembangan*')" wire:navigate>
                                    {{ __('Penelitian Pengembangan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('doc-category', ['category' => 'Indeks'])" :active="request()->is('dokumen/Indeks*')" wire:navigate>
                                    {{ __('Indeks') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('doc-category', ['category' => 'Standar Pelayanan'])" :active="request()->is('dokumen/Standar Pelayanan*')" wire:navigate>
                                    {{ __('Standar Pelayanan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('doc-category', ['category' => 'Peraturan'])" :active="request()->is('dokumen/Peraturan*')" wire:navigate>
                                    {{ __('Peraturan') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('doc-category', ['category' => 'Rencana Kerja'])" :active="request()->is('dokumen/Rencana Kerja*')" wire:navigate>
                                    {{ __('Rencana Kerja') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Buletin --}}
                    <x-nav-link :href="route('buletin')" :active="request()->routeIs('buletin')" wire:navigate>
                        {{ __('Buletin') }}
                    </x-nav-link>

                    {{-- Gallery --}}
                    <x-nav-link :href="route('galeri')" :active="request()->routeIs('galeri')" wire:navigate>
                        {{ __('Galeri Kegiatan') }}
                    </x-nav-link>

                    {{-- Videos --}}
                    <div class="hidden lg:flex lg:items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('video-list')">
                                    {{ __('Video') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-2 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('video-list')" :active="request()->routeIs('video-list')" wire:navigate>
                                    {{ __('Inovasi') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('video-list')" :active="request()->routeIs('video-list')" wire:navigate>
                                    {{ __('Video 2') }}
                                </x-dropdown-link>
                                <x-dropdown-link :href="route('video-list')" :active="request()->routeIs('video-list')" wire:navigate>
                                    {{ __('Video 3') }}
                                </x-dropdown-link>
                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Contact --}}
                    <x-nav-link href="{{ request()->is('/') ? '#contact' : route('dashboard') . '#contact' }}"
                        id="contact-link">
                        {{ __('Kontak') }}
                    </x-nav-link>

                </div>

                {{-- Form Button --}}
                <x-primary-button href="route('dashboard')"
                    class="my-4 font-medium sm:my-3 me-2 lg:me-0 ms-auto xl:ms-20 text-detail md:text-body">
                    {{ __('Form Kunjungan') }}
                </x-primary-button>
            </div>

            {{-- Hamburger --}}
            <x-hamburger />
        </div>
    </div>

    {{-- Responsive Navigation Menu --}}
    <x-nav-responsive />

    {{-- Script --}}

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const contactLink = document.getElementById('contact-link');

            contactLink.addEventListener('click', function(event) {
                event.preventDefault();

                const targetId = this.getAttribute('href').substring(1);
                const targetElement = document.getElementById(targetId);

                // Check if we are currently on the homepage
                if (window.location.pathname === '/') {
                    // Smooth scroll to the "kontak" section if we are on the homepage
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop,
                            behavior: 'smooth'
                        });
                    }
                } else {
                    // Redirect to the homepage with the anchor if we are not on the homepage
                    window.location.href = `/${targetId ? '#' + targetId : ''}`;
                }
            });
        });
    </script>

</nav>
