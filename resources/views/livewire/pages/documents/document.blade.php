<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            @if ($category)
                {{ $category->name }}
            @else
                {{ __('Dokumen') }}
            @endif
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <livewire:layout.documents.document-list :category="$category" />

    </x-container>

</x-app-layout>
