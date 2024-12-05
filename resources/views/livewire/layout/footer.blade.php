<?php

use App\Livewire\Actions\Logout;
use Livewire\Volt\Component;

new class extends Component {
    /**
     * Log the current user out of the application.
     */
// public function logout(Logout $logout): void
// {
//     $logout();
//     $this->redirect('/', navigate: true);
// }
}; ?>

<footer class="bg-white">
    <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6">
        <div class="flex flex-col justify-between lg:flex-row border-b-2 border-mist-300">
            <div class="flex lg:flex-col lg:items-start items-center justify-between max-w-full py-2">
                <div>
                    <div class="h-20"><img src="{{ asset('assets/images/logo/Logo.png') }}" alt="Logo BAPPERIDA" class="h-full">
                    </div>
                    <div class="px-4 py-2">
                        <ul class="text-detail tracking-wide space-y-1">
                            <li><a class="hover:underline" href="https://bapperida.kotabogor.go.id/website">BAPPERIDA
                                    KOTA BOGOR</a></li>
                            <li><a class="hover:underline" href="">Jl. Kapten Muslihat No.21 - Bogor 16121</a>
                            </li>
                            <li class="cursor-default">0251-8338052</li>
                        </ul>
                    </div>
                </div>
                <div class="px-4 py-2 space-y-4 max-w-full flex flex-col">
                    <span class="text-subtitle font-bold tracking-wide">Media</span>
                    <ul class="flex gap-3 py-3">
                        <li><a class="p-3 bg-primary-700 rounded-full hover:bg-primary-800 text-white"
                                href="https://www.instagram.com/bapperida.kotabogor"><i
                                    class="ri-xl ri-instagram-line"></i></a></li>
                        <li><a class="p-3 bg-primary-700 rounded-full hover:bg-primary-800 text-white"
                                href="https://youtube.com/@bapperidakotabogor?si=mv2YUYsbGHLiKKay"><i
                                    class="ri-xl ri-youtube-fill"></i></a></li>
                        <li><a class="p-3 bg-primary-700 rounded-full hover:bg-primary-800 text-white"
                                href="https://bapperida.kotabogor.go.id"><i class="ri-xl ri-global-line"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="px-4 py-2 space-y-4">
                <span class="text-subtitle font-bold tracking-wide">Site Map</span>
                <div class="flex w-full lg:gap-6 xl:gap-16 justify-between text-detail md:text-body tracking-wide">
                    <ul class="space-y-1">
                        <li class="hover:underline"><a wire:navigate href="{{ route('structure') }}">Struktur
                                Organisasi</a></li>
                        <li class="hover:underline"><a wire:navigate href="{{ route('staff') }}">Pejabat BAPPERIDA</a>
                        </li>
                        <li class="hover:underline"><a wire:navigate href="{{ route('schedule') }}">Agenda Kegiatan</a>
                        </li>
                        <li class="hover:underline"><a wire:navigate href="{{ route('index') }}">Indeks Inovasi</a></li>
                        <li class="hover:underline"><a wire:navigate href="{{ route('gallery') }}">Galeri</a></li>
                        <li class="hover:underline"><a wire:navigate href="{{ route('innovation') }}">Etalase
                                Inovasi</a></li>
                    </ul>
                    <ul class="space-y-1">
                        <li class="hover:underline"><a wire:navigate
                                href="{{ route('document', ['category' => 'perencanaan pembangunan']) }}">Perencanaan Pembangunan</a></li>
                        <li class="hover:underline"><a wire:navigate
                                href="{{ route('document', ['category' => 'penelitian pengembangan']) }}">Penelitian Pengembangan</a></li>
                        <li class="hover:underline"><a wire:navigate
                                href="{{ route('document', ['category' => 'standar pelayanan']) }}">Standar Pelayanan</a></li>
                        <li class="hover:underline"><a wire:navigate
                                href="{{ route('document', ['category' => 'rencana kerja']) }}">Rencana Kerja</a></li>
                        <li class="hover:underline"><a wire:navigate
                                href="{{ route('document', ['category' => 'peraturan']) }}">Peraturan</a></li>
                        <li class="hover:underline"><a wire:navigate href="{{ route('buletin') }}">Buletin</a></li>
                    </ul>
                </div>
            </div>

            <livewire:layout.footer.visitor-stats />
        </div>
        <div class="text-tiny lg:text-detail p-4 text-center w-full">
            <span><i class="ri-copyright-line"></i> 2024 <span class="font-bold">Badan Perencanaan Pembangunan Riset dan
                Inovasi Daerah</span> Kota Bogor</span>
        </div>
    </div>
</footer>
