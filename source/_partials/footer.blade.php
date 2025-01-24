<section
    class="relative overflow-hidden bg-white"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative z-10 px-2 pt-12 pb-6 mx-auto overflow-hidden">
        <div class="flex flex-col gap-12">
            <div class="md:gap-12 lg:gap-16 flex flex-wrap items-center justify-center gap-6">

                <div
                    class="h-28 flex items-center justify-center flex-shrink-0 p-4"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-ease-spring-smooth motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <img
                        class="contrast-[5] brightness-[5] object-scale-down w-full h-full"
                        src="{{ $page->asset('images/ncnp-logo-white.svg') }}"
                        alt="ncnp-logo-white"
                    />
                </div>


            </div>

            <div class="flex flex-col gap-6">
                <div
                    class="h-px w-full bg-[#ffffff20]"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-ease-spring-smooth motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                ></div>

                <p
                    class="text-sm text-center text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-ease-spring-smooth motion-delay-[700ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    جميع الحقوق محفوظة &copy;
                    <span
                        x-data
                        x-text="new Date().getFullYear()"
                    ></span>
                </p>
            </div>
        </div>
    </div>

    <div class="bg-opacity-10 absolute top-0 left-0 z-0 w-full h-full">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/footer-section-bg.jpg') }}"
            alt="footer-section-bg"
        />
    </div>
</section>
