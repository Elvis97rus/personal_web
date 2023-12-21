<!-- ====== About Section Start -->
<section id="about" class="dark:bg-slate-800 overflow-hidden pt-20 pb-12 lg:pt-[120px] lg:pb-[90px]">
    <div class="container mx-auto">
        <div class="-mx-4 flex flex-wrap items-center justify-between">
            <div class="w-full px-4 lg:w-6/12">
                <div class="-mx-3 flex items-center sm:-mx-4">
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="py-3 sm:py-4 hover:scale-105 transition-all duration-300 ease-in-out">
                            <img
                                src="/img/me1.jpg"
                                alt=""
                                class="w-full rounded-2xl"
                            />
                        </div>
                        <div class="py-3 sm:py-4 hover:scale-105 transition-all duration-300 ease-in-out">
                            <img
                                src="/img/me2.jpg"
                                alt=""
                                class="w-full rounded-2xl"
                            />
                        </div>
                    </div>
                    <div class="w-full px-3 sm:px-4 xl:w-1/2">
                        <div class="relative z-10 my-4 hover:scale-105 transition-all duration-300 ease-in-out">
                            <img
                                src="/img/me3.jpg"
                                alt=""
                                class="w-full rounded-2xl"
                            />
{{--                            <x-about-dots></x-about-dots>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-5/12">
                <div class="mt-10 lg:mt-0">
                  <span class="text-primary mb-2 block text-lg font-semibold">
                   <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-amber-500">
                       {{__('home.about_subheading')}}
                   </blockquote>
                  </span>
                    <h2 class="dark:text-gray-200 text-dark mb-8 text-3xl font-bold sm:text-4xl">
                        {{__('home.about_heading')}}
                    </h2>
                    <p class="text-body-color dark:text-gray-400 mb-8 text-base">
                        {!! __('home.about_body_1') !!}
                    </p>
                    <p class="text-body-color dark:text-gray-400 mb-12 text-base">
                        {!! __('home.about_body_2') !!}
                    </p>
                    <x-button-link href="#" variant="red" target="_blank" class="hover:scale-105 hover:font-semibold transition-all duration-300 ease-in-out">
                        {{__('home.about_btn')}}
                    </x-button-link>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== About Section End -->
