@php
    $paths = [
        [
            'title' => 'ما هو تحدي الابتكار في خدمة ضيوف الرحمن ؟',
            'answer' =>
                'هو حدث وطني يهدف إلى تحفيز التفكير الابتكاري واستقطاب الأفكار المبدعة لحل التحديات التي تواجه قطاع ضيوف الرحمن.',
        ],
        [
            'title' => 'ما هي أهداف التحدي؟',
            'answer' =>
                'تقوم الهيئة بمهمة تنظيم نشاط الكهرباء ويشمل ذلك توليد الكهرباء والإنتاج المزدوج من أي مصدر من مصادر الطاقة، ونقل الكهرباء، وتوزيعها، والمتاجرة بها، وبيعها بالتجزئة، ونشاط المشتري الرئيس، وتبريد المناطق. وينص التنظيم على أن تقوم الهيئة بتنظيم الخدمات والإشراف عليها في نطاق اختصاصها ومراقبة أدائها، والتنسيق فيما بين المؤسسات والجهات ذات العلاقة وبين الأشخاص المرخص لهم، لوضع الإطار التنظيمي والإجرائي اللازم لضمان مزاولة أنشطة الخدمات عند مستويات جودة وموثوقية عالية وتوفيرها للمستهلك بأسعار تنافسية معقولة تحقق العدالة بين المستهلكين.',
        ],
        [
            'title' => 'ما هي اللغة المستخدمة في التحدي؟',
            'answer' => 'اللغة العربية.',
        ],
        [
            'title' => 'ما هي خطوات التسجيل في التحدي؟',
            'answer' =>
                'يهدف الكتراثون إلى العمل على رصد التحديات التي تواجه قطاع الكهرباء في المملكة، وإبراز وإشراك أفراد المجتمع لإبتكار حلول ذات طابع استثماري للتحديات، وأخيرًا إيجاد شركات استثمارية متنوعة ومستدامة.',
        ],
        [
            'title' =>
                'لدي حل وفكرة ابتكارية تخدم قطاع ضيوف الرحمن من خارج المسارات والتحديات المذكورة في المنصة، هل يمكنني المشاركة ؟',
            'answer' =>
                'بإمكانك التسجيل في الإلكتراثون  بعد الاطلاع على المسارات والتحديات الموجودة على المنصة، ثم بعد ذلك اختيار التحدي الذي تود المشاركة فيه، ثم تقديم حلك المبتكر بعد إضافة بيانات التواصل الخاص بك.',
        ],
        [
            'title' => 'هل يتطلب وجود فريق؟ وكم العدد المسموح لأعضاء الفريق الواحد؟',
            'answer' => 'نعم بالطبع، بإمكانك المشاركة بطرح فكرة جديدة ومبتكرة تخدم مجالًا غير موجود في الإلكتراثون.',
        ],
        [
            'title' => 'هل بإمكاني التسجيل في جميع المسارات؟',
            'answer' => 'نعم، يمكنك التسجيل بأكثر من مسار، ولكن ستشارك بفكرة واحدة في حال تم ترشيحك.',
        ],
        [
            'title' => 'هل يمكن تغيير أعضاء الفريق بعد التسجيل؟',
            'answer' =>
                'يمكنك المشاركة في التحدي كفرد، ولكن بعد ترشح فكرتك لإلكتراثون لا بد من تكوين فريق من شخصين لذات الفكرة للمشاركة في الإلكتراثون.',
        ],
        [
            'title' => 'هل توجد رسوم تسجيل في التحدي؟',
            'answer' => 'لا، لا توجد رسوم تسجيل.',
        ],
        [
            'title' => 'هل يُشترط للاشتراك في التحدي العمل في جمعية أهلية؟',
            'answer' => 'لا، لا يُشترط.',
        ],
    ];
@endphp

<section
    class="relative flex items-center overflow-hidden bg-[#015363]"
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
                    الاسئلة الشائعة
                </h2>

                <div class="md:gap-8 grid grid-cols-6 gap-4">

                    @foreach ($paths as $index => $path)
                        <div class="md:col-span-3 col-span-6">
                            <div
                                class="rounded-3xl bg-[#FFFFFFCC] overflow-hidden"
                                x-data="{ open: false }"
                                :class="{
                                    '!bg-[#FFFFFF]': open,
                                    'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[{{ $loop->iteration * 100 + 300 }}ms]': shown,
                                    'invisible': !shown,
                                }"
                            >
                                <div
                                    class="md:px-8 md:py-6 md:gap-8 flex items-center justify-between gap-4 px-4 py-3 cursor-pointer"
                                    x-on:click="open = !open"
                                >
                                    <h3
                                        class="text-[#1B1B1B] lg:text-[26px] md:text-[20px] text-[16px] font-medium text-start">
                                        {!! $path['title'] !!}
                                    </h3>
                                    <div
                                        class="flex-shrink-0 p-4 transition-all duration-150"
                                        :class="{ 'transform rotate-45': open }"
                                    >
                                        <img
                                            src="{{ $page->asset('images/icons/plus.svg') }}"
                                            alt="plus"
                                        />
                                    </div>
                                </div>
                                <div
                                    class="md:px-8 md:py-4 px-4 py-2"
                                    x-cloak
                                    x-collapse
                                    x-show="open"
                                >
                                    <p class="md:text-lg text-base font-bold">
                                        {!! $path['answer'] !!}
                                    </p>
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
            src="{{ $page->asset('images/faqs-section-bg-pattern.png') }}"
            alt="faqs-section-bg-pattern"
        />
    </div>
</section>
