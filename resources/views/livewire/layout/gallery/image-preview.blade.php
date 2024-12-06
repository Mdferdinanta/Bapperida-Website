<x-app-layout>
    {{-- Hero --}}
    <x-slot:header>
        <x-hero-pages>
            {{ __('Foto Kegiatan') }}
        </x-hero-pages>
    </x-slot:header>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <div class="p-6 space-y-2 bg-white xl:w-3/4 max-xl:shadow-md shadow-slate-300">
            <div class="flex flex-col">
                <div class="flex items-center justify-between">
                    <h2 class="mb-2 font-bold text-subtitle xl:text-headline text-primary-700">
                        {{ $album->name }}
                    </h2>
                    <small class="tracking-wide text-gray-500 text-detail xl:text-body">
                        <span id="imageDate">{{ $images->first()->created_at->format('d F Y') }}</span>
                    </small>
                </div>
                <span id="imageTitle" class="font-medium">
                    {{ $images->first()->name }}
                </span>
            </div>
            <div class="text-white ">
                <div class="container py-4 mx-auto">
                    <div class="relative">
                        <div class="flex items-center justify-between">
                            <!-- Previous Button -->
                            <button id="prevButton"
                                class="absolute left-0 transform -translate-y-1/2 top-1/2 focus:outline-none">
                                <i
                                    class="p-2 rounded-full text-neutral-500 lg:hover:text-neutral-800 lg:hover:bg-primary-100 ri-arrow-left-wide-line ri-2x"></i>
                            </button>

                            <!-- Main Image -->
                            <div class="flex justify-center w-full border-y-2 border-mist-300">
                                <img alt="{{ $images->first()->name }}" class="object-contain rounded h-[480px] transition-opacity duration-500 opacity-100"
                                    id="mainImage" src="{{ asset('storage/' . $images->first()->image) }}"
                                    width="1200" />
                            </div>

                            <!-- Next Button -->
                            <button id="nextButton"
                                class="absolute right-0 transform -translate-y-1/2 top-1/2 focus:outline-none">
                                <i
                                    class="p-2 rounded-full text-neutral-500 lg:hover:text-neutral-800 lg:hover:bg-primary-100 ri-arrow-right-wide-line ri-2x"></i>
                            </button>
                        </div>
                    </div>

                    <!-- Previews -->
                    <div class="mt-4 overflow-x-auto border-mist-300">
                        <div class="flex px-4">
                            @foreach ($images as $index => $img)
                                <div class="flex-shrink-0 w-40 h-40 p-4 thumbnail transition-all duration-150 ease-in-out {{ $index === 0 ? 'active' : '' }}"
                                    data-index="{{ $index }}">
                                    <img alt="{{ $img->name }}"
                                        class="object-cover w-full h-full shadow-md cursor-pointer rounded-xs shadow-slate-300"
                                        src="{{ asset('storage/' . $img->image) }}" />
                                </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const album = @json($images);
                let currentIndex = 0;

                const mainImage = document.getElementById('mainImage');
                const imageTitle = document.getElementById('imageTitle');
                const imageDate = document.getElementById('imageDate');
                const prevButton = document.getElementById('prevButton');
                const nextButton = document.getElementById('nextButton');
                const thumbnails = document.querySelectorAll('.thumbnail');
                const thumbnailContainer = document.querySelector('.mt-4 .flex');

                function updateImage(index) {
                    mainImage.classList.add('fade-out');
                    setTimeout(() => {
                        mainImage.src = `/storage/${album[index].image}`;
                        imageTitle.textContent = album[index].name;
                        imageDate.textContent = new Date(album[index].created_at).toLocaleDateString('id-ID', {
                            year: 'numeric',
                            month: 'long',
                            day: 'numeric'
                        });
                        mainImage.classList.remove('fade-out');
                        mainImage.classList.add('fade-in');
                    }, 300);

                    setTimeout(() => {
                        mainImage.classList.remove('fade-in');
                    }, 300);

                    thumbnails.forEach((thumbnail, i) => {
                        if (i === index) {
                            thumbnail.classList.add('active');
                            thumbnail.scrollIntoView({
                                behavior: 'smooth',
                                block: 'nearest',
                                inline: 'center'
                            });
                        } else {
                            thumbnail.classList.remove('active');
                        }
                    });
                }

                prevButton.addEventListener('click', function() {
                    currentIndex = (currentIndex === 0) ? album.length - 1 : currentIndex - 1;
                    updateImage(currentIndex);
                });

                nextButton.addEventListener('click', function() {
                    currentIndex = (currentIndex === album.length - 1) ? 0 : currentIndex + 1;
                    updateImage(currentIndex);
                });

                thumbnails.forEach(thumbnail => {
                    thumbnail.addEventListener('click', function() {
                        currentIndex = parseInt(this.getAttribute('data-index'));
                        updateImage(currentIndex);
                    });
                });
            });
        </script>

        <style>
            .thumbnail.active {
                padding: 0px;
            }

            .fade-in {
                opacity: 1;
                transition: opacity 0.5s;
            }

            .fade-out {
                opacity: 0;
                transition: opacity 0.5s;
            }
        </style>

    </x-container>

</x-app-layout>
