@php
    $paths = [
        [
            'title' => 'المجال التقني',
            'image' => 'images/paths-1.jpg',
            'description' =>
                'يُركز هذا المسار على تقديم حلول رقمية وتقنيات ذكية لتحسين تجربة ضيوف الرحمن. يشمل ذلك تطوير تطبيقات لإدارة الخدمات، تقنيات الذكاء الاصطناعي لتحسين الكفاءة، ومنصات تسهل الوصول إلى الخدمات بشكل متكامل وسلس.',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => 'paths/1-technical-challenges',
        ],
        [
            'title' => 'المجال اللوجستي',
            'image' => 'images/paths-2.jpg',
            'description' =>
                'يُعنى هذا المسار بتطوير أدوات وتقنيات تسهّل إرشاد وتوجيه ضيوف الرحمن خلال رحلتهم. يركز على تحسين نظم الإرشاد المتعددة اللغات، تصميم خرائط تفاعلية، وتقديم خدمات إرشادية رقمية تساعد في توجيه الحجاج بأمان وكفاءة.',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => 'paths/2-logistical-challenges',
        ],
        [
            'title' => 'المجال البيئي',
            'image' => 'images/paths-3.jpg',
            'description' =>
                'يركز هذا المسار على تقديم حلول مبتكرة لتحقيق الاستدامة البيئية في المشاعر المقدسة ومرافق خدمة ضيوف الرحمن. يشمل ذلك تقليل النفايات، ترشيد استهلاك الموارد مثل المياه والطاقة، وتحسين إدارة النفايات وإعادة التدوير لضمان بيئة نظيفة ومستدامة.',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => 'paths/3-environmental-challenges',
        ],
        [
            'title' => 'المجال الصحي',
            'image' => 'images/paths-4.jpg',
            'description' =>
                'يُعنى هذا المسار بتطوير أدوات وتقنيات تسهّل إرشاد وتوجيه ضيوف الرحمن خلال رحلتهم. يركز على تحسين نظم الإرشاد المتعددة اللغات، تصميم خرائط تفاعلية، وتقديم خدمات إرشادية رقمية تساعد في توجيه الحجاج بأمان وكفاءة. ويقدم بتوفير خدمات متنوعة مثل الإسكان، والإعاشة، والنظافة، والصيانة، وخدمات الاستقبال والمساعدة بشكل عام أثناء رحلة الحج والعمرة.',
            'col_class' => '',
            'wrapper_class' => '',
            'link' => 'paths/4-health-challenges',
        ],
    ];
@endphp

<section
    class="relative flex items-center overflow-hidden bg-[#015363]"
    id="paths-section"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="lg:px-12 md:px-8 lg:py-20 md:py-16 relative z-10 w-full h-full px-4 py-12">
        <div class="container mx-auto">
            <div class="md:gap-14 flex flex-col gap-8">

                <h2
                    class="lg:text-[48px] md:text-[32px] text-[28px] text-center font-medium text-white"
                    :class="{
                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                        'invisible': !shown,
                    }"
                >
                    المسارات والتحديات
                </h2>

                <div class="grid grid-cols-6 gap-6">

                    @foreach ($paths as $index => $path)
                        <div class="lg:col-span-3 col-span-6 {{ $path['col_class'] }}">
                            <div
                                class="group bg-[#FFFFFF15] hover:bg-[#04313985] transition-all duration-300 rounded-3xl flex flex-col h-full overflow-hidden md:pt-8 pt-4 md:pb-[76px] pb-[38px] {{ $path['wrapper_class'] }}"
                                :class="{
                                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 300 }}ms]': shown,
                                    'invisible': !shown,
                                }"
                            >
                                <h3
                                    class="text-white lg:text-[36px] md:text-[32px] text-[28px] leading-[50px] font-bold text-center"
                                    :class="{
                                        'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 500 }}ms]': shown,
                                        'invisible': !shown,
                                    }"
                                >
                                    {!! $path['title'] !!}
                                </h3>
                                <div class="md:px-8 md:py-10 w-full px-4 py-6 mx-auto">
                                    <div
                                        class="w-full flex aspect-[592/290] h-full mx-auto rounded-[33px] overflow-hidden"
                                        :class="{
                                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 700 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    >
                                        <img
                                            class="object-cover object-center w-full h-full"
                                            src="{{ $page->asset($path['image']) }}"
                                            alt="{{ str($path['image'])->before('.')->after('/') }}"
                                        />
                                    </div>
                                </div>
                                <div class="md:gap-8 md:px-8 md:pt-8 md:pb-10 flex flex-col gap-4 px-4 pt-2">

                                    <p
                                        class="md:text-xl md:leading-8 text-lg font-medium leading-7 text-justify text-white"
                                        :class="{
                                            'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 1000 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    >
                                        {{ $path['description'] }}
                                    </p>

                                    <div
                                        class="flex"
                                        :class="{
                                            'motion-preset-fade motion-translate-x-in-[40px] motion-delay-[{{ $loop->iteration * 300 + 1300 }}ms]': shown,
                                            'invisible': !shown,
                                        }"
                                    >
                                        <a
                                            class="hover:bg-white hover:text-black flex items-center px-4 py-2 text-white border border-white rounded-full"
                                            href="{{ $page->asset($path['link']) }}"
                                        >
                                            <span class="text-lg font-normal">
                                                رؤية المزيد
                                            </span>
                                            <svg
                                                class="size-6 stroke-current"
                                                viewBox="0 0 24 25"
                                                fill="none"
                                                xmlns="http://www.w3.org/2000/svg"
                                            >
                                                <path
                                                    d="M17 17.2715L7 7.27148M7 7.27148V17.2715M7 7.27148H17"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 z-0">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/paths-section-bg-pattern.png') }}"
            alt="paths-section-bg-pattern"
        />
    </div>
</section>
