
<x-app-layout>

    <x-hero>
        <span>Agenda</span>
    </x-hero>


    <main class="container mx-auto py-8 px-6">

        {{-- Search --}}
        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3">
                <div class="flex justify-end items-center mb-4">
                    <div class="relative">
                        <x-search-input></x-search-input>
                    </div>
                </div>
            </div>
            <div class="col-auto">
                <div class="flex justify-start items-center mb-4">
                    <div class="relative">
                        <h2 class="text-headline font-semibold">Berita Terbaru</h2>
                    </div>
                </div>
            </div>
        </div>



        <div class="grid grid-cols-4 gap-16">
            <div class="col-span-3 gap-4 h-svh">
               

                </div>


            <div class="col-auto grid grid-rows-3 gap-4">
                <x-berita-card></x-berita-card>
            </div>
            </div>
            </div>
        </div>


        <div></div>

    </main>

</x-app-layout> 
