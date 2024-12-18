<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            @if ($document)
                {{ $document->category->name }}
            @else
                {{ __('Dokumen') }}
            @endif
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <div class="p-6 space-y-4 bg-white xl:w-3/4 max-xl:shadow-md shadow-slate-300">
            <div class="">
                <div class="bg-white">
                    <h1 class="font-bold text-center text-body md:text-subtitle lg:text-subtitle xl:text-headline ">
                        {{ $document->name }}</h1>
                    {{-- Iframe for PDF preview --}}
                    <div class="relative mt-4 overflow-hidden rounded-xs">
                        <iframe src="{{ $fileUrl }}" class="w-full h-[60vh] md:h-[95vh] lg:h-[100vh]" frameborder="0">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>

    </x-container>

</x-app-layout>
