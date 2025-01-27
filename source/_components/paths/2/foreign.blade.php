@props(['page', 'title'])

<section
    class="relative flex items-center overflow-hidden bg-[#015363]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="size-full md:px-12 md:py-12 md:gap-[42px] container relative z-10 flex flex-col gap-6 px-8 py-8 mx-auto">
        <div class="flex flex-col gap-2">
            <h2
                class="2xl:text-[48px] xl:text-[36px] lg:text-[32px] text-[28px] font-medium text-start text-white"
                :class="{
                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                    'invisible': !shown,
                }"
            >
                {{ $title }}
            </h2>
            <p
                class="max-w-[972px] text-white md:text-[18px] text-[16px] font-medium"
                :class="{
                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[500ms]': shown,
                    'invisible': !shown,
                }"
            >
                يشكل التواصل مع الركاب استراتيجية حيوية وهامة في إدارة منظومة النقل تجربة النقل، ولكن بالنسبة للحجاج
                الأجانب قد يكون الأمر أصعب, ليس كل الحجاج يتمكنون من فهم اللغة العربية مما يتسبب في:
            </p>
        </div>

        <div class="xl:gap-8 md:gap-6 grid grid-cols-6 gap-4">
            <div class="md:col-span-3 col-span-6">
                <div
                    class="lg:py-6 py-3 lg:px-10 px-4 bg-[#EBEBEB] md:min-h-[218px] min-h-[160px] rounded-[14px] overflow-hidden"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[800ms]': shown,
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
                                صعوبة كبيرة في تنظيم الحشود خاصة أثناء التنقل وتوزيع الحجاج على وسائل النقل، وهو ما قد
                                يؤدي الى ضياع الحجاج الاجانب.
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="md:col-span-3 col-span-6">
                <div
                    class="lg:py-6 py-3 lg:px-10 px-4 bg-[#EBEBEB] md:min-h-[218px] min-h-[160px] rounded-[14px] overflow-hidden"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[1100ms]': shown,
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
                                اختلاف الأيديولوجيات والخلفيات الاجتماعية، فإذا لم يتم اعطاء إرشادات كافية عن ثقافة
                                المجتمع العربي، قد تؤثر تجربة الحجاج الأجانب على تجربة التنقل في المواصلات لجميع الحجاج.
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
            src="{{ $page->asset('images/paths/2/foreign-section-bg-pattern.png') }}"
            alt="foreign-section-bg-pattern"
        />
    </div>
</section>
