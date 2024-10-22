<x-app-layout>

    {{-- Hero Section --}}
    <x-hero-home>
        <h1 class="text-display font-displayBold text-shadow-lg shadow-black">
            SELAMAT DATANG
        </h1>
        <h3 class="tracking-widest font-subtitleNormal text-subtitle text-shadow shadow-black">
            Website resmi Badan Perencanaan Pembangunan, Riset dan Inovasi Daerah (BAPPERIDA) Kota Bogor ini memuat
            profil dan informasi penting terkini mengenai berita, program dan kegiatan organisasi.
            Pengguna dapat mengakses dan mengunduh langsung dan memanfaatkan publikasi data dan informasi yang tersedia
            sesuai dengan keinginan dan kebutuhan.
        </h3>
    </x-hero-home>

    {{-- Berita BAPPERIDA Section --}}
    <x-section-title>Berita</x-section-title>

    <livewire:layout.news />

    {{-- Infografis Section --}}
    <x-section-title>Infografis</x-section-title>

    <livewire:layout.infografis />

    {{-- Berita Kota Bogor Section --}}
    <x-section-title>Berita Kota Bogor</x-section-title>

    <livewire:layout.news />

    {{-- Agenda Section --}}
    <x-section-title>Agenda</x-section-title>

    <livewire:layout.agenda />

    {{-- Kegiatan Section --}}
    <x-section-title>Kegiatan</x-section-title>

    <livewire:layout.home-gallery />

    {{-- Social Media Section --}}
    <x-section-title>Media Sosial</x-section-title>

    <livewire:layout.home-media />

    {{-- Contact Section --}}
    <x-section-title>Kontak</x-section-title>

    <livewire:layout.contact />
    
    {{-- Maps Section --}}
    <x-map></x-map>

</x-app-layout>
