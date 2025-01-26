<section
    class="bg-primary-950 relative flex flex-col items-center h-screen overflow-hidden"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="py-14 lg:px-12 md:px-8 relative z-10 w-full h-full px-4">
        <div class="container h-full mx-auto">
            <div class="flex flex-col items-start justify-end h-full">
                <div
                    class="mb-6"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] lg:motion-delay-[1200ms] motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <img
                        class="md:block hidden object-scale-down w-full h-full"
                        src="{{ $page->asset('images/ncnp-logo-white.svg') }}"
                        alt="ncnp-logo-white"
                    />
                    <img
                        class="md:hidden block object-scale-down w-full h-full contrast-[5] brightness-[5]"
                        src="{{ $page->asset('images/maoon-icon-white.svg') }}"
                        alt="maoon-icon-white"
                    />
                </div>

                <h1
                    class="lg:text-[72px] md:text-[52px] text-[46px] mb-8 font-bold text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] lg:motion-delay-[1500ms] motion-delay-[900ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    تحدي الابتكار
                </h1>

                <p
                    class="lg:text-4xl max-w-[545px] text-lg font-normal leading-10 text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] lg:motion-delay-[1600ms] motion-delay-[1000ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    لمنظمات القطاع غير الربحي ابتكر في خدمات ومنتجات ضيوف الرحمن
                </p>

            </div>
        </div>
    </div>


    <div class="absolute top-0 left-0 z-0 w-full h-full">
        <video
            class="object-cover w-full h-full"
            poster="{{ $page->asset('videos/main-section.jpg') }}"
            autoplay
            playsinline
            muted
            loop
        >
            <source
                src="{{ $page->asset('videos/main-section.mp4') }}"
                type="video/mp4"
            />
        </video>
    </div>
    <div class="bg-opacity-20 absolute inset-0 z-0 w-full h-full bg-black"></div>
</section>
