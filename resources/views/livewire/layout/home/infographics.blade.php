<div>
    <div class="max-w-full">
        <div
            class="flex flex-col items-center justify-center px-8 py-4 mx-auto overflow-hidden shadow-sm bg-mist-100">

            {{-- Section Title --}}
            <x-section-title href="">{{ __('Infografis') }}</x-section-title>

            <div class="w-full mt-4 mb-8 sm:mt-8">

                <!-- Slider main container -->
                <div class="swiper">

                    <!-- Additional required wrapper -->
                    <div class="mx-16 overflow-hidden slider-wrapper">

                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">

                            <!-- Slides -->
                            <div class="p-4 swiper-slide">
                                <img src="{{ asset('assets/img/infograph/pakta_integritas_bapperida.jpg') }}"
                                    alt="" class="w-full shadow-lg">
                                <div>
                                    <h5 class="mt-2 font-semibold text-center">File Name</h5>
                                </div>
                            </div>

                            <div class="p-4 swiper-slide">
                                <img src="{{ asset('assets/img/infograph/pakta_integritas_netralitas_asn_2024.jpeg') }}"
                                    alt="" class="w-full shadow-lg">
                                <div>
                                    <h5 class="mt-2 font-semibold text-center">File Name</h5>
                                </div>
                            </div>

                            <div class="p-4 swiper-slide">
                                <img src="{{ asset('assets/img/infograph/call_for_buletin_articles_volume_3_nomor_3.jpeg') }}"
                                    alt="" class="w-full shadow-lg">
                                <div>
                                    <h5 class="mt-2 font-semibold text-center">File Name</h5>
                                </div>
                            </div>

                            <div class="p-4 swiper-slide">
                                <img src="{{ asset('assets/img/infograph/asn_berakhlak_pak_kaban.jpg') }}"
                                    alt="" class="w-full shadow-lg">
                                <div>
                                    <h5 class="mt-2 font-semibold text-center">File Name</h5>
                                </div>
                            </div>

                        </div>

                        <!-- If we need navigation buttons -->
                        <div class="text-primary-500 text-shadow shadow-slate-500 swiper-button-prev"></div>
                        <div class="text-primary-500 text-shadow shadow-slate-500 swiper-button-next"></div>

                    </div>

                </div>

            </div>

        </div>
    </div>
</div>
