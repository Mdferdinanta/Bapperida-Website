<x-app-layout>

    {{-- Container --}}
    <x-container>

        {{-- Content --}}
        <div class="p-6 space-y-4 bg-white xl:w-3/4 max-xl:shadow-md shadow-slate-300">
            <div>
                <h1 id="imageTitle"
                    class="mb-2 font-bold text-subtitle xl:text-headline text-primary-600">
                    {{ $album->first()->name }}
                </h1>
                <p class="text-detail xl:text-body text-stone-500">
                    <span id="imageDate">{{ $album->first()->created_at->format('d F Y') }}</span>
                </p>
            </div>
            <div class="text-white ">
                <div class="container py-8 mx-auto">
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
                                <img alt="{{ $album->first()->name }}" class="object-contain rounded h-[480px]"
                                    id="mainImage" src="{{ asset('storage/' . $album->first()->image) }}"
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
                        <div class="flex space-x-2">
                            @foreach ($album as $index => $img)
                                <div class="flex-shrink-0 w-40 h-40 py-2 px-1 thumbnail {{ $index === 0 ? 'active' : '' }}"
                                    data-index="{{ $index }}">
                                    <img alt="{{ $img->name }}"
                                        class="object-cover w-full h-full cursor-pointer rounded-xs"
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
                const album = @json($album);
                let currentIndex = 0;

                const mainImage = document.getElementById('mainImage');
                const imageTitle = document.getElementById('imageTitle');
                const imageDate = document.getElementById('imageDate');
                const prevButton = document.getElementById('prevButton');
                const nextButton = document.getElementById('nextButton');
                const thumbnails = document.querySelectorAll('.thumbnail');
                const thumbnailContainer = document.querySelector('.mt-4 .flex');

                function updateImage(index) {
                    mainImage.src = `/storage/${album[index].image}`;
                    imageTitle.textContent = album[index].name;
                    imageDate.textContent = new Date(album[index].created_at).toLocaleDateString('id-ID', {
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    });

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
            .thumbnail.active img {
                padding: 0px;
                border: 2px solid #2563EB;
            }
        </style>

    </x-container>

</x-app-layout>
