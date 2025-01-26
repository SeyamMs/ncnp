@extends('_layouts.main')


@section('body')
    @include('_partials.path.header')


    <x-paths.main title="التحديات البيئية">
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/3/main.jpg') }}"
                alt="main"
            />
        </x-slot:image>
    </x-paths.main>


    <x-paths.right-text
        class="-mb-[84px]"
        title="نقل العدوى"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/3/infection.jpg') }}"
                alt="infection"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                يواجه الحجاج في المملكة العربية السعودية تحديًا حقيقيًا لقدراتهم الجسدية بسبب التغيرات في الطقس والنظام
                الغذائي والأنشطة البدنية ، مما يزيد من فرص تعرضهم لمخاطر صحية كبيرة واصابتهم بالأمراض ونقل العدوى للحجاج
                الاخرين . تشمل هذه المخاطر الصحية إصابات القدم ، ونقص السكر في الدم ، والسكتات الدماغية ، والجفاف ،
                والعديد من الأخطار غير المراقبة بسبب العدد المحدود من الدراسات حول المخاوف الصحية المتعلقة بالحج.
            </p>
        </div>

    </x-paths.right-text>


    <x-paths.left-text
        class="-mb-[84px]"
        title="دورات المياه"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/3/bathrooms.jpg') }}"
                alt="bathrooms"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                مع النمو السنوي لعدد الحجاج ، تحتاج إدارة الحج لمواكبة المرافق والحمامات اللازمة التي تضمن راحة ورفاهية
                الحجاج. ولكن الأهم من ذلك ، توفير مرافق كافية لعدد كبير من الحجاج. حيث يؤدي الازدحام وطوابير الانتظار
                الطويلة في المراحيض العامة إلى قيام الحجاج بعملية تنظيف متسرعة وغير فعالة ، مما يؤدي إلى انتشار
                الفيروسات والأمراض بينهم. وعلى الرغم من الجهود المبذولة للارتقاء بالخدمات المقدمة لضيوف الرحمن، إلا أنه
                لا زال هناك بعض الجوانب والتحديات التي تحتاج إلى تحسين وتطوير.
            </p>
        </div>

    </x-paths.left-text>


    <x-paths.right-text
        class="-mb-[84px]"
        title="النفايات ومخلفات ذبح الأضاحي."
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/3/waste.jpg') }}"
                alt="waste"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                يتسبب الحجاج والمعتمرين في إنتاج حوالي 15 مليون طنا من النفايات الصلبة بعد انتهاء المناسك، بمعدل يبلغ
                حوالي 1.4 كجم من النفايات للفرد في اليوم. وتحاول إدارة الحج توزيع النفايات الصلبة وإعادة تدويرها لما
                فيها من أضرار جسيمة على البيئة والصحة. ولكن مع النمو المستمر للحجاج، يتوجب على إدارة الحج تطوير تقنياتها
                لمواكبة المخلفات والنفايات مستقبليا، حيث تشير التقديرات إلى أن توليد النفايات سيزيد حتى 30 مليون طن
                بحلول عام 2033.
            </p>
        </div>

    </x-paths.right-text>


    <x-paths.left-text
        class="-mb-[84px]"
        title="إعادة تدوير الإحرامات"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/3/recycling.jpg') }}"
                alt="recycling"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                بعد أداء المناسك ورحيل الحجاج تتكدس ألاف الأطنان من نفايات الإحرامات مما يسبب التلوث ويضر بالبيئة، معظم
                الإحرام الوارد من الصين من البولى استر 100%، والذى لا يتحلل بيولوجيا ولا يعاد تدويره، فإن هذه الكميات من
                البولى استر سوف تؤدى الى مشاكل بيئية، مالم يتم التعامل مع عوادم ونفايات البولى استر بطرق لا تضر بالبيئة،
                والدراسة التالية توضح احصائيات عن عوادم المنسوجات أثناء الحج والعمرة. وهو ما يستدعي العمل على الحد من
                تكدسها والتخلص منها بشكل آمن يحافظ على البيئة ويمنع التلوث والأمراض، بل والاستفادة من هذه النفايات
                اقتصاديا من خلال إعادة تدويرها.

            </p>
        </div>

    </x-paths.left-text>
@endsection
