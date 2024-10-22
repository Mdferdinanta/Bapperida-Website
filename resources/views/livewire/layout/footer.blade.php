<?php

use Livewire\Volt\Component;

?>

<div class="inline-flex flex-col items-start justify-start container max-w-full">
    <div class="inline-flex items-start self-stretch justify-between px-16 py-8">
        <div class="inline-flex flex-col items-start justify-center gap-5">
            <div class="inline-flex items-center justify-start gap-4">
                <img class="w-auto h-20" src="{{ asset('assets/img/bapperida.png') }}" />
                <h3 class="text-subtitle font-subtitleBold">BAPPERIDA KOTA BOGOR</h3>
            </div>
            <p>
                Jl. Kapten Muslihat No.21 RT/RW 01/01<br />
                Kelurahan Pabaton, Kecamatan Bogor Tengah<br />
                Kota Bogor 16121
            </p>
        </div>
        <div class="inline-flex flex-col items-start self-stretch justify-start gap-5">
            <div class="text-subtitle font-subtitleBold">Statistik Pengunjung</div>
            <div class="inline-flex items-center justify-start gap-2">
                <div class="inline-flex flex-col items-start justify-start gap-4">
                    <p>Hari Ini</p>
                    <p>Bulan Ini</p>
                    <p>Tahun Ini</p>
                </div>
                <div class="inline-flex flex-col items-start justify-start gap-4">
                    <p>:</p>
                    <p>:</p>
                    <p>:</p>
                </div>
                <div class="inline-flex flex-col items-start justify-start gap-4">
                    <p>641</p>
                    <p>35976</p>
                    <p>305713</p>
                </div>
            </div>
            <div class="inline-flex items-center justify-start gap-4">
                <div class="text-h2 font-h2Bold text-primary-600">
                    <i class="ri-group-line"></i>
                    1933711
                </div>
            </div>
        </div>
        <div class="flex items-center justify-end">
            <div class="inline-flex flex-col items-end justify-start w-auto gap-2">
                <div class="flex gap-4 items-center">
                    <p>0251-8338052</p><i class="ri-lg ri-phone-line p-2 rounded-full bg-primary-100"></i>
                </div>
                <div class="flex gap-4 items-center">
                    <p>bapperida@kotabogor.go.id</p><i class="ri-lg ri-mail-line p-2 rounded-full bg-primary-100"></i>
                </div>
                <div class="flex gap-4 items-center">
                    <p>@bapperida.kotabogor</p><i class="ri-lg ri-instagram-line p-2 rounded-full bg-primary-100"></i>
                </div>
                <div class="flex gap-4 items-center">
                    <p>@bappeda3271</p><i class="ri-lg ri-twitter-line p-2 rounded-full bg-primary-100"></i>
                </div>
                <div class="flex gap-4 items-center">
                    <p>Portal Bapperida</p><i class="ri-lg ri-global-line p-2 rounded-full bg-primary-100"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="self-stretch py-6 bg-primary-50 text-detail justify-center items-center gap-1 inline-flex">
        <div>
            <span><i class="ri-copyright-line"></i> Copyright 2024</span>
            <span class="font-detailBold">Badan Perencanaan Pembangunan Riset dan Inovasi Daerah Kota Bogor. </span>
            <span>All rights Reserved</span>
        </div>
    </div>
</div>
