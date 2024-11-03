<div>
    <div class="max-w-full">
        <div class="flex flex-col items-center justify-center px-8 py-4 mx-auto overflow-hidden shadow-sm bg-mist-100">

            {{-- Section Title --}}
            <x-section-title>{{ __('Media Sosial') }}</x-section-title>

            {{-- Content --}}
            {{-- <iframe src="https://snapwidget.com/embed/1066641"
                class="w-full px-4
                border-0 my-4 overflow-hidden
                h-[260px] md:w-[800px] lg:w-[960px]
                sm:h-[400px] md:h-[520px] lg:h-[630px]
                snapwidget-widget post-ig"
                allowtransparency="true" frameborder="0" scrolling="no" title="Posts from Instagram">
            </iframe> --}}

            <div
                class="w-full gap-2 px-4 grid grid-cols-3 border-0 my-4 overflow-hidden h-[260px] md:w-[800px] lg:w-[960px] sm:h-[400px] md:h-[520px] lg:h-[630px] snapwidget-widget post-ig">
                <img src="{{ asset('assets/img/doctors-1.jpg') }}" alt="" class="">
                <img src="{{ asset('assets/img/doctors-4.jpg') }}" alt="" class="">
                <img src="{{ asset('assets/img/doctors-2.jpg') }}" alt="" class="">
                <img src="{{ asset('assets/img/doctors-4.jpg') }}" alt="" class="">
                <img src="{{ asset('assets/img/doctors-1.jpg') }}" alt="" class="">
                <img src="{{ asset('assets/img/doctors-3.jpg') }}" alt="" class="">
            </div>

        </div>
    </div>
</div>
