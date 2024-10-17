<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />

    {{-- Scripts --}}
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    {{-- Navbar --}}
    <div>
        <nav class="flex justify-between px-4 py-2 text-lg border-b-2 bg-mist-50 border-neutral-400">
            <div class="flex items-center h-16 shrink-0">
                <a href="/homepage">
                    <img src="{{ asset('assets/img/bapperida-logo.png') }}" alt="" style="height: 64px">
                </a>
            </div>

            <div class="flex items-center">
                <ul class="flex space-x-3">
                    <li>
                        <a href="/homepage">Beranda</a>
                    </li>
                    <li>
                        <a href="/">Profil<i class="ri-arrow-down-s-line"></i></a>
                    </li>
                    <li>
                        <a href="/">Dokumen<i class="ri-arrow-down-s-line"></i></a>
                    </li>
                    <li>
                        <a href="/">Buletin</a>
                    </li>
                    <li>
                        <a href="/">Galeri</a>
                    </li>
                    <li>
                        <a href="/">Video<i class="ri-arrow-down-s-line"></i></a>
                    </li>
                    <li>
                        <a href="/">Kontak</a>
                    </li>
                    <li>
                        <a href="/" class="px-4 py-2 text-white bg-primary-500 rounded-2xl">Form Kunjungan</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</body>

</html>