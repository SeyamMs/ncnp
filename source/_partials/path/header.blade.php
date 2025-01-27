@props(['page'])

<header
    class="fixed top-0 right-0 z-50 flex flex-col items-center w-full overflow-hidden"
    x-data="{ shown: false, showFixed: window.scrollY > 115 }"
    x-intersect.threshold.20="shown = true"
    x-on:scroll.window="showFixed = window.scrollY > 115"
    :class="{ 'bg-[#0F0F0F]': showFixed }"
>
    <div class="xl:px-4 lg:px-2 md:px-4 container relative px-2 py-6 mx-auto">
        <div class="relative z-10 flex w-full">
            <div class="lg:justify-between xl:gap-4 lg:gap-2 flex items-center justify-center w-full gap-4">
                <div
                    class="flex-shrink-0"
                    :class="{
                        'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:block hidden xl:h-[72px] h-16">
                        <img
                            class="object-scale-down w-full h-full"
                            src="{{ $page->asset('images/ncnp-logo-white.svg') }}"
                            alt="ncnp-logo-white"
                        />
                    </div>
                </div>


                <div
                    class="bg-opacity-15 backdrop-blur md:p-3 lg:p-4 flex flex-shrink-0 p-2 bg-white rounded-full"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] lg:motion-delay-[900ms] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:gap-2 flex items-center gap-1">
                        <a
                            class="md:text-sm flex-shrink-0 p-2 text-xs font-medium text-white"
                            href="{{ $page->baseUrl }}/?to=about-section"
                        >
                            عن التحدي
                        </a>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <a
                            class="md:text-sm flex-shrink-0 p-2 text-xs font-medium text-white"
                            href="{{ $page->baseUrl }}/?to=paths-section"
                        >
                            المسارات
                        </a>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <a
                            class="md:text-sm flex-shrink-0 p-2 text-xs font-medium text-white"
                            href="{{ $page->baseUrl }}/?to=targets-section"
                        >
                            الفئة المستهدفة
                        </a>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <a
                            class="md:text-sm sm:block flex-shrink-0 hidden p-2 text-xs font-medium text-white"
                            href="{{ $page->baseUrl }}/?to=timeline-section"
                        >
                            رحلة التحدي ومراحله
                        </a>
                        {{-- <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <a
                            class="md:text-sm sm:block flex-shrink-0 hidden p-2 text-xs font-medium text-white"
                            href="{{ $page->baseUrl }}/?to=timeline-section"
                        >
                            الخارطة
                        </a>
                        <span class="md:block flex-shrink-0 hidden w-px h-4 bg-gray-100"></span>
                        <a
                            class="md:text-sm sm:block flex-shrink-0 hidden p-2 text-xs font-medium text-white"
                            href="{{ $page->baseUrl }}/?to=timeline-section"
                        >
                            الخطوات
                        </a> --}}
                        <div class="md:w-28 flex items-center flex-shrink-0 h-8">
                            <button
                                class="text-lg group hover:bg-[#6d5d8250] hover:ring-2 hover:ring-opacity-60 hover:ring-white font-semibold rounded-full flex items-center justify-between hover:justify-center p-1 h-8 md:w-28 bg-white hover:text-white text-[#015363]"
                                data-tf-popup="Z2f34azw"
                            >
                                <div class="flex justify-center flex-grow">
                                    <span class="md:text-sm px-2 text-xs">
                                        انضم الينا
                                    </span>
                                </div>
                                <div
                                    class="group-hover:hidden sm:flex hidden shrink-0 items-center justify-center size-7 rounded-full bg-[#015363]">
                                    <img
                                        class="w-4"
                                        src="{{ $page->asset('images/icons/lamp-light.svg') }}"
                                        alt="lamp-light"
                                    />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <div
                    class="flex-shrink-0"
                    :class="{
                        'motion-preset-fade -motion-translate-x-in-[40px] motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:block hidden xl:size-[72px] size-16">
                        <img
                            class="object-scale-down w-full h-full"
                            src="{{ $page->asset('images/maoon-icon-white.svg') }}"
                            alt="maoon-icon-white"
                        />
                    </div>
                </div>
            </div>
        </div>

    </div>
</header>
