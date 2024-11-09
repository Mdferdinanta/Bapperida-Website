<div :class="{ 'block': open, 'hidden': !open }" class="hidden overflow-scroll max-h-80 lg:hidden">
    <div class="pt-2 pb-3">
        {{-- Dashboard --}}
        <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" wire:navigate>
            {{ __('Dashboard') }}
        </x-responsive-nav-link>

        {{-- Profiles --}}
        <div x-data="{ dropdownOpen: false }">
            <x-responsive-nav-link @click="dropdownOpen = ! dropdownOpen"
                class="flex items-center justify-between w-full" :active="request()->routeIs('page-structure', 'page-profile', 'page-schedules')">
                <span>{{ __('Profil') }}</span>
                <i :class="{ 'rotate-180': dropdownOpen }"
                    class="transition-transform ri-arrow-down-s-line"></i>
            </x-responsive-nav-link>
            <div x-show="dropdownOpen" class="text-detail">
                <x-responsive-nav-link class="pl-12" :href="route('page-structure')" :active="request()->routeIs('page-structure')" wire:navigate>
                    {{ __('Struktur Organisasi') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('page-profile')" :active="request()->routeIs('page-profile')" wire:navigate>
                    {{ __('Pejabat') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('page-schedules')" :active="request()->routeIs('page-schedules')" wire:navigate>
                    {{ __('Agenda') }}
                </x-responsive-nav-link>
            </div>
        </div>

        {{-- Documents --}}
        <div x-data="{ dropdownOpen: false }">
            <x-responsive-nav-link @click="dropdownOpen = ! dropdownOpen"
                class="flex items-center justify-between w-full" :active="request()->routeIs('doc-category')">
                <span>{{ __('Dokumen') }}</span>
                <i :class="{ 'rotate-180': dropdownOpen }"
                    class="transition-transform ri-arrow-down-s-line"></i>
            </x-responsive-nav-link>
            <div x-show="dropdownOpen" class="text-detail">
                <x-responsive-nav-link class="pl-12" :href="route('doc-category', ['category' => 'Perencanaan Pembangunan'])" :active="request()->routeIs('doc-category')" wire:navigate>
                    {{ __('Perencanaan Pembangunan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('doc-category', ['category' => 'Penelitian Pengembangan'])" :active="request()->routeIs('doc-category')" wire:navigate>
                    {{ __('Penelitian Pengembangan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('doc-category', ['category' => 'Indeks'])" :active="request()->routeIs('doc-category')" wire:navigate>
                    {{ __('Indeks') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('doc-category', ['category' => 'Standar Pelayanan'])" :active="request()->routeIs('doc-category')" wire:navigate>
                    {{ __('Standar Pelayanan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('doc-category', ['category' => 'Peraturan'])" :active="request()->routeIs('doc-category')" wire:navigate>
                    {{ __('Peraturan') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('doc-category', ['category' => 'Rencana Kerja'])" :active="request()->routeIs('doc-category')" wire:navigate>
                    {{ __('Rencana Kerja') }}
                </x-responsive-nav-link>
            </div>
        </div>

        {{-- Buletin --}}
        <x-responsive-nav-link :href="route('buletin')" :active="request()->routeIs('buletin')" wire:navigate>
            {{ __('Buletin') }}
        </x-responsive-nav-link>

        {{-- Gallery --}}
        <x-responsive-nav-link :href="route('galeri')" :active="request()->routeIs('galeri')" wire:navigate>
            {{ __('Galeri Kegiatan') }}
        </x-responsive-nav-link>

        {{-- Videos --}}
        <div x-data="{ dropdownOpen: false }">
            <x-responsive-nav-link @click="dropdownOpen = ! dropdownOpen"
                class="flex items-center justify-between w-full" :active="request()->routeIs('video-list')">
                <span>{{ __('Video') }}</span>
                <i :class="{ 'rotate-180': dropdownOpen }"
                    class="transition-transform ri-arrow-down-s-line"></i>
            </x-responsive-nav-link>
            <div x-show="dropdownOpen" class="text-detail">
                <x-responsive-nav-link class="pl-12" :href="route('video-list')" :active="request()->routeIs('video-list')" wire:navigate>
                    {{ __('Inovasi') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('video-list')" :active="request()->routeIs('video-list')" wire:navigate>
                    {{ __('Video 2') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link class="pl-12" :href="route('video-list')" :active="request()->routeIs('video-list')" wire:navigate>
                    {{ __('Video 3') }}
                </x-responsive-nav-link>
            </div>
        </div>

        {{-- Contact --}}
        <x-responsive-nav-link href="#contact" id="contact-link">
            {{ __('Kontak') }}
        </x-responsive-nav-link>
    </div>

    {{-- Responsive Settings Options --}}
    @auth

        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="text-base font-medium text-gray-800" x-data="{{ json_encode(['name' => auth()->user()->name]) }}" x-text="name"
                    x-on:profile-updated.window="name = $event.detail.name"></div>
                <div class="text-sm font-medium text-gray-500">{{ auth()->user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile')" wire:navigate>
                    {{ __('Profile') }}
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
