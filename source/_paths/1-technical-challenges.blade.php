@extends('_layouts.main')


@section('body')
    @include('_partials.path.header')


    <x-paths.main title="التحديات التقنية">
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/1/main.jpg') }}"
                alt="main"
            />
        </x-slot:image>
    </x-paths.main>


    <x-paths.1.brief
        title="التحديات التي تواجه الحجاج​"
        :$page
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/1/brief.jpg') }}"
                alt="brief"
            />
        </x-slot:image>

        <div class="max-w-none prose">
            <p class="text-white xl:text-[24px] lg:text-[18px] text-[14px] leading-8 font-medium">
                يحتاج الحجاج أثناء رحلتهم الدينية إلى الطعام والشراب والملابس، بالإضافة الى الإقامة في الفنادق والخيم
                والتنقل بين المشاعر الدينية. وجميع الخدمات السابقة تتطلب من الحجاج دفع مبلغ نقدي من اجل الحصول عليها .
                تشكّل الخدمات المصرفية والمالية السعودية جزءاً مهماً وحيوياً ضمن المنظومة الخدمية المتكاملة التي توفرها
                المملكة في مواسم الحج والعمرة لزوار بيت الله الحرام في كل من مكة المكرمة والمدينة المنورة.
            </p>
        </div>
    </x-paths.1.brief>


    <x-paths.left-text
        class="-mb-[84px]"
        title="التحديات التي تواجه الحجاج​"
    >
        <x-slot:image>
            <img
                class="object-cover object-center w-full h-full"
                src="{{ $page->asset('images/paths/1/challenges.jpg') }}"
                alt="challenges"
            />
        </x-slot:image>

        <div class="prose">
            <ol
                class="font-medium xl:text-[24px] lg:text-[18px] text-[14px] leading-8 text-[#1B1B1B] marker:text-[#1B1B1B] marker:font-medium">
                <li class="m-0">
                    قلة عدد المصارف الالية للحجاج في أماكن العبادة​
                </li>
                <li class="m-0">
                    قلة عدد محلات صرافة العملة.
                </li>
                <li class="m-0">
                    تأخر الحجاج بسبب الدور الطويل.
                </li>
                <li class="m-0">
                    استغلال الحجاج الأجانب بسبب حاجز اللغة واعطائهم أسعار صرف ليست حقيقية.
                </li>
                <li class="m-0">
                    انتشار العدوى بين الحجاج بسبب الازدحام.
                </li>
                <li class="m-0">
                    أسعار التحويل العالية في العملات في البنوك.
                </li>
            </ol>
        </div>
    </x-paths.left-text>
@endsection
