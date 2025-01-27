@extends('_layouts.main')


@section('body')
    @include('_partials.path.header')


    <x-paths.main title="التحديات اللوجستية">
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/2/main.jpg') }}"
                alt="main"
            />
        </x-slot:image>
    </x-paths.main>


    <x-paths.right-text
        class="-mb-[84px]"
        title="سقيا المياه"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/2/watering.jpg') }}"
                alt="watering"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                يشهد موسم الحج ارتفاعًا كبيرًا في درجات الحرارة، وهو ما يستدعي توفير ملايين العبوات من المياه الآمنة
                والنظيفة، وتوفير البرادات لتروي عطش الحجاج وتعينهم على أداء المناسك. وقد دفع هذا الأمر الجمعيات الخيرية إلى
                عمل برامج سقيا الماء بهدف توزيعها على ضيوف الرحمن بالمشاعر المقدسة خلال أداء مناسك الحج. تلك البرامج تصاحبها
                حملات تبرعات مكثفة في جميع منصات التواصل الاجتماعي لتحفيز الراغبين في عمل الخير علي تقديم المساهمات
                والتبرعات لبرامج سقيا الماء.
            </p>
        </div>

    </x-paths.right-text>


    <x-paths.left-text
        class="-mb-[84px]"
        title="الاعاشة"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/2/livelihood.jpg') }}"
                alt="livelihood"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                هناك بعض التحديات التي تواجه الحجاج في الاعاشة ، يأتي على رأسها انتشار الامراض بسبب عدم جودة التوزيع, وتكلفة
                النقل والتنظيم التي تزيد من سعر الوجبات المقدمة، وعدم وجود منظومة موحدة لعملية التوزيع. ومن تلك التحديات:
            </p>
            <ul class="text-[#1B1B1B] xl:text-[18px] lg:text-[14px] text-[12px] leading-6 font-medium">
                <li class="m-0">
                    عدم وجود شركات كافية تقدم الإعاشة والتموين بكفاءة عالية.
                </li>
                <li class="m-0">
                    الحاجة إلى التنوع في تقديم الوجبات للحجاج والمعتمرين بما يتلاءم مع احتياجاتهم الغذائية.
                </li>
                <li class="m-0">
                    ازدحام الحجاج على الطعام مما يؤدي الى التدافع وانتشار الامراض.
                </li>
                <li class="m-0">
                    عدم اتباع بروتوكولات الصحة والجودة العالمية.
                </li>
                <li class="m-0">
                    تكلفة النقل والتنظيم التي تزيد من سعر الوجبات المقدمة.
                </li>
                <li class="m-0">
                    الحفاظ على جودة الوجبات.
                </li>
                <li class="m-0">
                    عدم توفير خيارات نباتية.
                </li>
            </ul>
        </div>

    </x-paths.left-text>


    <x-paths.right-text title="التوزيع الخيري">
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/2/charity.jpg') }}"
                alt="charity"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                هناك العديد من التحديات التي تواجه الحجاج أثناء استلامهم للتوزيع الخيري في المشاعر المقدسة، يأتي على رأسها
                انتشار الامراض بسبب عدم جودة الوجبات، وعدم وجود نظام في التوزيع والاندفاع بسبب الاعداد الهائلة. وتؤدي
                العشوائية وعدم التنظيم والترتيب الفاعل للتوزيع الخيري الى إفقاد المبادرات غايتها الطيبة التي يسعى اليها
                فاعلوها، كما تؤدي إلى إيذاء الحجاج. وتتمثل تلك التحديات في:-
            </p>

            <ul
                class="text-[#1B1B1B] xl:text-[18px] lg:text-[14px] text-[12px] leading-6 font-medium marker:text-[#1B1B1B] marker:font-medium">
                <li class="m-0">
                    غياب العمل المؤسسي، ومحدودية الشركات العاملة بالمجال.
                </li>
                <li class="m-0">
                    عدم توفر نظام موحد لتخلص من المخلفات وإعادة تدويرها.
                </li>
                <li class="m-0">
                    قلة ونقص عدد العاملين والمتطوعين مقارنة بأعداد الحجاج.
                </li>
                <li class="m-0">
                    عدم وجود تعاقد بين البعثات وشركات السياحة الخارجية مع شركات الاعاشة والتغذية لتقديم خدماتها في الحج
                    والعمرة.
                </li>
                <li class="m-0">
                    قلة المؤسسات في مجال مساعدة ذوي الاحتياجات الخاصة.
                </li>
            </ul>
        </div>

    </x-paths.right-text>


    <x-paths.2.elderly
        title="تحديات تنقل الحجاج من كبار السن​"
        :$page
    />

    <x-paths.2.disabilities title="تحديات التنقل للحجاج من ذوي الاعاقة" />

    <x-paths.2.foreign
        title="تحديات تنقل الحجاج الاجانب​"
        :$page
    />

    <x-paths.2.children title="تحديات التنقل للحجاج مصطحبين الاطفال​" />
@endsection
