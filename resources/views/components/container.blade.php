<div class="py-12">
    <div class="mx-auto max-w-7xl overflow-hidden xl:rounded-md xl:shadow-md shadow-slate-300">
        <div class="flex flex-col xl:flex-row">
            {{-- Main Content --}}
            {{ $slot }}

            {{-- Side News Card --}}
            <livewire:layout.news.side-news />
        </div>
    </div>
</div>
