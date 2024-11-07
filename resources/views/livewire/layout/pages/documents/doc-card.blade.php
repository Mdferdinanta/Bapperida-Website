<a href="{{ route('doc-preview', ['id' => $document->id, 'category' => $document->kategori]) }}">
    <div class="space-y-4">
        <div class="flex items-center justify-between p-4 mb-2 bg-white border shadow-sm border-mist-200 rounded-xs">
            <div>
                <span class="font-bold text-primary-800 text-body">
                    {{ $document->nama }}
                </span>
                <p class="mt-2 text-tiny">{{ $document->created_at->format('d F Y') }}</p>
            </div>
            <x-primary-button>
                <h4 class="font-semibold text-tiny xl:text-detail max-sm:hidden">Download</h4>
                <i class="font-light sm:ml-2 sm:text-detail ri-download-2-line"></i>
            </x-primary-button>
        </div>
    </div>
</a>
