<x-app-layout>

    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:rounded-md">
                <div class="flex justify-center w-full">
                    <h1
                        class="font-black tracking-widest text-center uppercase font-display text-subtitle lg:text-headline">
                        <span class="text-primary-600">Admin </span>
                        <span class="text-primary-800">Dashboard</span>
                    </h1>
                </div>
            </div>

            {{-- Visitors --}}
            <div class="p-4 bg-white shadow sm:rounded-md">
                <div class="w-full">
                    <livewire:layout.visit.visitor-table />
                </div>
            </div>

            {{-- Account Information Forms --}}
            {{-- <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.update-profile-information-form />
                </div>
            </div> --}}

            {{-- Password Form --}}
            {{-- <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.update-password-form />
                </div>
            </div> --}}

            {{-- ===== Database Forms ===== --}}
            {{-- Staff Form --}}
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.add-staff-form />
                </div>
            </div>

            {{-- News Form --}}
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.add-news-form />
                </div>
            </div>

            {{-- Documents Form --}}
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.add-document-form />
                </div>
            </div>

            {{-- Innovations Index Form --}}
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.add-index-form />
                </div>
            </div>

            {{-- Infographics Form --}}
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.add-infographic-form />
                </div>
            </div>

            {{-- Gallery Images Form --}}
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.add-image-form />
                </div>
            </div>

            {{-- Gallery Video Form --}}
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.add-video-form />
                </div>
            </div>

            {{-- Delete Account --}}
            {{-- <div class="p-4 bg-white shadow sm:p-8 sm:rounded-md">
                <div class="max-w-xl">
                    <livewire:profile.delete-user-form />
                </div>
            </div> --}}
        </div>
    </div>

</x-app-layout>
