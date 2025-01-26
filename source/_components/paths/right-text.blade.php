@props(['page', 'title', 'image'])

<section
    {{ $attributes->merge(['class' => 'relative flex items-center overflow-hidden bg-white']) }}
    x-data="{ shown: false }"
    x-intersect.threshold.20="shown = true"
>
    <div class="container relative size-full md:px-8 px-4 md:py-[84px] py-16 mx-auto">
        <div class="xl:gap-16 md:gap-12 grid grid-cols-7 gap-6">
            <div class="md:col-span-4 col-span-7">
                <div class="md:gap-10 relative z-30 flex flex-col h-full gap-6">
                    <h2
                        class="xl:text-[48px] lg:text-[36px] text-[28px] font-medium text-[#1A1A1A]"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[300ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        {{ $title }}
                    </h2>

                    <div
                        class="md:px-10 px-6 md:py-6 flex-grow py-4 bg-[#EBEBEBCC] rounded-[14px] overflow-hidden shadow-sm"
                        :class="{
                            'motion-preset-fade -motion-translate-y-in-[40px] motion-delay-[600ms]': shown,
                            'invisible': !shown,
                        }"
                    >
                        {{ $slot }}
                    </div>
                </div>
            </div>

            <div class="md:col-span-3 flex-grow col-span-7">
                <div class="rounded-3xl xl:pr-20 size-full relative pr-0 overflow-hidden">
                    <div
                        class="rounded-3xl size-full relative overflow-hidden"
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
</section>
