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

<nav x-data="{ open: false }" class="sticky top-0 z-50 w-full bg-white shadow-md">
    <!-- Primary Navigation Menu -->
    <div class="px-4 mx-auto max-w-7xl sm:px-6">
        <div class="flex justify-between">
            <!-- Logo -->
            <div class="flex items-center py-4 shrink-0">
                <a href="{{ route('dashboard') }}" wire:navigate>
                    <x-application-logo class="block w-auto text-gray-800 fill-current" />
                </a>
            </div>

            <div class="flex">
                <!-- Navigation Links -->
                <div class="hidden space-x-3 lg:flex">
                    {{-- Dashboard --}}
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                        {{ __('Beranda') }}
                    </x-nav-link>

                    {{-- Profiles --}}
                    <div class="hidden lg:flex lg:items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('structure', 'staff', 'schedule')">
                                    {{ __('Profil') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-1 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                {{-- Structure --}}
                                <x-dropdown-link :href="route('structure')" :active="request()->routeIs('structure')" wire:navigate>
                                    {{ __('Struktur Organisasi') }}
                                </x-dropdown-link>

                                {{-- BAPPERIDA Staffs --}}
                                <x-dropdown-link :href="route('staff')" :active="request()->routeIs('staff')" wire:navigate>
                                    {{ __('Pejabat BAPPERIDA') }}
                                </x-dropdown-link>

                                {{-- Schedules --}}
                                <x-dropdown-link :href="route('schedule')" :active="request()->routeIs('schedule')" wire:navigate>
                                    {{ __('Agenda Kegiatan') }}
                                </x-dropdown-link>

                            </x-slot>
                        </x-dropdown>
                    </div>

                    {{-- Documents --}}
                    <div class="hidden lg:flex lg:items-center">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('document', 'document-preview')">
                                    {{ __('Dokumen') }}
                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-1 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                {{-- Perencanaan Pembangunan --}}
                                <x-dropdown-link :href="route('document', ['category' => 'perencanaan pembangunan'])" :active="request()->is('dokumen/perencanaan pembangunan*')" wire:navigate>
                                    {{ __('Perencanaan Pembangunan') }}
                                </x-dropdown-link>

                                {{-- Penelitian Pengembangan --}}
                                <x-dropdown-link :href="route('document', ['category' => 'penelitian pengembangan'])" :active="request()->is('dokumen/penelitian pengembangan*')" wire:navigate>
                                    {{ __('Penelitian Pengembangan') }}
                                </x-dropdown-link>

                                {{-- Standar Pelayanan --}}
                                <x-dropdown-link :href="route('document', ['category' => 'standar pelayanan'])" :active="request()->is('dokumen/standar pelayanan*')" wire:navigate>
                                    {{ __('Standar Pelayanan') }}
                                </x-dropdown-link>

                                {{-- Peraturan --}}
                                <x-dropdown-link :href="route('document', ['category' => 'peraturan'])" :active="request()->is('dokumen/peraturan*')" wire:navigate>
                                    {{ __('Peraturan') }}
                                </x-dropdown-link>

                                {{-- Rencana Kerja --}}
                                <x-dropdown-link :href="route('document', ['category' => 'rencana kerja'])" :active="request()->is('dokumen/rencana kerja*')" wire:navigate>
                                    {{ __('Rencana Kerja') }}
                                </x-dropdown-link>

                            </x-slot>
                        </x-dropdown>
                    </div>

                    <x-nav-link :href="route('index')" :active="request()->routeIs('index')" wire:navigate>
                        {{ __('Indeks') }}
                    </x-nav-link>

                    <x-nav-link :href="route('buletin')" :active="request()->routeIs('buletin')" wire:navigate>
                        {{ __('Buletin') }}
                    </x-nav-link>

                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')" wire:navigate>
                        {{ __('Gallery') }}
                    </x-nav-link>

                    <x-nav-link :href="route('gallery')" :active="request()->routeIs('gallery')" wire:navigate>
                        {{ __('Etalase Inovasi') }}
                    </x-nav-link>

                </div>

                <!-- Interchangeable Options -->
                @auth

                    <!-- Admin's Option -->
                    <div class="hidden lg:flex lg:-my-px lg:items-center lg:ms-6">
                        <x-dropdown>
                            <x-slot name="trigger">
                                <x-nav-link class="h-full" :active="request()->routeIs('profile')">
                                    <div x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                                        x-on:profile-updated.window="name = $event.detail.name"></div>

                                    <i :class="{ 'rotate-180': open }"
                                        class="transition-transform ms-1 ri-arrow-down-s-line"></i>
                                </x-nav-link>
                            </x-slot>

                            <x-slot name="content">
                                <x-dropdown-link :href="route('profile')" wire:navigate>
                                    {{ __('Admin Page') }}
                                </x-dropdown-link>

                                <!-- Authentication -->
                                <button wire:click="logout" class="w-full text-start">
                                    <x-dropdown-link class="hover:bg-red-100">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </button>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @else
                    <!-- Button -->
                    <x-primary-button class="my-4 ms-6">
                        {{ __('Form Kunjungan') }}
                    </x-primary-button>

                @endauth
            </div>

            <!-- Hamburger -->
            <div class="flex items-center -me-2 lg:hidden">
                <button @click="open = ! open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 transition duration-150 ease-in-out rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500">
                    <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->


    <div :class="{ 'block': open, 'hidden': !open }" class="hidden lg:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        @auth
            <!-- Responsive Settings Options -->
            <div class="pt-4 pb-1 border-t border-gray-200">
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                        x-on:profile-updated.window="name = $event.detail.name"></div>
                    <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile')" wire:navigate>
                        {{ __('Admin Page') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <button wire:click="logout" class="w-full text-start">
                        <x-responsive-nav-link>
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </button>
                </div>
            </div>
        @endauth
    </div>

</nav>
