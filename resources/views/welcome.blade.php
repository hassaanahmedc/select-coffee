<x-guest-layout>
    <div class="bg_img_crousel">
        <div id="sliders_wrapper"
            class="flex flex-wrap"
            x-data="{ current_image: 0 }"
            x-init="setInterval(() => { current_image = (current_image + 1) % 4 }, 2000)">
            <div id="sliders_container"
                class="relative justify-center basis-1/2 h-full">

                <img x-cloak
                    x-transition.duration.1000ms
                    x-show="current_image === 0"
                    class="absolute object-cover h-full"
                    src="{{ Vite::asset('resources/images/slider-1.jpg') }}"
                    alt="">

                <img x-cloak
                    x-transition.duration.1000ms
                    x-show="current_image === 1"
                    class="absolute object-cover h-full"
                    src="{{ Vite::asset('resources/images/slider-2.jpg') }}"
                    alt="">

                <img x-cloak
                    x-transition.duration.1000ms
                    x-show="current_image === 2"
                    class="absolute object-cover h-full"
                    src="{{ Vite::asset('resources/images/slider-3.jpg') }}"
                    alt="">

                <img x-cloak
                    x-transition.duration.1000ms
                    x-show="current_image === 3"
                    class="absolute object-cover h-full"
                    src="{{ Vite::asset('resources/images/slider-4.jpg') }}"
                    alt="">

                <img src="{{ Vite::asset('resources/images/slider-5.jpg') }}"
                    alt="">
            </div>
            <div class="basis-1/2">
                <div class="flex flex-wrap">
                    <figure class="basis-1/2">
                        <img src="{{ Vite::asset('resources/images/turkish__delight.jpg') }}"
                            class="w-full h-full aspect-square"
                            alt="">
                    </figure>

                    <figure class="basis-1/2">
                        <img src="{{ Vite::asset('resources/images/chickpeas.jpg') }}"
                            class="w-full h-full aspect-square"
                            alt="">
                    </figure>

                    <figure class="basis-1/2">
                        <img src="{{ Vite::asset('resources/images/teapot.jpg') }}"
                            class="w-full h-full aspect-square"
                            alt="">
                    </figure>

                    <figure class="basis-1/2">
                        <img src="{{ Vite::asset('resources/images/free_shipping.jpg') }}"
                            class="w-full h-full aspect-square"
                            alt="">
                    </figure>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
