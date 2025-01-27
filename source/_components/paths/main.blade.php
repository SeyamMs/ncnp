@props(['title', 'image'])

<section
    class="bg-primary-950 flex w-full xl:min-h-[550px] lg:min-h-[480px] md:min-h-[420px] sm:min-h-[380px] min-h-[310px] overflow-hidden relative"
    x-data="{ shown: false, showFixed: window.scrollY > 410 }"
    x-intersect.threshold.20="shown = true"
    x-on:scroll.window="showFixed = window.scrollY > 410"
>

    <div
        class="fixed top-0 right-0 flex flex-col w-full xl:min-h-[550px] lg:min-h-[480px] md:min-h-[420px] sm:min-h-[380px] min-h-[310px]">
        <div class="flex flex-col flex-grow w-full h-full">
            <div
                class="py-14 lg:px-12 md:px-8 md:items-end relative z-10 flex items-center justify-center flex-grow w-full h-full px-4">
                <h1
                    class="lg:text-[70px] md:text-[48px] text-[36px] max-w-screen-md mx-auto text-center font-medium text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] lg:motion-delay-[1200ms] motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    {{ $title }}
                </h1>
            </div>
        </div>

        <div class="absolute inset-0 z-0">
            {{ $image }}
        </div>
        <div class="bg-opacity-40 absolute inset-0 z-0 w-full h-full bg-black"></div>
    </div>
</section>
