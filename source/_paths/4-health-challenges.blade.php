@extends('_layouts.main')


@section('body')
    @include('_partials.path.header')


    <x-paths.main title="التحديات الصحية">
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('/images/paths/4/main.jpg') }}"
                alt="main"
            />
        </x-slot:image>
    </x-paths.main>


    <x-paths.right-text
        class="-mb-[84px]"
        title="الإصابة بضربات الشمس"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('/images/paths/4/sunstroke.jpg') }}"
                alt="sunstroke"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                يصاب العديد من الحجاج والمعتمرين بضربات الشمس نتيجة للارتفـاع الشـديد فـي درجـة حـرارة الجسـم بسـبب التعـرض
                لحـرارة الشـمس العاليـة ولفتـرة طويلـة، حيـث قـد تصـل حـرارة ً الجســم إلــى أكثــر مــن أربعيــن درجــة
                مئويــة، وهــي درجــة خطيــرة جــدا لا تتحملهــا أجهــزة الجســم، ويرافــق ذلــك صــداع ودوار، كمـا يصـاب
                الجسـم بالجفـاف واحمـرار الجلـد وإذا لـم تخفـض الحـرارة سيشـعر المصـاب بإغمـاء وألـم بطنـي، وقـد يتقيـأ
                ويصـاب بإسـهال، وإذا زادت الحالـة قـد يحـدث اضطـراب فـي وظيفـة القلـب وتشـنجات أو اختلاجـات عصبيـة، وربمـا
                ينتهـي الأمـر بالوفـاة. (وزارة الصحة، 2017).
            </p>
        </div>

    </x-paths.right-text>


    <x-paths.left-text
        class="-mb-[84px]"
        title="إصابات القدم"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('/images/paths/4/foot-injuries.jpg') }}"
                alt="foot-injuries"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                تحتاج إصابات القدم إلى رعاية صحية، وخاصةً لأصحاب الأمراض المزمنة وكبار السن، وقد وفرت المملكة العديد من
                الخدمات الصحية والتي تمثلت في مرافق ومستشفيات وفرق اسعافات أولية، ونحوها، لخدمة 899.353 حاج للعام 1443
                (الهيئة العامة للإحصاء، 2022).
            </p>
        </div>

    </x-paths.left-text>


    <x-paths.right-text
        class="-mb-[84px]"
        title="التسلخات والالتهابات الجلدية"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('/images/paths/4/abrasions.jpg') }}"
                alt="abrasions"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                ​يصاب الحجاج والمعتمرين ببعــض أنــواع الأمراض والمشــاكل الجلدية خلال موســم الحــج أو العمــرة بســبب
                ارتفــاع حــرارة الجــو والازدحــام الشــديد، فضلاً عــن زيــادة التعـرق وارتفــاع نســبة الرطوبــة وكثــرة
                التعــرض لأشــعة الشــمس خلال أداء المناسـك.
            </p>
        </div>

    </x-paths.right-text>


    <x-paths.left-text
        class="-mb-[84px]"
        title="الاحتياجات النسائية"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('/images/paths/4/womens-needs.jpg') }}"
                alt="womens-needs"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                هي الاحتياجات المرتبطة بالنساء والتي قد تختلف باختلاف ظروفهن، مثل: الحامل، والمرضع، والمصاحبة لطفل صغير،
                وذات الإعاقة وكبيرة السن.
            </p>
        </div>

    </x-paths.left-text>


    <x-paths.right-text
        class="-mb-[84px]"
        title="الحلاقة في الحج"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('/images/paths/4/shaving.jpg') }}"
                alt="shaving"
            />
        </x-slot:image>


        <div class="max-w-none prose">
            <p class="text-[#1B1B1B] xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                يواجه بعض ضيوف الرحمن خطر الإصابة بعدد من الأمراض المعدية التي تنتقل عن طريق الدم، وكذلك الأمراض الجلدية،
                نتيجة لاتباعهم بعض الطرق الخاطئة في الحلاقة والتقصير، ومشاركة أدوات الحلاقة مع آخرين.
            </p>
        </div>

    </x-paths.right-text>
@endsection
