<a href="{{ route('doc-preview', ['category' => $document->kategori, 'id' => $document->id]) }}">
    <div class="space-y-4">
        <div class="flex items-center justify-between p-4 mb-2 bg-white border shadow-sm border-mist-200 rounded-xs">
            <div>
                <span class="font-bold text-primary-800 text-body">
                    {{ $document->nama }}
                </span>
                <p class="mt-2 text-tiny">{{ $document->created_at->format('d F Y') }}</p>
            </div>
            <a href="{{ route('doc-download', ['category' => $document->kategori, 'id' => $document->id]) }}">
                <x-primary-button class="rounded-2xs">
                    <h4 class="font-semibold text-tiny xl:text-detail max-sm:hidden">Download</h4>
                    <i class="font-light sm:ml-2 sm:text-detail ri-download-2-line"></i>
                </x-primary-button>
            </a>
        </div>
    </div>
</a>
