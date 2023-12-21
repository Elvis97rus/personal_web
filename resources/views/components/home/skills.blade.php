<!-- ====== Services Section Start -->
<section id="skills"  class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark bg-white">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap">
            <div class="w-full px-4">
                <div class="mx-auto mb-12 max-w-[610px] w-2/3 text-center lg:mb-12">
                   <span class="text-primary mb-2 block text-lg font-semibold">
                        {{__('home.s_n_exp_subheading')}}
                   </span>
                    <h2 class="text-dark dark:text-white mb-3 text-3xl leading-[1.2] font-bold sm:text-4xl md:text-[40px]">
                        {{__('home.s_n_exp_heading')}}
                    </h2>
                    <p class="text-base text-black dark:text-dark-6">
                        {{__('home.s_n_exp_description_1')}}
                    </p>

                    <hr class="w-6 text-center border-primary px-4 my-2 mx-auto">

                    <p class="text-black text-base dark:text-dark-6">
                        {{__('home.s_n_exp_description_2')}}
                    </p>

                    <hr class="w-6 text-center border-primary px-4 my-2 mx-auto">

                    <p class="text-black text-base dark:text-dark-6">
                        {{__('home.s_n_exp_description_3')}}
                    </p>
                </div>
            </div>
        </div>
        <div class="-mx-4 pb-12">
            <div class="skills_brands flex flex-wrap justify-between text-center p-6 rounded-md gap-14">
                @foreach($icons as $icon)
                    <div class="min-w-[128px] hover:scale-105 hover:-rotate-2 transition-all delay-50 ease-in-out bg-primary text-white font-semibold px-6 py-4 rounded-md text-center">
                        {!! $icon->content !!}
                        <p class="pt-3">{{$icon->title}}</p></div>
                @endforeach
            </div>
        </div>

    <!-- ====== Table Section Start -->

        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                @foreach($experiences as $item)
                    <div class="pb-2" x-data="{open: false }" >
                        <div class="border-0 cursor-pointer">
                            <div @click="open = !open" class="flex justify-between bg-primary px-6 py-4 text-lg font-medium ">
                                <p class="w-1/5 self-center text-white">{{$item->date}}</p>
                                <p class="w-full py-2 px-4 flex flex-col justify-between text-white">
                                    {!! $item->heading !!}
                                </p>
                                <span class="mx-auto text-white self-center text-4xl font-bold duration-300 focus:rotate-45 focus:text-red-700 w-10" :class="open ? 'rotate-45 !text-red-700' : ''">+</span>
                            </div>
                            <div class="relative collapse-content overflow-hidden transition-all max-h-0 duration-300 text-dark border-b border-l border-[#E8E8E8] bg-[#F3F6FF] dark:bg-dark-3 dark:border-dark dark:text-dark-7 text-base font-medium"
                                 x-ref="container" x-bind:style="open ? 'max-height: ' + $refs.container.scrollHeight + 'px' : ''">
                                <div class="mb-0 relative py-5 px-2 flex justify-between">
                                    <div class="w-1/3 px-2 py-2">
                                        <p class="text-xl font-semibold">Стек</p>
                                        {!! $item->stack !!}
                                    </div>
                                    <div class="px-4 py-2 w-full tasks-examples">
                                        @if($item->tasks)
                                            <p class="text-xl font-semibold">Пример задач</p>
                                            {!! $item->tasks !!}
                                        @endif
                                        @if($item->skills)
                                            <p class="text-xl font-semibold">Получил навыки</p>
                                            {!! $item->skills !!}
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>
    <!-- ====== Table Section End -->
    </div>
</section>
<!-- ====== Services Section End -->
