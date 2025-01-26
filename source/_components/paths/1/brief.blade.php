@props(['page', 'title', 'image'])

<section
    class="relative flex items-center overflow-hidden bg-[#015363]"
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative w-full h-full md:px-8 px-4 md:py-[84px] py-16 mx-auto">
        <div class="xl:gap-16 md:gap-12 grid grid-cols-7 gap-8">
            <div class="md:col-span-4 col-span-7">
                <div class="md:gap-16 xl:pl-6 lg:pl-6 relative z-30 flex items-center h-full gap-6">
                    <div
                        class="md:px-10 px-6 md:py-6 flex-col flex gap-10 flex-grow py-4 bg-[#FFFFFF]/15 rounded-[14px] overflow-hidden"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        <h2
                            class="2xl:text-[48px] xl:text-[36px] lg:text-[32px] text-[28px] font-bold text-center text-white"
                            :class="{
                                'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                                'invisible': !shown,
                            }"
                        >
                            {{ $title }}
                        </h2>

                        {{ $slot }}
                    </div>
                </div>
            </div>

            <div class="md:col-span-3 flex-grow col-span-7">
                <div class="rounded-3xl relative w-full h-full max-h-[700px] overflow-hidden">
                    <div
                        class="rounded-3xl relative w-full h-full overflow-hidden"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[900ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        {{ $image }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute inset-0 z-0">
        <img
            class="object-cover object-center w-full h-full"
            src="{{ $page->asset('images/paths/1/brief-section-bg-pattern.png') }}"
            alt="brief-section-bg-pattern"
        />
    </div>
</section>
