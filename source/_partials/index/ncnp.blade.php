<section
    class="relative flex items-center overflow-hidden bg-[#015363]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-[84px] md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="container mx-auto">
            <div class="flex flex-col items-center justify-center h-full">
                <div
                    class="mb-14 h-32"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <img
                        class="object-scale-down w-full h-full"
                        src="{{ $page->asset('images/ncnp-logo-white.svg') }}"
                        alt="ncnp-logo-white"
                    />
                </div>

                <div class="gap-9 flex flex-col max-w-[1024px] mx-auto mb-12">
                    <p
                        class="lg:text-[24px] md:text-[22px] text-[16px] font-medium text-white text-center"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        أنشئ المركز الوطني لتنمية القطاع غير الربحي بقرار مجلس الوزراء رقم (459) وتاريخ 11/8/1440 هجري،
                        حيث
                        يتمتع المركز بالشخصية الاعتبارية، والاستقلال المالي والإداري، ويرتبط مباشرة برئيس مجلس الوزراء.
                    </p>

                    <p
                        class="lg:text-[24px] md:text-[22px] text-[16px] font-medium text-white text-center"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[900ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        ويهدف المركز الوطني لتنمية القطاع غير الربحي إلى تنظيم دور منظمات القطاع غير الربحي وتفعيله،
                        وتوسيعه
                        في المجالات التنموية، والعمل على تكامل الجهود الحكومية في تقديم خدمات الترخيص لتلك المنظمات،
                        والإشراف المالي والإداري على القطاع، وزيادة التنسيق والدعم.
                    </p>

                    <p
                        class="lg:text-[24px] md:text-[22px] text-[16px] font-medium text-white text-center"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1200ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        تأسس المركز في سياق تنمية القطاع غير الربحي، الذي يعد هدفًا إستراتيجيًّا ضمن خطة رؤية 2030
                        الهادفة
                        إلى تمكين القطاع غير الربحي، وتحقيق أثر أعظم للقطاع على الصعيدين الاجتماعي والاقتصادي، حيث يُعد
                        المركز أحد مبادرات برنامج التحول الوطني لتنمية القطاع غير الربحي.
                    </p>
                </div>

                <div class="flex items-center h-20">
                    <a
                        class="lg:text-2xl text-lg group hover:ring-8 hover:ring-opacity-60 hover:ring-white font-medium rounded-full flex items-center justify-center py-2 px-6 h-16 hover:px-20 bg-white text-[#0D0D12]"
                        href="http://sera.gov.sa/ar/"
                        target="_blank"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1500ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        <span class="px-6">
                            اعرف المزيد
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 z-0">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/ncnp-section-bg.jpg') }}"
            alt="ncnp-section-bg"
        />
    </div>
    <div class="absolute inset-0 z-0">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/ncnp-section-bg-pattern.png') }}"
            alt="ncnp-section-bg-pattern"
        />
    </div>

</section>
