<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Profile') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">

            {{-- Upload Berita --}}
            <div class="p-4 bg-white shadow-lg sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:layout.profile.upload-berita-bapperida-form />
                </div>
            </div>

            {{-- Upload Dokumen --}}
            <div class="p-4 bg-white shadow-lg sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:layout.profile.upload-dokumen-form />
                </div>
            </div>

            {{-- Upload Foto --}}
            <div class="p-4 bg-white shadow-lg sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:layout.profile.upload-galeri-form />
                </div>
            </div>

            {{-- Upload Video --}}
            <div class="p-4 bg-white shadow-lg sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:layout.profile.upload-video-form />
                </div>
            </div>











            <div class="p-4 bg-white shadow-lg sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <div class="p-4 bg-white shadow-lg sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <div class="p-4 bg-white shadow-lg sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
