<section
    class="relative flex items-center overflow-hidden bg-[#015363]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-16 md:py-14 relative z-10 w-full h-full px-4 py-12">
        <div class="container mx-auto">
            <div class="md:gap-14 flex flex-col gap-8">

                <h2
                    class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    معايير التقييم
                </h2>

                <div class="xl:gap-32 lg:gap-24 md:gap-16 flex items-center justify-center gap-6 py-[22px]">
                    <div class="xl:gap-9 flex flex-col items-center gap-6">
                        <div
                            class="bg-white xl:size-28 p-2 flex-shrink-0 lg:size-24 md:size-20 size-18 rounded-[40px] flex items-center justify-center"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            <img
                                src="{{ $page->asset('images/icons/lamp-on.svg') }}"
                                alt="lamp-on"
                            />
                        </div>
                        <h3
                            class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-lg flex-shrink-0 text-base font-medium text-center text-white"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[800ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            الأثر المتوقع
                        </h3>
                    </div>

                    <div class="xl:gap-9 flex flex-col items-center gap-6">
                        <div
                            class="bg-white xl:size-28 p-2 flex-shrink-0 lg:size-24 md:size-20 size-18 rounded-[40px] flex items-center justify-center"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1100ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            <img
                                src="{{ $page->asset('images/icons/status-up.svg') }}"
                                alt="status-up"
                            />
                        </div>
                        <h3
                            class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-lg flex-shrink-0 text-base font-medium text-center text-white"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1300ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            الأثر الاقتصادي
                        </h3>
                    </div>

                    <div class="xl:gap-9 flex flex-col items-center gap-6">
                        <div
                            class="bg-white xl:size-28 p-2 flex-shrink-0 lg:size-24 md:size-20 size-18 rounded-[40px] flex items-center justify-center"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1600ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            <img
                                src="{{ $page->asset('images/icons/profile-user.svg') }}"
                                alt="profile-user"
                            />
                        </div>
                        <h3
                            class="xl:text-4xl lg:text-3xl md:text-2xl sm:text-lg flex-shrink-0 text-base font-medium text-center text-white"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1800ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            الفريق والفكرة
                        </h3>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 z-0">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/aspects-section-bg-pattern.png') }}"
            alt="aspects-section-bg-pattern"
        />
    </div>
</section>
