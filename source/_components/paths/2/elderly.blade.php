@props(['page', 'title'])

<section
    class="relative flex items-center overflow-hidden bg-[#015363]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="size-full md:px-12 md:py-12 md:gap-[42px] container relative z-10 flex flex-col gap-6 px-8 py-8 mx-auto">
        <h2
            class="2xl:text-[48px] xl:text-[36px] lg:text-[32px] text-[28px] font-medium text-start text-white"
            :class="{
                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                'invisible': !shown,
            }"
        >
            {{ $title }}
        </h2>

        <div class="xl:gap-8 md:gap-6 grid grid-cols-6 gap-4">
            <div class="md:col-span-3 order-1 col-span-6">
                <div
                    class="lg:py-6 py-3 lg:px-10 px-4 bg-[#EBEBEB] md:min-h-[218px] min-h-[160px] rounded-[14px] overflow-hidden"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:gap-6 flex gap-3">
                        <div
                            class="md:size-[62px] size-[56px] flex-shrink-0 rounded-full bg-[#015363] flex items-center justify-center">
                            <span class="text-2xl font-bold text-white">
                                01
                            </span>
                        </div>
                        <div>
                            <p
                                class="text-[#0D0D12] xl:text-[24px] lg:text-[18px] text-[16px] xl:leading-8 lg:leading-7 leading-8 font-medium">
                                السفر لمدة زمنية ومسافة طويلة يسبب الارهاق الجسدي والنفسي للحاج مما يؤثر على
                                أداء مناسكهم.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="md:col-span-3 md:order-2 order-3 col-span-6">
                <div
                    class="lg:py-6 py-3 lg:px-10 px-4 bg-[#EBEBEB] md:min-h-[218px] min-h-[160px] rounded-[14px] overflow-hidden"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1200ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:gap-6 flex gap-3">
                        <div
                            class="md:size-[62px] size-[56px] flex-shrink-0 rounded-full bg-[#015363] flex items-center justify-center">
                            <span class="text-2xl font-bold text-white">
                                03
                            </span>
                        </div>
                        <div>
                            <p
                                class="text-[#0D0D12] xl:text-[24px] lg:text-[18px] text-[16px] xl:leading-8 lg:leading-7 leading-8 font-medium">
                                افتقار بعض دورات المياه على الطرق بين أماكن العبادة الى أدوات التنظيف وكون دورات
                                المياه من أكتر الاماكن المسببة للعدوى فذلك قد يزيد نسبة تعرض كبار السن إلى
                                الأمراض والالتهابات.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="md:col-span-3 md:order-3 order-2 col-span-6">
                <div
                    class="lg:py-6 py-3 lg:px-10 px-4 bg-[#EBEBEB] md:min-h-[218px] min-h-[160px] rounded-[14px] overflow-hidden"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[900ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:gap-6 flex gap-3">
                        <div
                            class="md:size-[62px] size-[56px] flex-shrink-0 rounded-full bg-[#015363] flex items-center justify-center">
                            <span class="text-2xl font-bold text-white">
                                02
                            </span>
                        </div>
                        <div>
                            <p
                                class="text-[#0D0D12] xl:text-[24px] lg:text-[18px] text-[16px] xl:leading-8 lg:leading-7 leading-8 font-medium">
                                عدم توفر محطات استراحة بين أماكن العبادة، وهو ما يزيد من فرص تعرض الحجاج كبار السن وذوي
                                الأمراض المزمنة الى الاغماء والتعب الجسدي.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="md:col-span-3 order-4 col-span-6">
                <div
                    class="lg:py-6 py-3 lg:px-10 px-4 bg-[#EBEBEB] md:min-h-[218px] min-h-[160px] rounded-[14px] overflow-hidden"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1500ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    <div class="lg:gap-6 flex gap-3">
                        <div
                            class="md:size-[62px] size-[56px] flex-shrink-0 rounded-full bg-[#015363] flex items-center justify-center">
                            <span class="text-2xl font-bold text-white">
                                04
                            </span>
                        </div>
                        <div>
                            <p
                                class="text-[#0D0D12] xl:text-[24px] lg:text-[18px] text-[16px] xl:leading-8 lg:leading-7 leading-8 font-medium">
                                عدم تجهيز الطرق لاستيعاب العدد الهائل من الحجاج، وهو ما ينتج عنه أزمة سير خانقة تعمل على
                                تأخير الحجاج عن اداء فريضتهم. وفي حالة المرض المفاجئ قد تعطل وصول سيارة الاسعاف الى
                                الحالات الضرورية.(الرقيبة,1991)
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute inset-0 z-0">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/paths/2/elderly-section-bg-pattern.png') }}"
            alt="elderly-section-bg-pattern"
        />
    </div>
</section>
