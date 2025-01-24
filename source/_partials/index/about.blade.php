<section
    class="relative flex items-center overflow-hidden bg-white"
    id="about-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative w-full h-full px-4 py-12">
        <div class="container mx-auto">
            <div class="md:gap-16 grid grid-cols-6 gap-12">
                <div class="md:col-span-3 col-span-6">
                    <div class="relative z-30 flex flex-col gap-20">
                        <div class="flex flex-col gap-8">
                            <h2
                                class="lg:text-[48px] md:text-[32px] text-[28px] font-medium text-[#1A1A1A]"
                                :class="{
                                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                                    'invisible': !shown,
                                }"
                            >
                                عن التحدي
                            </h2>

                            <div class="flex flex-col gap-4">
                                <p
                                    class="lg:text-[36px] md:text-[28px] text-[24px] font-medium max-w-[620px] tracking-[-.025rem] text-[#1A1A1A]"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    تحدي الابتكار للقطاع غير الربحي يهدف إلى تحفيز الابتكار واستقطاب حلول مبتكرة لتحسين
                                    تجربة ضيوف الرحمن وتعزيز استدامة المنظمات غير الربحية، مع إحداث أثر اجتماعي مستدام
                                    عبر
                                    مراحل مدروسة.
                                </p>
                            </div>
                        </div>

                        <div class="h-[68px]">
                            <button
                                class="lg:text-2xl group hover:bg-gray-100 hover:ring-8 hover:ring-opacity-60 hover:ring-gray-300 hover:px-16 hover:text-black inline-flex items-center justify-center h-[68px] p-1.5 text-lg font-medium text-white bg-black rounded-full"
                                data-tf-popup="Z2f34azw"
                                :class="{
                                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[900ms]': shown,
                                    'invisible': !shown,
                                }"
                            >
                                <span class="px-2">
                                    سجل الان
                                </span>
                                <div
                                    class="group-hover:hidden flex items-center justify-center size-[52px] rounded-full bg-[#F5F9FA]">
                                    <img
                                        src="{{ $page->asset('images/icons/lamp-dark.svg') }}"
                                        alt="lamp-dark"
                                    />
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="md:col-span-3 md:block flex-grow hidden col-span-6">
                    <div
                        class="rounded-3xl relative w-full h-full aspect-[660/502] pt-1 bg-[#F2F2F2] overflow-hidden"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1200ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        <div
                            class="absolute top-0 left-0 z-10 w-[255px] h-[124px]"
                            :class="{
                                'motion-preset-fade -motion-translate-x-in-[40px] motion-delay-[1500ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            <img
                                class="object-cover object-left-top w-full h-full"
                                src="{{ $page->asset('images/saudi-flag.png') }}"
                                alt="saudi-flag"
                            />
                        </div>
                        <div class="rounded-3xl relative w-full h-full overflow-hidden">
                            <div class="absolute top-0 left-0 z-0 w-full h-full">
                                <img
                                    class="object-scale-down object-center w-full h-full"
                                    src="{{ $page->asset('images/ncnp-logo.svg') }}"
                                    alt="ncnp-logo"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
